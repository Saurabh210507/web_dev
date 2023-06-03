<?php
if (!empty($name)){
    if (!empty($password)){
    $host = "localhost";
    $dbusername = 'tgkldatabase'@'localhost';
    $dbpassword = "#tgkldb@123";
    $dbname = "tgkldatabase";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$name =filter_input(INPUT_POST, 'name');
$dob =filter_input(INPUT_POST, 'dob');
$phone = filter_input(INPUT_POST, 'phone');
$gender = filter_input(INPUT_POST, 'gender');
$email = filter_input(INPUT_POST, 'email');
$class = filter_input(INPUT_POST, 'class');
$subject =filter_input(INPUT_POST, 'subject');
$scclname = filter_input(INPUT_POST, 'scclname');
$university =filter_input(INPUT_POST, 'university');
$country = filter_input(INPUT_POST, 'country');
$state = filter_input(INPUT_POST, 'state');
$city=filter_input(INPUT_POST, 'city');
$village =filter_input(INPUT_POST, 'vill');
$password =filter_input(INPUT_POST, 'password');



if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
    $sql = "INSERT INTO students (username, password) VALUES ('$name', '$dob', '$phone',$gender','$email','$class','$subject','$scclname', '$university', '$country',$state','$city','$village','$password' )";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>