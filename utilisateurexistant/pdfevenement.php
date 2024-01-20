
<script type="text/javascript">
window.print();
</script><?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['id']==0)) {
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
 
<br><br>
        <nav class="col">
          <nav class="card shadow-sm">
           <img src="../1/sary/<?php echo ($ET['photo'])?>" alt="">
            <nav class="card-body">
            <h4>DATE DE PUBLICATION   : <?php echo ($ET['date'])?></h4>
            <div class="text-center"style="color:red">
            <center>
             <h2><?php echo ($ET['titre'])?></h2>
            </div>
            <div class="text-center"style="color:green">
             <h2><?php echo ($ET['soustitre'])?></h2>
             </center></div>
             <div class="text-center"style="color:blue"><h3><?php echo ($ET['commentaire'])?></h3></div>
            </nav>
            
          </nav>
        </nav><br>
        <div class="text-center"><center>**************************************************************</center></div>

<br>        <?php }?>
 <!-- =======================================================================================================================-->
 
 <?php } ?>
 
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>