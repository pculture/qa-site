<?php
$data = file_get_contents("py1.mov");
header('Content-Length: ' . strlen($data));
$chunklen = strlen($data) / 2;
$chunk1 = substr($data, 0, $chunklen);
$chunk2 = substr($data, $chunklen);
echo $chunk1;
sleep(10);
echo $chunk2;
?>
