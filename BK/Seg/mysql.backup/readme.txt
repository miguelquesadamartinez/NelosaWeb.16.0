class-1 MySQL Backup/Restore - readme.txt
-----------------------------------------

http://www.class1web.co.uk/downloads
------------------------------------
class-1 Backup/Restore is a PHP script that allows backup and restore of MySQL tables.
It can be used as a stand-alone script or you can incorporate it into your own scripts.

It is written and distributed under the GNU General Public License which means that its
source is freely-distributed and available to the general public. See license.txt for
more information.


Features
--------
This script fully functioning. Some of the advanced features are listed here;
 * Extremely easy installation
 * Extremely easy usage
 * Backup from any database
 * Restore to any database
 * Select which tables to backup
 * Choose whether to backup just table structure, data or both
 * Choose whether to restore just table structure, data or both


What's New?
-----------
v0.1
----
 * Initial release


Installation
------------
 * Upload all the files to a directory on your web server.

 * Make the folder that contains the uploaded files writable by scripts.
   (CHMOD the folder and make sure that the "Group Write" permission is set).

 * Using your web browser browse to the folder you created and run backup.php.

 * The first time the script is ran it will request some details about your MySQL
   server.


Using backup.inc in your own scripts
------------------------------------
Before using any of the functions of backup.inc you need to make sure your script
connects to a MySQL database and selects a database. backup.inc will work with the
currently selected database. After connecting to MySQL and selecting a database
you only need to call the functions below with the correct arguments.

backup_data($tablename_array, $backup_structure, $backup_data)

This function should be called when you want to backup data. It takes three variables
as arguments;

 * $tablename_array   - an array containing the names of the tables you want to backup
 * $backup_structure  - either 0 or 1, use 1 to backup the table structures
 * $backup_data       - either 0 or 1, use 1 to backup the table data

The function returns a string which contains all of the SQL commands to reconstruct
your tables. It is advisable to direct this to a file (using either PHP file commands or
using the HTML header information - see the enclosed backup.php for an example of using
HTML header information to force a file download).

restore_data($filename, $restore_structure, $restore_data, $db_selected)

This function should be called when you want to restore data. It takes four variables
as arguments;

 * $filename          - a string containing the full path and filename of the file to
                        use to restore the data - your script is responsible for putting
                        the file in place
 * $restore_structure - either 0 or 1, use 1 to restore the table structures (if they are
                        present in the file specified)
 * $restore_data      - either 0 or 1, use 1 to restore the table data (if present in the
                        file specified)
 * $db_selected       - string containing the name of the selected database


Requirements
------------
This software requires a web server running PHP. Obviously you need MySQL databases
to backup for this to be of any use.

It has been developed and tested on the following plaforms;
 * Windows XP running Apache 2.0.49, PHP 4.3.4, MySQL 3.23.49
 * Linux Web Server running Apache 2.0.49, PHP 4.3.6, MySQL 3.23.52

It has been tested with the following web browsers;
 * Internet Explorer
 * Mozilla
 * Mozilla FireFox
 * Safari
 * Netscape
 * Opera


Further Help
------------
For further help visit the official class-1 forums at http://www.class1web.co.uk/forum