<?php
include 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $add_street = $_POST['add_street'];
    $add_city = $_POST['add_city'];
    $add_district = $_POST['add_district'];
    $mobileNo = $_POST['mobileNo'];
    $email = $_POST['email'];
    $pharmacy = $_POST['pharmacy'];

    // Insert data into the database
    $sql = "INSERT INTO medi (name, add_street, add_city, add_district, mobileNo, email, pharmacy) 
            VALUES ('$name', '$add_street', '$add_city', '$add_district', '$mobileNo', '$email', '$pharmacy')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to a thank you page or display a success message
        header("Location: last.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    // Redirect to the order form page if accessed directly without form submission
    header("Location: pre.php");
    exit();
}
?>
