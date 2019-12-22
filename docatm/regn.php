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

$sql = "SELECT * FROM registration";
$result = $conn->query($sql);
function writeMessage() {
    echo "You are really a nice person, Have a nice time!";
 }
echo "<form>";
if ($result->num_rows > 0) {
 
    
    echo "<table border = '1' cellpadding = '10'>";
    echo "<th width='200px' style = 'background-color : grey'>Customer name</th>";
    echo "<th width='200px'style = 'background-color : grey'>Customer Phone</th>";
    while($row = $result->fetch_assoc()) {
      echo "<table border = '1' cellpadding = '10'>";
        echo "<tr>";
        echo "<td width='200px'>".$row['regnno']."</td>";
        echo "<td width='200px'>".$row['name']. "</td>";
        echo "</tr>";
        echo "</table>";


       
    }
} else {
    echo "0 results";
}
$conn->close();
echo "<input type = 'button' value ='Back...'>";
echo "</form>";
?>
