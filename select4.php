
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <title>Doctor's A T M</title>
    <style>

body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("images/background3.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>



 </head>
<body class="bg">


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
<div class="row"  style="margin-bottom:10px; margin-top: 150px;" >
<div class="col-md-6">
</div>
    <div class="col-md-6">

<form action="#" method="post">

<?php
while($row = $result->fetch_assoc()){
    echo '<h2>Your medicine:     '.$row['medicine'].'</h2>';
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
<input type="submit"  class="btn btn-primary" name="prescription" value="Print priscription" />
<input type="submit"  class="btn btn-primary" name="reset_sel" value="Reset selection and select again" />
<input type="submit"  class="btn btn-danger" name="back" value="Logout" />
<input type="submit"  class="btn btn-warning" name="cancel" value="Cancel" />
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
if(isset($_POST['cancel'])){
     
    header("Location:login.php");
}

?>


</div>

</div>
</body>
</html>