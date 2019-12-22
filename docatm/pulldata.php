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
echo "<form action = 'Kala.html'>";
if ($result->num_rows > 0) {    
    echo "<table border = '1' cellpadding = '10'>";
    echo "<th width='200px' style = 'background-color : cyan'>Patiet Name</th>";
    echo "<th width='200px'style = 'background-color : cyan'>Address</th>";
    echo "<th width='200px'style = 'background-color : cyan'>Email ID</th>";
    while($row = $result->fetch_assoc()) {
      echo "<table border = '1' cellpadding = '10'>";
        echo "<tr>";
        echo "<td width='200px' align = 'center'>".$row['name']."</td>";
        echo "<td width='200px' align = 'center'>".$row['phone']. "</td>";
        echo "<td width='200px' align = 'center'>".$row['emailid']. "</td>";
        echo "</tr>";
        echo "</table>";      
    }
} else {
    echo "0 results";
}

$conn->close();

?>
