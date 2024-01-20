<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:authentifi/admin/logout.php');
  } else{
    
?>
<?php
require_once("connexion.php");
$result = mysqli_query($connexion,"select * from evenements");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Fixed top navbar example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">
<link rel="stylesheet" href="styles.css">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head> <style type = "text/css">
         h1 {
            -moz-animation-duration: 2s;
            -webkit-animation-duration: 2s;
            -moz-animation-name: slidein;
            -webkit-animation-name: slidein;
         }
         @-moz-keyframes slidein {
            from {
               margin-left:100%;
               width:300%
            }
            75% {
               font-size:300%;
               margin-left:25%;
               width:150%;
            }
            to {
               margin-left:0%;
               width:100%;
            }
         }
         @-webkit-keyframes slidein {
            from {
               margin-left:100%;
               width:300%
            }
            75% {
               font-size:300%;
               margin-left:25%;
               width:150%;
            }
            to {
               margin-left:0%;
               width:100%;
            }
         }
         h2{
            -moz-animation-duration: 3s;
            -webkit-animation-duration: 3s;
            -moz-animation-name: slidein;
            -webkit-animation-name: slidein;
         }
         @-moz-keyframes slidein {
            from {
               margin-left:100%;
               width:300%
            }
            75% {
               font-size:300%;
               margin-left:25%;
               width:150%;
            }
            to {
               margin-left:0%;
               width:100%;
            }
         }
         @-webkit-keyframes slidein {
            from {
               margin-left:100%;
               width:300%
            }
            75% {
               font-size:300%;
               margin-left:25%;
               width:150%;
            }
            to {
               margin-left:0%;
               width:100%;
            }
         }
         h4 {
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
         }
         h1{
          text-shadow: 2px 2px 5px red;
         }
         h2{
          text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
         }
      </style>
  <body>
    
 <!-- off canvas -->
 <nav class="navbar navbar-light bg-success fixed-top">
  <nav class="container-fluid">

    <!-- nav && tab form cherche-->
    <form class="d-flex"action="chercher1.php">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
    <!--fin cherche-->
    <h4>Tous les listes des évènement </h4>
    
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
            <a class="nav-link active" aria-current="index.php" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Anniversaire</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Evenements
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Récente</a></li>
              <li><a class="dropdown-item" href="#">Pasée</a></li>
              <li>
                <hr class="dropdown-navider">
              </li>
              <li>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="premier.php"> + Creér un évènement</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Déconnexion</a>
          </li>


        </ul>
   
         

      </nav>
    </nav>
  </nav>
</nav>
  <!--fin off canvas   -->
</nav>
<!-- =======================================================================================================================-->

<main class="bg-suceess" >

  <nav class="album py-5 ">
    <nav class="container">
      <nav class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  <!-- =======================================================================================================================-->
  <?php while ($ET=mysqli_fetch_assoc($result)){?>
    
        <nav class="col" >
          <nav class="card shadow-sm">
            <img style="height: 350px;width=250px" src="sary/<?php echo ($ET['photo'])?>">

            <nav class="card-body">
            <h1> <p class="card-text"><?php echo ($ET['titre'])?></p></h1>
             <h2> <p class="card-text"><?php echo ($ET['soustitre'])?></p></h2>
              <nav class="d-flex justify-content-between align-items-center">
                <nav class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="../view/index.php?code=<?php echo ($ET['code'])?>">voir plus</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="editer.php?code=<?php echo ($ET['code'])?>">modifier</a></button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="supprimer.php?code=<?php echo ($ET['code'])?>">supprimer</a></button>
                </nav>
                <small class="text-muted">9 mins</small>
              </nav>
            </nav>
          </nav>
        </nav>
        

  <?php }?>
  <!-- =======================================================================================================================-->
      
      </nav>
    </nav>
  </nav>

</main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
 <?php } ?>
  </body>
</html>
