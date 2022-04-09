<!DOCTYPE html>
<html>
<head>
  <title>Blood Donation Club|Request List</title>
 
</head>
<body>

<h2>Blood Request List</h2>
<ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Blood Request List</li>
        </ol>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Full Name</td>
    <td>Email</td>
    <td>Mobile</td>
    <td>Date of Donation</td>
     <td>Blood Group</td>
      <td>Address</td>
  </tr>

<?php

include "db.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from users"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['mobile']; ?></td>
    <td><?php echo $data['date']; ?></td>
    <td><?php echo $data['bloodgroup']; ?></td>
    <td><?php echo $data['address']; ?></td>
  </tr>	
 <?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>