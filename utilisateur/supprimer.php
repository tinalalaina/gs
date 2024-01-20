<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:authentifi/admin/logout.php');
  } else{
    
?>

<?php
require_once('../authentifi/includes/config.php');
$id=$_GET['id'];
$result = mysqli_query($con, " DELETE FROM users WHERE  (id=$id) ");
header("location:lister.php");
?>


<?php } ?>