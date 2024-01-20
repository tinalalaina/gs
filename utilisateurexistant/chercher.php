<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:../authentifi/admin/logout.php');
  } else{
    
?>
<?php
require_once("connexion.php");
$result = mysqli_query($connexion,"select * from evenements");

?>
<?php
require_once("connexion.php");
$mc="NULL";
if(isset($_POST['motcle'])){
    $mc=$_POST['motcle'];
}
$result =mysqli_query($connexion,"select * from evenements where titre like '%$mc%'");


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
    <form class="d-flex"  method="POST">
      <input name="motcle" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-dark" type="submit">Search</button>
     
    </form>
    <a  class="btn btn-dark" href="4.php">Accueil</a>
    <a class="btn btn-dark" href="4.php"  class="fst-italic">Retour</a>
    <!--fin cherche-->
    <h1  class="fst-italic">Tous les liste des évènements filtrées </h1>
    
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
            <a class="nav-link active" aria-current="4.php" href="#">Accueil</a>
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
    <nav class="container" style="margin-top:95px">
      <nav class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<!-- =======================================================================================================================-->
<?php while ($ET=mysqli_fetch_assoc($result)){?>
        <nav class="col">
          <nav class="card shadow-sm">
           <img src="../1/sary/<?php echo ($ET['photo'])?>" alt="">
            <nav class="card-body">
              <p class="card-text bg-secondary text-dark text-center" >
              <h4 style="color:gold">
              DATE DE PUBLICATION : <center><p style="color:red">
              
              <?php echo ($ET['date'])?></p> </center>
</h4>
                <h4 style="color:green">
                <?php echo ($ET['titre'])?>
</h4>
                <p style="color:white"><br>
                <?php echo ($ET['soustitre'])?></p>
              <nav class="d-flex justify-content-between align-items-center">
              <nav class="btn-group"> 

                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="voirplus.php?code=<?php echo ($ET['code'])?>">voir plus</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="pdf.php?code=<?php echo ($ET['code'])?>">Reporter en PDF</a></button>
                </nav>
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

<?php } ?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
