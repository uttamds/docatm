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
  background-image: url("images/background.jpg");

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
$sql = "select subcat from f6t10 where maincat ='".$_SESSION['maincat']."'";
$result =  $conn->query($sql);
?>
<form action="#" method="post">
<div class="container" style="margin-top: 50px;">

<br>
<br>
<h1 style="color:white">Select the main sub-category of the problem:</h1>
<select name="MainCat" class="form-control">
<?php
while($row = $result->fetch_assoc()){
    echo '<option value='.$row['subcat'].'>'.$row['subcat'].'</option>';
}
$_SESSION['subcat'] = $row['subcat'];
?>

</select>
<br>
<input type="submit" name="submit" class="btn btn-warning" value="Click to continue..." />
<br>

<br>
<input type="submit" class="btn btn-danger" name="cancel" value="Cancel" />
</div>
</form>
<?php
if(isset($_POST['submit'])){
    $selected_val = $_POST['MainCat'];   
    $_SESSION['subcat'] = $selected_val;
    header("Location:select3.php");
}
if(isset($_POST['cancel'])){
     
    header("Location:login.php");
}
?>
    
    
</body>
</html>