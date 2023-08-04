<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<body>
<?php
//$sql = "SELECT id,username, phone_number,email,address FROM users where id='$id'";
      $id = $_GET['id'];
      
//$id = mysqli_real_escape_string($con, $id);
//$sql = mysqli_query($con, "DELETE FROM users WHERE id='$id'");
$sql = "DELETE FROM users WHERE id = $id";

// Execute the SQL query
if (mysqli_query($conn, $sql)) {
    echo "Row deleted successfully.";
} else {
    echo "Error deleting row: " . mysqli_error($conn);
}


header("Location: Tables%20.php");
mysqli_close($conn);
?>

</body></html>