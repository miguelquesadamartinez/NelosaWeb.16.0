<?php
if ($handle = opendir(".")) {
    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) { 
 			if ( ( $file != "." ) and ( $file != ".." ) ) echo $file . "<BR>\n";
    }
    closedir($handle); 
}
?>