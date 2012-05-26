<?
if($_SERVER['REQUEST_METHOD'] == 'HEAD') {
   header("HTTP/1.1 405 NOT ALLOWED");
}  else {
  echo("DYNAMIC CONTENT");
}
?>
