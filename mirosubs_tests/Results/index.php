<HTML>
<HEAD>
<title>Universal Subtitles Test Results</title>
</HEAD>

<BODY>
<font face="Helvetica">
<h2>Test Results Using Selenium-RC for Universal Subtitles Regression Testing</h2>

<?php
 if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != ".." && $file != "index.php")
	  {
          	$thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
          }
       }
  closedir($handle);
  }
?>
<p>Results:</p>
<P><ul>
<?=$thelist?>
</ul></p>

</face>
</BODY></HTML>

