	<?php
	if(isset($_POST['submit'])){	

		require_once('sqlconnect.php');

		//PREPARED STATEMENT STAGE 1
		$stmt = $mysqli->prepare(
			"INSERT INTO news (title, author, email, article,
					picture, date_submitted)
			VALUES(?, ?, ?, ?, ?, NOW())");

		//BIND PARAMETERS TO VARIABLES
		$stmt->bind_param("sssss", $title, $author, $email, $article, $picture);

		//DEFINE VARIABLES TO FORM DATA
		$title = $_POST['title'];
		$author = $_POST['author'];
		$email = $_POST['email'];
		$article = $_POST['article'];
		$picture = $_POST['picture'];

	//EXECUTE STMT
	$stmt->execute();

	printf("%d Row inserted.\n", $stmt->affected_rows);

		//CLOSE STATEMENT
		$stmt->close();

		echo "<br />Connection closed";
	
	}//close isset

	?>