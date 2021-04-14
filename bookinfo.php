<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crewgenerator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email =$_SESSION["email"];

$time = $_POST['time'];
$turf = $_POST['turf'];

$sql = "INSERT INTO bookinfo (email ,timex ,turf)
    VALUES ('$email', '$time','$turf')";

    if ($conn->query($sql) === TRUE) 
    {
      $_SESSION["time"]=$time;
      $_SESSION["turf"]=$turf;
        echo "<script>
      alert('info Successful.continue');
      window.location.href='booknext.php';
      </script>";
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

	$conn->close();
?>