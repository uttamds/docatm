<?php
  session_start();
  if(isset($_SESSION['regnno']))
  echo $_SESSION['regnno'];
  else
  echo 'o oh';
?>
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

  if(isset($_POST['signup'])){
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctoratm";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
  
  
    $regnno = $_POST['RegnNo'];
    $pwd = $_POST['Password'];

    echo $regnno.$pwd;

//     $sql = "INSERT INTO REGN VALUES('$fullname', '$mobilenumber', '$address', '$emailid', '$dateofbirth', '$gender', $age, $regnno)";
    
    
//     if($conn->query($sql) === TRUE)
//     {
      
//         echo '<h3>'.'Your record has been saved successfully'.'</h3><br>';
//         echo '<h3>'.'Please note your registration number is : '.$regnno.'</h3>';
//     }
//     else{
//       echo 'Failed';
//     }
//     $conn->close();
}

  
  ?>
  <form  method="POST">
    <div class="container" style="margin-top: 50px;">
    <div><h1>Medicine...</h1></div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4">Select Sub Category</label>
        <input type="text" class="form-control" name="SubCat" required>
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4">Select Symptoms</label>
        <input type="text" class="form-control" name="Symptom" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <p name="Medicine"><h3>Your prescription : </h3></p>
      </div>

    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary" name = "signup"> Sign up</button>
        <button type="submit" class="btn btn-warning">Cancel</button>
       
       </div>
    </div>
    
  </form>
</div>
</body>
</html>