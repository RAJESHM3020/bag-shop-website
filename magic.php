<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "bag";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["tel"];
    $message = $_POST["message"];

    // Insert data into the database
    $sql = "INSERT INTO contact_form_data (name, email, phone_number, message) VALUES ('$name', '$email', '$phone_number', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<center>";
        echo "<h2>Response Recorded successfully ! </h2>";
echo "</center>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>submitted</title>
</head>
<body>
<br>
<br>
<br>
<center>
    <h1>Thank You For Your Response</h1>
    <b><u><h3><a href="http://localhost/kesh/main">Go back to main page</a></b></u></h3>
</center>
</body>
</html>
