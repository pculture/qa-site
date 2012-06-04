<?php

// Written by Greg Opperman for the Participatory Culture Foundation
// Copyright 2006

$i= $_REQUEST['i'];

	print <<<END
<HTML><BODY>
<H2>Democracy Feed update test</H2>

END;

if ($i < 1 or $i > 2) {
	print <<<END
	This script is meant to test feed updates in democracy player.
	You can use the buttons below to replace 
	<a href="http://qa.pculture.org/feeds_test/feed9.rss">http://qa.pculture.org/feeds_test/feed9.rss</a>
	with a feed with either one item or two:<br />
	<BLOCKQUOTE>
	<FORM action="http://qa.pculture.org/feeds_test/feed.php" method="GET">
	<input type="radio" name="i" value="1"> 1 Item
	<br />
	<input type="radio" name="i" value="2"> 2 Items <br />
	<INPUT type="submit" value="Submit">
	</FORM>
	&nbsp;&nbsp;&nbsp;
	</FORM>
	</BLOCKQUOTE>
END;
} else {
   $f = fopen('feed9.rss', 'w');
   if(!$f) {
      echo "Error! Couldn't open the file.";
   } else {
   	fputs($f,"<?xml version=\"1.0\" encoding=\"utf-8\"?>
		<rss version=\"2.0\" 
			xmlns:media=\"http://search.yahoo.com/mrss\"
			xmlns:creativeCommons=\"http://backend.userland.com/creativeCommonsRssModule\"
			xmlns:dtvmedia=\"http://particpatoryculture.org/RSSModules/dtv/1.0\">
		<channel>
		<title>Feed update TEST</title>
		<description>
		This is a PCF-governed RSS 2.0 feed to test feed 
updating.
		</description>
		<link>http://qa.pculture.org/feeds_test/feed1</link>
		<dtvmedia:libraryLink>http://qa.pculture.org/feeds_test/feed1</dtvmedia:libraryLink>
		<pubDate>Thu, 20 Apr 2006 12:53:29 -0500</pubDate>
		<generator>Participatory Culture Foundation</generator>
		<item>
			<title>Video 1</title>
			<link>http://qa.pculture.org/feeds_test/py1.mov</link>
			<guid 
isPermaLink=\"false\">A1cd241bf61bf9c4fb34aa48ecb252c1e40d50088</guid>
			<description>
				This is the first test video, it is 842 KB and should download quickly.
			</description>
			<media:thumbnail url=\"http://qa.pculture.org/feeds_test/mike_tv_drawing_cropped.jpg\"/>
			<enclosure url=\"http://qa.pculture.org/feeds_test/py1.mov\" type=\"video/quicktime\" length=\"842\"/>
			<pubDate>Wed, 19 Apr 2006 13:53:21 -0500</pubDate>
		</item>");
	if ($i == 2) {
		fputs($f,"<item>
			<title>Video 2</title>
			<link>http://qa.pculture.org/feeds_test/machine_gun.avi</link>
			<guid isPermaLink=\"false\">A1cd241bf61bf9c4fb34aa48ecb252c1e40d50087</guid>
			<description>
				This is the second test video, it is 842 KB and should download quickly.
			</description>
			<media:thumbnail url=\"http://qa.pculture.org/feeds_test/mike_tv_drawing_cropped.jpg\"/>
			<enclosure url=\"http://qa.pculture.org/feeds_test/machine_gun.avi\" type=\"video/quicktime\" length=\"842\"/>
			<pubDate>Thu, 20 Apr 2006 13:53:21 -0500</pubDate>
		</item>");
	}
	fputs($f, "</channel></rss>");

   }

   fclose($f);
   print"Feed Changed";
}




print "</BODY></HTML>";
?>
