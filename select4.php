<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctoratm";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select medicine from f6t10 where symtom ='".$_SESSION['symtom']."'";
$result =  $conn->query($sql);
?>
<form action="#" method="post">

<?php
while($row = $result->fetch_assoc()){
    echo '<h2>'.$row['medicine'].'</h2>';
    $e = $row['medicine'];;
}
$recdate = date("Y-m-d");
$a = $_SESSION['regnno'];
$b = $_SESSION['maincat'];
$c = $_SESSION['subcat'];
$d = $_SESSION['symtom'];
$sql1 = "INSERT INTO RECORDS VALUES($a,'$recdate','$b','$c','$d','$e')";
$conn->query($sql1);
?>
<input type="submit" name="prescription" value="Print priscription" />
<input type="submit" name="reset_sel" value="Reset selection and select again" />
<input type="submit" name="back" value="Logout" />
</form>
<?php
if(isset($_POST['back'])){
    $selected_val = $_POST['MainCat'];     
    header("Location:login.php");  
}
if(isset($_POST['reset_sel'])){
    $selected_val = $_POST['MainCat'];     
    header("Location:select.php");  
}
if(isset($_POST['prescription'])){
    $selected_val = $_POST['MainCat'];     
    $_SESSION['d'] = $recdate;
    $_SESSION['r'] = $a;
    header("Location:pres.php");  
}

?>