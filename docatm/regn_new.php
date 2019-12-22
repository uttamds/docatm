<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Doctor's ATM</title>
</head>

<body class="p-3 mb-2 bg-info text-white"> 
    <h1>Patient Registration</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

        <form action="" method="GET">
        <div class="container">
   <div class="row">
       <div class="col-md-6">
        <table>
            <tr>
              <td>Registration No:</td>
              <td>98749234</td>
            </tr>
            <tr>
              <td>Name:</td>
              <td><input type="text" required name = "pname"></td>
            </tr>
            <tr>
              <td>Address:</td>
              <td><input type="text" required></td>
            </tr>
            <tr>
              <td>Mobile phone:</td>
              <td><input type="text" required></td>
            </tr>
          
            <tr>
              <td>Email:</td>
              <td><input type="text"></td>
            </tr>
          
            <tr>
              <td>Date of Birth:</td>
              <td><input type="text" required></td>
            </tr>
          
            <tr>
              <td>Gender:</td>
              <td><select name="" id=""> 
                  <option value="">Male</option>
                  <option value="">Female</option>
                  <option value="">Transgender</option>
              </select></td>
            </tr>
                      
            <tr>
              <td> <button hidden>Save</button></td>
              <td> <button class="btn btn-warning">Save</button> <BUTTON>Cancel</BUTTON></td>
            </tr>
          
            
          </table>
          
        </div>
       </div>
   </div>
  </form>

  <?php

 $p=  $_GET[pname]
  
  $sql = "INSERT INTO registrations('regnno', $p, 'phone', 'rdate', 'emailid', 'dob', 'gender', 'occupation') VALUES  ('565' , 'anshuk', '7760870005', '12/12/2019', 'uttamds@gmail.com', '19/11/1999', 'Male', 'Trainer')";
  
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  ?>






  </body> 

</html>