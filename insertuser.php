<?php
include 'Allconstants.php';
$servername = SERVERNAME;
$username = USERNAME;
$password = PASSWORD;
$dbname = DBNAME;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	 echo "connection successful";
}

$firstname = $_POST["firstname"];
echo "<br>" .$firstname;
$lastname = $_POST["lastname"];
echo "<br>" .$lastname;
$username = $_POST["username"];
echo "<br>" .$username;
$email = $_POST["email"];
echo "<br>" .$email;
$password = $_POST["password"];
//echo "<br>" .$password;
$password = md5($password);
$confirm = $_POST["confirm"];
echo "<br>" .$confirm;
$phone = $_POST["phone"];
echo "<br>" .$phone;
$address = $_POST["address"];
echo "<br>" .$address;

$sql = "INSERT INTO user(FirstName, LastName, Username ,Email, Password, PhoneNumber, Address ,role) VALUES ('$firstname','$lastname','$username','$email' ,'$password','$phone','$address','Client')";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("Location: ./login.php?message=true");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>