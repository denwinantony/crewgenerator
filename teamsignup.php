<?php
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

$email = $_POST['email'];
$pass = $_POST['pass'];
$uname = $_POST['uname'];

if($email != NULL &&  $pass != NULL && $uname != NULL)
{

$sqlsel = "Select * from teamuser where email='$email' or uname='$uname' "; 
    
    $result = mysqli_query($conn, $sqlsel); 
     
    $num = mysqli_num_rows($result);  
    

    if($num == 0) 
    { 
        
		$sql = "INSERT INTO teamuser (uname ,email, password)
		VALUES ('$uname', '$email', '$pass')";

		if ($conn->query($sql) === TRUE) {
			  echo "<script>
			alert('Signup Successful. Login to continue');
			window.location.href='teamlogin.html';
			</script>";
		} 
		else 
		{
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	if($num>0)  
   { 
      	echo "<script>
		alert('email already in use');
		window.location.href='teamlogin.html';
		</script>";
   }  
}
else
{
	echo "<script>
		alert('Fill something');
		window.location.href='teamsignup.html';
		</script>";
}



$conn->close();
?>