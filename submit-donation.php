<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "food_donation");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$foodType = $_POST['foodType'];
$quantity = $_POST['quantity'];
$pickup = $_POST['pickup'];
$address = $_POST['address'];
$date = $_POST['date'];
$time = $_POST['time'];

// Prepare SQL query
$sql = "INSERT INTO donations (name, email, phone, foodType, quantity, pickup, address, date, time) 
        VALUES ('$name', '$email', '$phone', '$foodType', '$quantity', '$pickup', '$address', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for your donation!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
