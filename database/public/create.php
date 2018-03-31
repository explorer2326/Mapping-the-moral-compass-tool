<?php
if (isset($_POST['submit']))
{	
	require "../config.php";	
	$conn = new mysqli($host, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO answers (firstname, lastname, email, age, location) VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."', '".$_POST["age"]."', '".$_POST["location"]."')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}		
}
?>

<?php require "templates/header.php"; ?>
<h2>Add a user</h2>

<form method="post">
	<label for="firstname">First Name</label>
	<input type="text" name="firstname" id="firstname">
	<label for="lastname">Last Name</label>
	<input type="text" name="lastname" id="lastname">
	<label for="email">Email Address</label>
	<input type="text" name="email" id="email">
	<label for="age">Age</label>
	<input type="text" name="age" id="age">
	<label for="location">Location</label>
	<input type="text" name="location" id="location">
	<input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>


