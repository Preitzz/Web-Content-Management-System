<?php
include_once("connect.php");
?>
<?php
session_start();
if(session_destroy()){
    header("location: mainlog.php");
}
?>