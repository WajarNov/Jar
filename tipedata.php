<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cek Tipe</title>
</head>

<body>
	<?php
		$bil = 3;
		var_dump(is_int($bil));
		// Output: bool(true)
		
		$bil = 3;
		var_dump(is_float($bil));
		// Output: bool(false)
		
		$bil = 3;
		var_dump(is_object($bil));
		// Output: bool(false)
		
		$var = "";
		var_dump(is_string($var));
		// Output: bool(true)
	?>
</body>
</html>