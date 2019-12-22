<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM regauto";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo $row[regno];
$regno_temp = $row[regno];


$sql = "INSERT INTO registration VALUES ('$row[regno]', '$_GET[pname]' , '$_GET[addr]', '$_GET[mobile]', '$_GET[pname]', '$_GET[email]', '$_GET[dob]', 'Male')";
if ($conn->query($sql) === TRUE) {
  echo("suceess")    ;
  $sql  = "update regauto set regno = regno  + 1";
  $conn->query($sql);
} else {
    echo("failed");    
}
$conn->close();

header("Location: welcome.html");

?>