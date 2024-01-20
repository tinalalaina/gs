<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:authentifi/admin/logout.php');
  } else{
    
?>



<?php
require_once("../authentifi/includes/config.php");
$result = mysqli_query($con,"select * from users");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>chercher un utilisateur</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="bg-info">
    
 <!-- off canvas -->
 <nav class="navbar navbar-light bg-success fixed-top">
  <nav class="container-fluid">

    <!-- nav && tab form cherche-->
   
    <a class="btn btn-dark" href="../1/14.php"  class="fst-italic">Retour</a>
    
    <!--fin cherche-->
    <h1  class="fst-italic">Liste utilisateur filtrée </h1>
    
<!-- nav x-->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <nav class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </nav>
      <nav class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="4.php" href="../1/14.php">Accueil</a>
          </li>
         
       
          <li class="nav-item">
            <a class="nav-link" href="../1/premier.php"> + Creér un évènement</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../authentifi/admin/logout.php">Déconnexion</a>
          </li>


        </ul>
   
         

      </nav>
    </nav>
  </nav>
</nav>
  <!--fin off canvas   -->








   <div class="container" >
<br>
<a href="../1/14.php"> retour</a>
<br>
<table class="table table-dark table-striped" style="margin-top:95px">
<tr><td>Email</td><td>Mot de passe</td><td></td><td></td></tr>

<!---->
<?php while ($ET=mysqli_fetch_assoc($result)){?>
    
        
             <tr><td class="text-center"><?php echo ($ET['email'])?></td><td class="text-center"><?php echo ($ET['password'])?></td>
             <td><a href="supprimer.php?id=<?php echo ($ET['id'])?>">supprimer</a></td></tr>
                </nav>
              </nav>
            </nav>
          </nav>
        </nav>
<?php }?>

<!---->
 
</table>
</div>
<?php } ?>

 
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
</body>
</html>