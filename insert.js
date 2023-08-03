function insert() {
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dba";
var user = document.getElementById("user").value;
var pass = document.getElementById("pass").value;
var email = document.getElementById("email").value; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (user, pass, email)
VALUES (user, pass, email)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

}