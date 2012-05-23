<HTML>
<HEAD>
<title>convertions tests</title>
</HEAD>

<BODY>
<font face="Helvetica">
<h2>Conversion Test Output Files</h2>

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
<P>Output formats:</p>
<P><ul>
<?=$thelist?>
</ul></p>

</face>
</BODY></HTML>

