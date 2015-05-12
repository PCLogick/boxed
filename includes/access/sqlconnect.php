<html>
<head>
</head>

<body>
	<?php 
		require_once('includes/access/auth.php');
		$mysqli = new mysqli($host, $user, $pass, $db);
		
		if($mysqli->connect_errno){
			echo 'Failed to connect to MySQL: (" . $mysqli->connect_errno . ")' . $mysqli->connect_error;
		}

	?>

</body>
</html>