<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    
?>

  <br>
<br>
  <?php
if (strlen($_SESSION['adminid']==0)) {?>
<a href="">exemple</a>
<?php } ?>
  <br>
<a href="signup.php">ajouter</a>
          interface administrateur
                                    <br><br>
                                    <li><a href="logout.php">Logout</a></li>
             <?php include_once('../includes/footer.php'); ?>
<?php } ?>
