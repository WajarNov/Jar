<!DOCTYPE html>
<html lang="en">
<head>
	<title>Demo Variabel</title>
</head>

<body>
	<?php
		$bil = 123456789;
		var_dump($bil);
		// Output: int(123456789)
		
		$var = "";
		var_dump($var);
		// Output: string(0) ""
		
		$var = null;
		var_dump($var);
		// Output: NULL
	?>
</body>
</html>