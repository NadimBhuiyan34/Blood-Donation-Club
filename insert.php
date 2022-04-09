<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
      $date = $_POST['date'];
      $bloodgroup = $_POST['bloodgroup'];
       $address = $_POST['address'];
     $sql = "INSERT INTO users (name,email,mobile,date,bloodgroup,address)
     VALUES ('$name','$email','$mobile','$date','$bloodgroup','$address')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>