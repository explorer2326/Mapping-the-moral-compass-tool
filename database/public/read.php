<?php

if (isset($_POST['submit'])) 
{

}
?>

<?php require_once "templates/header.php"; ?>
		
<?php  
if (isset($_POST['submit'])) 
{	

	require "../config.php";
	require "../common.php";

	$conn = new mysqli($host, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM users WHERE location = '".$_POST["location"]."'";
	$result = $conn->query($sql);	


	if ($result->num_rows > 0) 
	{ ?>
		<h2>Results</h2>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email Address</th>
					<th>Age</th>
					<th>Location</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach ($result as $row) 
				{ ?>
					<tr>
						<td><?php echo escape($row["id"]); ?></td>
						<td><?php echo escape($row["firstname"]); ?></td>
						<td><?php echo escape($row["lastname"]); ?></td>
						<td><?php echo escape($row["email"]); ?></td>
						<td><?php echo escape($row["age"]); ?></td>
						<td><?php echo escape($row["location"]); ?></td>
						<td><?php echo escape($row["date"]); ?> </td>
					</tr>
			<?php 
			} ?>
			</tbody>
		</table>
	<?php 
	} 
	else 
	{ ?>
		<blockquote>No results found for <?php echo escape($_POST['location']); ?>.</blockquote>
	<?php
	} 
}?> 

<h2>Find user based on location</h2>

<form method="post">
	<label for="location">Location</label>
	<input type="text" id="location" name="location">
	<input type="submit" name="submit" value="View Results">
</form>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>