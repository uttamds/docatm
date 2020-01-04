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

 </head>
<body class="p-3 mb-2 bg-light text-dark">

<?php
session_start();
?>
<form method="post">
<div style="margin-bottom:10px; margin-top: 40px;">
<button name = "1"> <img src="images/allergy.jpg" width="400" height="180"  alt=""></button>
<button name = "2"> <img src="images/stomach.jpg" width="400" height="180"  alt=""></button>
<button name = "3"> <img src="images/monsoon.jpg" width="400" height="180"  alt=""></button>
<button name = "4"> <img src="images/Chest.jpg" width="400" height="180"  alt=""></button>
<button name = "5"> <img src="images/pains.jpg" width="400" height="180"  alt=""></button>
<button name = "6"> <img src="images/injuries.jpg" width="400" height="180"  alt=""></button>
</div>
<div>

<input type="submit" class="btn btn-warning" name="cancel" value="Cancel" />
<input type="submit" class="btn btn-danger" name="emergency" value="Emergency!! call 108" />
</div>
</form>
<?php
if(isset($_POST['1'])){
    $_SESSION['maincat'] = 'ALLERGIES';    
    header("Location:select2.php");
}
if(isset($_POST['2'])){
    
    $_SESSION['maincat'] = 'BONES';    
    header("Location:select2.php");
}
if(isset($_POST['2'])){
    
    $_SESSION['maincat'] = 'BONES';    
    header("Location:select2.php");
}
if(isset($_POST['2'])){
    
    $_SESSION['maincat'] = 'BONES';    
    header("Location:select2.php");
}
if(isset($_POST['2'])){
    
    $_SESSION['maincat'] = 'BONES';    
    header("Location:select2.php");
}
if(isset($_POST['2'])){
    
    $_SESSION['maincat'] = 'BONES';    
    header("Location:select2.php");
}


if(isset($_POST['cancel'])){
     
    header("Location:login.php");
}
?>
</body>
</html>