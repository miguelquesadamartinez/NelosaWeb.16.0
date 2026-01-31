<?
/*If you wish to remove/get all the comments from a HTML string I think that this reg. ex. could come in handy :
'<!--([^-]*([^-]|-([^-]|-[^>])))*-->'

That is :
 * the string delimited by <!-- and --> contains no '-' sign
 * or if it does, the next character is not a '-'
 * or if it is, the next one is not a '>'
*/

$url = "http://www.sonce.net/index.php";
echo "Url: ".$url;
$new = eregi_replace("^(.{2,6}://)?[^/]*/", "", $url);
echo "Path: ".$new; 


/*new function for href2text : */

function AHREF2text($string) {
 return eregi_replace('(<a [^<]*href=["|\']?([^ "\']*)["|\']?[^>].*>([^<]*)</a>)','[\\3] (link: \\2)', $string);
}



Transform HTML links into plain-text "links" with the URL visible

function AHREF2text($string) {
   return eregi_replace('<A .*HREF=("|\')?([^ "\']*)("|\')?.*>([^<]*)</A>', '[\\4] (link: \\2)', $string);
}

$HTMLstring = 'A link to <a href="http://www.php.net">PHP.net</A>';
echo AHREF2text($HTMLstring);
// prints:  A link to [PHP.net] (link: http://www.php.net) 

A Quick way of removing excess spaces:

$string = "One        Two          Three  Four";

$var = eregi_replace(" +", " ", $string); 

echo $var;
?> 
<?php 
function AHREF2text($string) {
 return eregi_replace('(<a [^<]*href=["|\']?([^ "\']*)["|\']?[^>].*>([^<]*)</a>)','\\2', $string);
}

function getMail_2($string) {
 return eregi_replace('(\b[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}\b)','\\1', $string);
}

function getMail_3($string) { // Esta va fina
 //eregi('(\b[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}\b)', $string_s);
 eregi('([A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4})', $string, $string_s);
 for ($i = 1; $i <= 10; $i++) {
	if ( $string_s[$i] != "" )
		{
		    echo ("<BR>La 4 <BR>");
			echo ( "<BR>$string_s[$i]<BR>");
		}
	}
}

function getMail($string) { // Esta va fina
 //eregi('(\b[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}\b)', $string_s);
 eregi('<a href=["|\']mailto:(.*)["|\']>', $string, $string_s);
 for ($i = 1; $i <= 10; $i++) {
	if ( $string_s[$i] != "" )
		{
		    echo ("<BR>La 1 <BR>");
			echo ( "<BR>$string_s[$i]<BR>");
		}
	}
}

//eregi ('<a href=["|\']mailto:(.*)["|\']>', $line, $mails);

/*echo ("<BR>");
echo AHREF2text ('<a href="bb.php">link</a>');
echo ("<BR>");

$url = "http://www.sonce.net/index.php";
echo "Url: ".$url."<BR>";*/
//$new = eregi_replace("^(.{2,6}://)?[^/]*/", "", $url);
//echo "Path: ".$new."<BR>"; 


getMail_4('<a href="mailto:info@nelosa.net">');


?>