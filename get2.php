<?php  
$host = "localhost";
$dbname = "regi";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
if(isset($_GET['Register']))
{
    $Pname=$_GET['Pname'];
    $RNo=$_GET['RNo'];  
    $Oname=$_GET['Oname']; 
    $Address=$_GET['Address'];  
    $number=$_GET['number'];   
    $Email=$_GET['Email'];   

    echo"<div>"; 
    echo"<h2>WELCOME</h2>";
    echo "<h3 class='name'>".$Pname."</h3>";  
    echo "</div>";
}
?>