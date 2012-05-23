<html>
<head>
<title>Header Test</title>
</head>
<body>
<table border=1 cellpadding=5>
<tr>
<th>header</th>
<th>value</th>
</tr>
<?php
foreach($_SERVER as $name => $value) {
	if(substr($name, 0, 5) == "HTTP_") {
		$name = str_replace('_', '-', strtolower(substr($name, 5)));
		echo '<tr><td>' . $name . '</td><td>' . $value . '</td></tr>';
	}
}
?>
</table>
</script>
</body>
</html>
