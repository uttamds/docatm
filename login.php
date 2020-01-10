<?php
  session_start();
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
    <style>
body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("images/Background1.jpg");

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
  if(isset($_POST['login'])){
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctoratm";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $regnno = $_POST['RegnNo'];
    $pwd = $_POST['Password'];
    
    $sql = 'SELECT regno, password FROM regn where regno ='.$regnno;
   
    $result =  $conn->query($sql);
  $row = $result->fetch_assoc() ;
  
       if($row['regno'] != (int)$regnno || $row['password'] != $pwd){
       echo '<h2>Regn Number or password entered in incorrect!</h2>';
   }
   else
   {
    echo '<h2>Login Successfull....</h2>';
    if ((int) $row['regnno'] <= 10)
    {
    // header("refresh:3;url=select.php" );
    header("Location:select.php");
    $_SESSION['regnno']  = (int) $row['regnno'];
    echo 'here';
    }
    else if ((int) $row['regnno'] > 10 && (int) $row['regnno'] < 31)
    {
    // header("refresh:1;url=select.php" );
    header("Location:select1.php");
    $_SESSION['regno']  = (int) $row['regno'];
    echo 'more than 10';
    }
    else
    {
    header("refresh:3;url=select.php" );
    $_SESSION['regno']  = (int) $row['regno'];
    }
  }
  
    
}
  
  ?>
  <form  method="POST">
    <div class="container" style="margin-top: 50px;">
    <div><h1 style="color:white" >Sign in</h1></div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4" style="color:white">Enter your registration number</label>
        <input type="number" class="form-control" name="RegnNo" required>
      </div>
      <div class="form-group col-md-4" style="color:white" >
        <label for="inputPassword4">Enter your password</label>
        <input type="password" class="form-control" name="Password" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary" name = "login"> Login</button>
        <button type="submit" class="btn btn-warning" onClick="document.location.href='welcome.html';" >Cancel</button>
        <button  type = "reset" class="btn btn-danger" name = "reset">Reset</button>
        <br>
        <br>
        <br>
        <div style="background-color:white">
        <a href="forgot.php"><b> Forgot password...</a> <br>
        <a href="Registration.php"> New User Sign up...</a>
        </div>
       </div>
    </div>
    
  </form>
</div>
</body>
</html>