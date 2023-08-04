<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<body>
 <?php
 //$id = $_GET['id'];
 
   $username = $_POST['username'];
   $email = $_POST['email'];
   $address = $_POST['address'];
  $phone_number = $_POST['phone_number'];
 $id = $_GET['id'];
 //  "UPDATE users(username, email, address,phone_number) VALUES('$username','$email','$address','$phone_number') where id='$id'";
$sql = "UPDATE users SET username = '$username', email = '$email',address= '$address',phone_number='$phone_number' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Row updated successfully.";
} else {
    echo "Error updating row: " . mysqli_error($conn);
}
header('Location: Tables%20.php');

mysqli_close($conn);

    
?> 
</body></html>
