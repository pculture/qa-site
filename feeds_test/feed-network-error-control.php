<?php

// Written by Greg Opperman for the Participatory Culture Foundation
// Copyright 2006

$i= $_REQUEST['i'];

	print <<<END
<HTML><BODY>
<H2>Democracy Feed update test</H2>

END;

if ($i < 1 or $i > 3) {
	print <<<END
	This script is meant to test feed updates in democracy player.
	You can use the buttons below to change the URL on the item in  
	<a href="http://pculture.org/feeds_test/feed-network-error.php">http://pculture.org/feeds_test/feed-network-error.php</a>
	<br />
	<BLOCKQUOTE>
	<FORM
	action="http://pculture.org/feeds_test/feed-network-error-control.php" method="GET">
	<input type="radio" name="i" value="1"> HTTP Error <br />
	<input type="radio" name="i" value="2"> Wrong mime-type <br />
	<input type="radio" name="i" value="3"> Working <br />
	<INPUT type="submit" value="Submit">
	</FORM>
	&nbsp;&nbsp;&nbsp;
	</FORM>
	</BLOCKQUOTE>
END;
} else {
  $f = fopen('feed-network-error.php', 'w');
   if($i == 1) {
       $content = <<<PHP
<?php
	header("HTTP/1.0 404 Not Found");
?>
PHP;
       $new_state = "network error";
   } else if($i == 2) {
       $content = <<<PHP
<?php
	header("Content-Type: text/plain");
	echo("Hi.  My name is bad content type");
?>
PHP;
       $new_state = "wrong mime type";
   } else {
       $content = <<<PHP
<?php
	header("Content-Type: application/rss+xml");
	\$f = fopen("feed1.rss", 'r');
	fpassthru(\$f);
	fclose(\$f);
?>
PHP;
       $new_state = "working";
   }
   fputs($f, $content);
   fclose($f);
   echo("Feed Changed to " . $new_state);
}




print "</BODY></HTML>";
?>
