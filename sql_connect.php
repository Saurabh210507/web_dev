header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");


<?php
$host ="localhost" ;
$username = 'tgkldatabase'@'localhost';
$password = "#tgkldb@123";
$database = "tgkldatabase";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$class = $_POST['class'];
$subject = $_POST['subject'];
$scclname = $_POST['scclname'];
$university = $_POST['university'];
$country = $_POST['country'];
$state = $_POST['state'];
$city=$_POST['city'];
$village = $_POST['vill'];
$password = $_POST['password'];

// Insert the data into the database
$sql = "INSERT INTO students (username, password) VALUES ('$name', '$dob', '$phone',$gender','$email','$class','$subject','$scclname', '$university', '$country',$state','$city','$village','$password' )";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
