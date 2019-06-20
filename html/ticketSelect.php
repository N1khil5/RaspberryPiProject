<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "tickets";
//Create conenction
$conn = mysqli_connect($servername, $username, $password,$dbname);

//Check connection
if (!$conn) {
	die("Conenction failed: ".mysqli_connect_error());
}
$q = intval($_GET['q']);
$sql = "SELECT * FROM tickets WHERE ticketID = ".$q;
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "Ticket ID: " . $row["ticketID"]. " - Show: " .$row["Name"];
		$sql1 = "DELETE FROM tickets WHERE ticketID = ".$q;
		$result1 = mysqli_query($conn,$sql1);
		echo " Ticket has been removed from database. Enjoy the show.";
	}
} else {
	echo "No ticket found matching id. Ticket may already be used.";
}

mysqli_close($conn);
?>
