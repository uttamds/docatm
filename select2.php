<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctoratm";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select subcat from f6t10 where maincat ='".$_SESSION['maincat']."'";
$result =  $conn->query($sql);
?>
<form action="#" method="post">
<select name="MainCat">
<?php
while($row = $result->fetch_assoc()){
    echo '<option value='.$row['subcat'].'>'.$row['subcat'].'</option>';
}
$_SESSION['subcat'] = $row['subcat'];
?>

</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
if(isset($_POST['submit'])){
    $selected_val = $_POST['MainCat'];   
    $_SESSION['subcat'] = $selected_val;
    header("Location:select3.php");
}
?>
