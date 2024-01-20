<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:authentifi/admin/logout.php');
  } else{
    
?>

<?php
require_once("connexion.php");
$result = mysqli_query($connexion,"select * from evenements");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../1/style.css">
    <link rel="stylesheet" href="../webfont/css/all.css">
    <style type = "text/css">
         .scroll {
            display:block;
            border: 1px solid gold;
            padding:5px;
            margin-top:5px;
            height:780px;
            overflow:scroll;
         }
      </style>
</head>
<body style="color:white" >
 <div class="container-fluid">
 
     <!--navbar top fixed-->
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
  <nav class="container-fluid">
    <a class="navbar-brand" href="#">Gestion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="premier.php">Ajouter un évènement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="4.php">Lister tous l'évènement</a>
        </li>
      </ul>
      <span class="navbar-text">
      <a href="../authentifi/admin/logout.php">Déconnexion</a>
      </span>
    </nav>
  </nav>
</nav>
 <!-- fin navbar -->
 <div>
     <div class="row">
         <div class="col-md-2 bg-success  text-center top-fixed" style="margin-top:55px;">
         <div class="container text-center">
         <ul class="list-group list-group-flush"  style="margin-top:55px;">
         <button  class="joinBtn"><li class="list-group-item">
  <a class="nav-link" href="premier.php"> <i class="fas fa-folder-plus"></i>Creér un évènement</a>
  </li>
  <button  class="joinBtn"> <li class="list-group-item">
  <a class="nav-link" href="chercher.php"><i class="fas fa-search"></i> chercher un évènement</a>
  </li>
  <button  class="joinBtn"><li class="list-group-item"><a class="nav-link" href="4.php"><i class="far fa-file-alt"></i>Lister tous l'évènement</a></li>
</ul>
     

<ul class="list-group list-group-flush"  style="margin-top:100px;">
<button  class="joinBtn"> <a class="list-group-item" href="pdfevenement.php"><i class="fas fa-file-pdf"></i> Lister tous en PDF</a>
</ul>



</div>
        </div>
         <div class="col-md-10 text-center  text-center">
           
         <div class = "scroll"> 


        
         <h1><p style="margin-top:70px;text-shadow: 2px 2px 5px red;" class="fst-italic">Tous les évènements</p></h1><br>
      

         <ul class="pager">
         <nav class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top:8px">
 <!-- =======================================================================================================================-->
 <?php while ($ET=mysqli_fetch_assoc($result)){?>
        <nav class="col">
          <nav class="card shadow-sm">
           <img src="../1/sary/<?php echo ($ET['photo'])?>" alt="">
            <nav class="card-body">
            <p class="card-text " style="color:green">DATE DE PUBLICATION : <?php echo ($ET['date'])?></p>
              <h4 class="card-text " style="color:black">OBJET : <?php echo ($ET['titre'])?></h4>
              <p class="card-text "style="color:black">Description ...</p> 
              
              <nav class="d-flex justify-content-between align-items-center">
              <nav class="btn-group"> 

                  <button type="button" class="joinBtn4"class="btn btn-sm btn-outline-secondary"><a href="voirplus.php?code=<?php echo ($ET['code'])?>">LIRE LA SUITE <i class="fas fa-plus"></i></button>
                  <button type="button" class="joinBtn3"class="btn btn-sm btn-outline-secondary"><a href="pdf.php?code=<?php echo ($ET['code'])?>">Reporter en PDF  <i class="fas fa-file-pdf"></i> </a></button>
                   </nav>
              </nav>
            </nav>
          </nav>
        </nav>
<?php }?>
 <!-- =======================================================================================================================-->
 




        </nav>
         </div>



 </div>

 </div>
 <?php } ?>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>