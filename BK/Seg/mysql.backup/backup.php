<?php

// Defines
DEFINE ("DB_SELECT_FORM", 1);
DEFINE ("POST_DB_SELECT_FORM", 2);
DEFINE ("POST_SELECT_TABLES_FORM", 3);
DEFINE ("RESTORE_DATA", 4);
DEFINE ("POST_CONFIG_FORM", 5);
DEFINE ("DELETE_CONFIG_FILE", 6);
DEFINE ("TITLE", "class-1 MySQL Backup/Restore");
DEFINE ("VERSION", "0.1");

// Make sure we pick up variables passed via URL
foreach (array_keys($_GET) as $key) $$key = $_GET[$key];

// Start a session and get variables
session_start();
if ($_SESSION['db_selected']) {
	$db_selected = $_SESSION['db_selected'];
} else {
	$db_selected = "";
}

// Output HTML headers (except for the backup download "page")
if ($mode != POST_SELECT_TABLES_FORM) {
	echo "<html>\n";
	echo "<head>\n";
	echo "<title>".TITLE."</title>\n";
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"backup.css\" />\n";
	echo "</head>\n";
	echo "<body>\n";
}

// Test script can write to folder (for config file and restore uploads)
clearstatcache(); // clear cache - make sure we get current file permissions
$perms = fileperms(".");

// Check for group write permission - exit with an error if we don't have it
if (!($perms & 0x0010)) {
	echo "The script does not have write permission on the folder. The script cannot operate without write permission.\n";
	
	echo "</body>\n";
	echo "</html>\n";
	exit();
}

// Delete config file if requested
if ($mode == DELETE_CONFIG_FILE) {
	unlink("./config.inc");
}

// Write config file if requested
if ($mode == POST_CONFIG_FORM) {
	$handle = fopen("config.inc", "w");
	
	$db_host = $_POST['db_host'];
	$db_user = $_POST['db_user'];
	$db_pass = $_POST['db_pass'];
	
	fwrite($handle, "<?php\n");
	fwrite($handle, "\t\$db_host=\"$db_host\";\n");
	fwrite($handle, "\t\$db_user=\"$db_user\";\n");
	fwrite($handle, "\t\$db_pass=\"$db_pass\";\n");
	fwrite($handle, "?>\n");
	
	fclose($handle);	
}

// Check for config.inc file
$config_exist = 0;
$dh = opendir(".");
while (false !== ($file = readdir($dh))) {
	if ($file == "config.inc") $config_exist = 1;
}

// Output a form to request MySQL server details if config.inc doesn't exist
if (!$config_exist) {
	echo "<form method=\"post\" action=../../../gueb/eMiKi/backup//%22backup.php?mode=%22.POST_CONFIG_FORM.%22%5C%22>\n";
	
	echo "<table cellspacing=\"0\" cellpadding=\"3\">\n";
	echo "<tr><td class=\"title\" colspan=\"2\">".TITLE." Setup</td></tr>\n";
	echo "<tr><td class=\"main_left\" colspan=\"2\">Enter your MySQL Server details below.</td></tr>\n";

	echo "<tr><td class=\"main_left\">Server:</td>\n";
	echo "<td class=\"main_left\"><input type=\"text\" name=\"db_host\" value=\"localhost\" style=\"width:200px\" /></td></tr>\n";
	
	echo "<tr><td class=\"main_left\">Username:</td>\n";
	echo "<td class=\"main_left\"><input type=\"text\" name=\"db_user\" value=\"username\" style=\"width:200px\" /></td></tr>\n";	

	echo "<tr><td class=\"main_left\">Password:</td>\n";
	echo "<td class=\"main_left\"><input type=\"password\" name=\"db_pass\" style=\"width:200px\" /></td></tr>\n";	
	
	echo "<tr><td class=\"main_left\" colspan=\"2\"><br /><input type=\"submit\" value=\"Post Server Details\" /> <input type=\"reset\" value=\"Reset\">\n";
	
	echo "</td></tr>\n";
	
	echo "</table>\n";

	echo "</form>\n";
	echo "</body>\n";
	echo "</html>\n";
	exit();
}

