<?php
//outputs the filename, mimetype and md5 sum of an uploaded file
print $_FILES['myfile']['name']."\n";
print $_FILES['myfile']['type']."\n";
print md5_file($_FILES['myfile']['tmp_name']);