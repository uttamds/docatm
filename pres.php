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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "doctoratm";
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "select * from  records where regnno =".$_SESSION['r']." and recorddate='".$_SESSION['d']."'";
        
        $result =  $conn->query($sql);

        $row = $result->fetch_assoc();
        $mc = $row['maincat'];
        $sc = $row['subcat'];
        $sym = $row['symtom'];
        $med = $row['medicine'];
        $rn = $row['regnno'];
        echo '<br>';
        $sql = 'select * from  regn where regnno ='.$_SESSION['r'];    
        $result =  $conn->query($sql);
        if($row = $result->fetch_assoc()){

                $fullname= $row['fullname'];
                $address  = $row['address'];
                $age = $row['age'];
        }
?>
<div >
            <h1> PRESCRIPTION</h1>


            
       <h4> Pateint Name :<?php echo $fullname ?> </h4> <br>
       <h4> Pateint Age :<?php echo $age ?> </h4> <br>

       <h4> Address : <?php echo $address ?> </h4> <br>
       <h4> Regn No : <?php echo $rn ?> </h4> <br>
       <h4> Main Category : <?php echo $mc ?> </h4> <br>
       <h4> Sub Category : <?php echo $sc ?> </h4> <br>
       <h4> Symptom : <?php echo $sym ?> </h4> <br>
       <h4> Medicine : <?php echo $med ?> </h4> <br>
       </div>
<form method ="post">
        <input type="submit" name="back" value="Logout" />
        </form>

<?php

if(isset($_POST['back'])){
  
    header("Location:login.php");  
}

?>


</body>
</html>




