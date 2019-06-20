<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "tickets";

//Create conenction
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if (!$conn) {
	die("Conenction failed: ".mysqli_connect_error());
}
//echo "Connected successfully";
$q = strval($_GET['q']);
$sql = "INSERT INTO tickets(Name) VALUES('".$q."')";

if(mysqli_query($conn,$sql) === TRUE) {
	$last_id = $conn->insert_id;
	echo $last_id;
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
