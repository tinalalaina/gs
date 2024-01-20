
<script type="text/javascript">
window.print();
</script><?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:authentifi/admin/logout.php');
  } else{
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>
    

<?php
require_once("connexion.php");
$result = mysqli_query($connexion,"select * from evenements");

?>
 <!-- =======================================================================================================================-->
 
 <?php while ($ET=mysqli_fetch_assoc($result)){?>
  <center><img src="logo/2.jpg">
<br><br>
MINISTERE DE L'ENSEIGNEMENT TECHNIQUE ET DE LA FORMATION <br>
PROFESSIONNELLE</center>
<br><br>
        <nav class="col">
          <nav class="card shadow-sm">
           <img src="sary/<?php echo ($ET['photo'])?>" alt="">
            <nav class="card-body">
            <div class="text-center"style="color:red">
             <h2><?php echo ($ET['titre'])?></h2></div>
            <div class="text-center"style="color:green">
             <h2><?php echo ($ET['soustitre'])?></h2></div>
             <div class="text-center"style="color:blue"><h3><?php echo ($ET['commentaire'])?></h3></div>
            </nav>
          </nav>
        </nav><br>
        <div class="text-center">**************************************************************</div>

<br>        <?php }?>
 <!-- =======================================================================================================================-->
 
 <?php } ?>
 
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>