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
$sport = $_POST['sport'];
$age = $_POST['age'];
$level = $_POST['level'];
$turf = $_POST['turf'];

$sql = "INSERT INTO userinfo (email ,sport, age,level,turf)
    VALUES ('$email', '$sport', '$age', '$level','$turf')";

    if ($conn->query($sql) === TRUE) 
    {
      $_SESSION["sport"]=$sport;
      $_SESSION["age"]=$age;
      $_SESSION["level"]=$level;
      $_SESSION["turf"]=$turf;
        echo "<script>
      alert('info Successful.continue');
      window.location.href='indinext.php';
      </script>";
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

	$conn->close();
?>