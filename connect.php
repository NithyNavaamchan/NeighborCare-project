<?php
$name = $_POST['name'];
$oname = $_POST['oname'];
$reg_no = $_POST['reg_no'];
$email = $_POST['email'];  
$address = $_POST['address'];   
$mobile = $_POST['mobile'];  

$conn = new mysqli('localhost', 'root', '', 'pha_reg');  
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (name, oname, reg_no, email, address, mobile) VALUES (?, ?, ?, ?, ?, ?)");

    // Binding parameters and specifying their types (s for string)
    $stmt->bind_param("ssssss", $name, $oname, $reg_no, $email, $address, $mobile);
    $stmt->execute();  
    $stmt->close();  
    $conn->close();

    // Redirect to success.php after successful registration
    header("Location: phareg.php");
    exit();
}
?>