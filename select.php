<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctoratm";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select Distinct maincat from f6t10";
$result =  $conn->query($sql);
?>
<form action="#" method="post">
<select name="MainCat">
<?php
while($row = $result->fetch_assoc()){
    echo '<option value='.$row['maincat'].'>'.$row['maincat'].'</option>';
}
?>

</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
if(isset($_POST['submit'])){
    $selected_val = $_POST['MainCat'];
    $_SESSION['maincat'] = $selected_val;    
    header("Location:select2.php");
}
?>
