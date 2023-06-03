<?php

$name = filter_input(INPUT_POST, 'name');
$dob = filter_input(INPUT_POST, 'dob');
$phone = filter_input(INPUT_POST, 'phone');
$gender = filter_input(INPUT_POST, 'gender');
$email = filter_input(INPUT_POST, 'email');
$class = filter_input(INPUT_POST, 'class');
$subject = filter_input(INPUT_POST, 'subject');
$scclname = filter_input(INPUT_POST, 'scclname');
$university = filter_input(INPUT_POST, 'university');
$country = filter_input(INPUT_POST, 'country');
$state = filter_input(INPUT_POST, 'state');
$city = filter_input(INPUT_POST, 'city');
$village = filter_input(INPUT_POST, 'vill');
$password = filter_input(INPUT_POST, 'password');

// Database information
$host = "localhost";
$dbusername = 'id20859371_techguru';
$dbpassword = "z/hc>J)v_IRU2=hC";
$dbname = "id20859371_newtechgurukuldb";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

//if subjet col not fill

$subject = filter_input(INPUT_POST, 'subject');
if (empty($subject)) {
    // Display error message or redirect back to the form
    echo "Subject field is required.";
    // Or use header("Location: your-form-page.php") to redirect
    exit;
}


// ...

// Prepare the SQL statement using prepared statements
$sql = "INSERT INTO students (name, dob, phone, gender, email, class, subject, college, university, country, state, city, village, password) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    echo "Error: " . $conn->error;  // Display the specific error message
} else {
    $stmt->bind_param("ssisssssssssss", $name, $dob, $phone, $gender, $email, $class, $subject, $scclname, $university, $country, $state, $city, $village, $password);
    
    // ...

if ($stmt->execute()) {
    // Record inserted successfully, display success message on the same form page
    echo "Registration successful";
} else {
    echo "Error: " . $stmt->error;
}
    // Close the prepared statement
    $stmt->close();
}

// ...


// Close the database connection
$conn->close();
?>
