<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctoratm";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select symtom from f6t10 where subcat ='".$_SESSION['subcat']."'";
$result =  $conn->query($sql);

?>
<form action="#" method="post">
<select name="MainCat">
<?php
while($row = $result->fetch_assoc()){
    echo '<option value='.$row['symtom'].'>'.$row['symtom'].'</option>';
}


?>

</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
if(isset($_POST['submit'])){
    $selected_val = $_POST['MainCat']; 
    $_SESSION['symtom'] = $selected_val;
    
    header("Location:select4.php");  
}
?>
