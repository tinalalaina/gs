<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:authentifi/admin/logout.php');
  } else{
    
?>

<?php
require_once('connexion.php');
$id=$_GET['code'];
$result = mysqli_query($connexion, " DELETE FROM evenements WHERE  (code=$id) ");
header("location:14.php");
?>


<?php } ?>