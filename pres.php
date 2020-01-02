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
        }
?>
<div >
            <h1> PRESCRIPTION</h1>
       <h4> Pateint Name :<?php echo $fullname ?> </h4> <br>
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