require_once("config.inc");

// Connect to MySQL"localhost" ,"nelosa_nelosa","mqm1804"
$link = mysql_connect("localhost" ,"nelosa","mqm1804");
if (!$link) die("Failed to connect to MySQL - ".mysql_error());

// Select database if one is chosen
if ($_POST['db_selected']) $db_selected = $_POST['db_selected'];

if ($db_selected) {
	$result = mysql_selectdb($db_selected, $link);
	if (!$result) {
		$_SESSION = array();
		session_destroy();

		die("Failed to select database - ".mysql_error());
	}
}

// require_once backup functions
require_once("backup.inc");

// Simple dialog box function
function dialog_box($title, $message)
{
	echo "<table cellspacing=\"0\" cellpadding=\"3\">\n";
	echo "<tr><td class=\"title\">$title</td></tr>\n";
	echo "<tr><td class=\"main_left\"><p>$message</p></td></tr>\n";
	echo "</table>\n";
}

// Handle URL actions
switch ($mode) {
	case POST_DB_SELECT_FORM: {
		// Get the selected database and store it in a session
		$db_selected = $_POST['db_selected'];
		$_SESSION['db_selected'] = $db_selected;
		
		// Get list of tables in the database and output form
		$result = mysql_list_tables($db_selected);
		$num_tables = mysql_num_rows($result);

		echo "<table cellspacing=\"0\" cellpadding=\"3\">\n";
		echo "<tr><td class=\"title\">Backup MySQL Data</td></tr>\n";
		echo "<tr><td class=\"main_left\"><p>Once you click select the selected tables will be backed up and a file download will start which will download the backup file to your computer.";

		echo "<p><b>Select MySQL Tables to backup</b></p>\n";
		
		echo "<form method=\"post\" action=../../../gueb/eMiKi/backup//%22backup.php?mode=%22.POST_SELECT_TABLES_FORM.%22%BD%03m_tables=$num_tables%5C%22>\n";

		for ($i = 0; $i < $num_tables; $i++) {
			$tablename = mysql_tablename($result, $i);
			
			$checkbox_string = sprintf("<input type=\"checkbox\" name=\"check_id%d\" /><input type=\"hidden\" name=\"tablename%d\" value=\"%s\" />&nbsp;%s<br />\n", $i, $i, $tablename, $tablename);
			echo "$checkbox_string";
		}

		echo "<p><b>Select MySQL details to backup</b></p>\n";

		echo "<input type=\"checkbox\" name=\"structure\" checked />&nbsp;Table Structure<br />\n";
		echo "<input type=\"checkbox\" name=\"data\" checked />&nbsp;Table Data<br />\n";
		
		echo "<br /><input type=\"submit\" value=\"Select\">\n";
		echo "<input type=\"reset\" value=\"Reset\">\n";
		echo "</form>\n";

		echo "</p></td></tr>\n";
		echo "</table>\n";
		
		break;
	}
	
	case POST_SELECT_TABLES_FORM: {
		$sql_string = "";
		$backup_structure = ($_POST['structure'] == "on") ? 1 : 0;
		$backup_data = ($_POST['data'] == "on") ? 1 : 0;

		if (!DEBUG) {
			header("Content-type: application/force-download");
			header("Content-Disposition: attachment; filename=backup.bak");
		} else {
			echo "<pre>\n";
		}

		$j = 0;
		for ($i = 0; $i < $num_tables; $i++) {
			$check_id = sprintf("check_id%d", $i);
			$tablename = sprintf("tablename%d", $i);

			if ($_POST[$check_id]) {
				$tablename_array[$j] = $_POST[$tablename];
				$j++;
			}
		}

		$sql_string = backup_data($tablename_array, $backup_structure, $backup_data);
		
		echo "$sql_string";
		
		if (DEBUG) echo "</pre>\n";
		
		break;
	}
	
	case RESTORE_DATA: {
		dialog_box("Restore Complete", "The Restore is complete. Any errors or messages encountered are shown below. Any tables which were backed up can be deleted once you are happy with the restored tables.");

		echo "<p />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

		restore_data("./$filename", $restore_structure, $restore_data, $db_selected);

		unlink("./$filename");

		break;
	}

	case DB_SELECT_FORM: {
		// Get list of databases and output form
		$db_list = mysql_list_dbs($link);

		echo "<table cellspacing=\"0\" cellpadding=\"3\">\n";
		if ($action == "backup") {
			echo "<tr><td class=\"title\">Backup MySQL Data</td></tr>\n";
			echo "<tr><td class=\"main_left\"><p><b>Select database to backup from</b>";
		}
		if ($action == "restore") {
			echo "<tr><td class=\"title\">Restore MySQL Data</td></tr>\n";
			echo "<tr><td class=\"main_left\"><p><b>Select database to restore to</b>";
		}

		if ($action == "backup") echo "<form method=\"post\" action=\"backup.php?mode=".POST_DB_SELECT_FORM."\">\n";
		if ($action == "restore") {
			// Upload file
			$filename = $_FILES['filename']['name'];

			$ret_val = move_uploaded_file($_FILES['filename']['tmp_name'], "./$filename");

			if (!$ret_val) {
				echo "<br /><br />Could not upload file.\n";
				echo "</p></td></tr>\n";
				echo "</table>\n";

				break;
			}

			$restore_structure = ($_POST['structure'] == "on") ? 1 : 0;
			$restore_data = ($_POST['data'] == "on") ? 1 : 0;
		
			echo "<form method=\"post\" action=../../../gueb/eMiKi/backup//%22backup.php?mode=%22.RESTORE_DATA.%22&filename=$filename&restore_structure=$restore_structure&restore_data=$restore_data%5C%22>\n";
		}

		echo "<select name=\"db_selected\" style=\"width:200px\">\n";

		while ($row = mysql_fetch_object($db_list)) {
			$db_select_string = sprintf("<option>%s</option>\n", $row->Database);
			echo $db_select_string;
		}

		echo "</select>\n";
		echo "<input type=\"submit\" value=\"Select\">\n";
		echo "</form>\n";

		echo "</p></td></tr>\n";
		echo "</table>\n";
		
		break;
	}

	default: {
		echo "<h3><u>".TITLE."</u></h3>";

		echo "<p>Choose an option below.</p>";

		dialog_box("Backup MySQL Data", "Click <a href=../../../gueb/eMiKi/backup//%22backup.php?mode=%22.DB_SELECT_FORM.%22&action=backup%5C%22>here</a> to backup MySQL data.");

		echo "<p />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

		dialog_box("Restore MySQL Data", "<b>Select a file</b><form method=\"post\" enctype=\"multipart/form-data\" action=../../../gueb/eMiKi/backup//%22backup.php?mode=%22.DB_SELECT_FORM.%22&action=restore%5C%22><input type=\"file\" name=\"filename\" /><br /><br /><b>Select MySQL details to restore</b><br /><br /><input type=\"checkbox\" name=\"structure\" checked />&nbsp;Table Structure<br /><input type=\"checkbox\" name=\"data\" checked />&nbsp;Table Data<br /><br /><input type=\"submit\" value=\"Restore\" /></form><p />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");

		echo "<p />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

		dialog_box("Delete MySQL Configuration Details", "Click <a href=../../../gueb/eMiKi/backup//%22backup.php?mode=%22.DELETE_CONFIG_FILE.%22%5C%22>here</a> to delete the MySQL configuration details and re-enter them.<p />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
	}
}

// Close MySQL link
mysql_close($link);

if ($mode != POST_SELECT_TABLES_FORM) {
	echo "<p><a href=../../../gueb/eMiKi/backup//%22backup.php/%22>Return to Start</a></p>\n";

	echo "<p>".TITLE." (v".VERSION.")<br />Powered by and copyright <a  onclick=\"window.open(this.href,'new');return false;\" href=\"http://www.class1web.co.uk\">class-1</a> Software, 2004.</p>\n";

	echo "</body>\n";
	echo "</html>\n";
}

?>