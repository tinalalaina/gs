<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:../authentifi/admin/logout.php');
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
    <link rel="stylesheet" href="../webfont/css/all.css">
    <link rel="stylesheet" href="style.css">
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
<body style="color:white">
 <div class="container-fluid">
     <!--navbar top fixed-->
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
  <nav class="container-fluid">
    <a class="navbar-brand" href="#">Gestion d'evenements</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Gestion" aria-controls="Gestion" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="collapse navbar-collapse" id="Gestion">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" class="joinBtn4"href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="joinBtn4"href="premier.php">Ajouter un evenements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="joinBtn4"href="14.php">Lister tous les evenements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"class="joinBtn4" href="chercher1.php">Chercher un evenements <i class="fas fa-search"></i> </a>
        </li>
      </ul>
      <span class="navbar-text">
      <a href="../authentifi/admin/logout.php"class="joinBtn4">Déconnexion</a>
      </span>
    </nav>
  </nav>
</nav>
 <!-- fin navbar -->
     <div class="row">
         <div class="col-md-2 bg-success  text-center top-fixed" style="margin-top:55px;">
         <div class="container text-center">
         <ul class="list-group list-group-flush"  style="margin-top:55px;">
         <button  class="joinBtn"> <li class="list-group-item">
  <a class="nav-link" href="premier.php"><i class="fas fa-folder-plus"></i></i>Creér un évènement</a>
  </li></button>
  <button  class="joinBtn"> <li class="list-group-item"><a class="nav-link" href="chercher1.php"><i class="fas fa-search"></i>chercher un évènement</a>
  </li></button>
  <button  class="joinBtn"> <li class="list-group-item"><a class="nav-link" href="14.php"><i class="far fa-file-alt"></i> Lister tous l'évènement</a></li></button>
</ul>
     

<ul class="list-group list-group-flush"  style="margin-top:58px;"  >
 <button  class="joinBtn"><li class="list-group-item" ><a href="../authentifi/admin/signup.php"> <i class="fas fa-user-plus"></i>  Ajouter un nouveau utilisateur</a></li></button>
 <button  class="joinBtn"><li class="list-group-item"><a href="../utilisateur/lister.php"><i class="far fa-file-alt"></i>   lister tous les utilisateur</a></li></button>
 <button  class="joinBtn"><li class="list-group-item"> <a href="../utilisateur/chercher.php"><i class="fas fa-search"></i>   chercher un  utilisateur</a> </li></button>
</ul>

<ul class="list-group list-group-flush"  style="margin-top:41px;">
<button  class="joinBtn"><li class="list-group-item"><a href="pdfevenement.php"><i class="fas fa-file-pdf"></i>   Tous les évènements en PDF</a></li>
<button  class="joinBtn"><li class="list-group-item"><a href="../utilisateur/pdfutilisateur.php"> <i class="fas fa-file-pdf"></i>   Tous les utilisateur en PDF</a></li>
  
</ul>


</div>
        </div>
         <div class="col-md-10 text-center  text-center">
           
         <div class = "scroll"> 


        
         <h1><p style="margin-top:70px;text-shadow: 2px 2px 5px red;" class="fst-italic"><i class="fab fa-studiovinari"></i>Tous les evenements </p></h1><br>
       
         

         <ul class="pager">
         <nav class="row row-cols-4 row-cols-sm-4 row-cols-md-4 g-" style="margin-top:8px">
 <!-- =======================================================================================================================-->
 <?php while ($ET=mysqli_fetch_assoc($result)){?>
  
        <nav class="col">
          <nav class="card shadow-sm">
          <p style="color:black "> DATE DE PUBLICATION : <?php echo ($ET['date'])?></p>
              <p style="color:black  " >OBJET : <?php echo ($ET['titre'])?><br><p class="card-text" style="color:black" >DESCRIPTION :<?php echo ($ET['soustitre'])?></p>
             
           <img src="sary/<?php echo ($ET['photo'])?>" alt="">
          
            <nav class="card-body">
            <nav class="d-flex justify-content-between align-items-center">
              <nav class="btn-group"> 

                  <button type="button"  class="joinBtn4"class="btn btn-sm btn-outline-secondary"><a href="voirplus.php?code=<?php echo ($ET['code'])?>"><i class="fas fa-plus"></i></button>
                  <button type="button" class="joinBtn3" class="btn btn-sm btn-outline-secondary"><a href="pdf.php?code=<?php echo ($ET['code'])?>">
                  <i class="fas fa-file-pdf"></i><br></a></button>
                  <button type="button"  class="joinBtn2"class="btn btn-sm btn-outline-secondary"><a href="editer.php?code=<?php echo ($ET['code'])?>"><i class="fas fa-sync"></i><br> </a></button>
                  <button type="button"  class="joinBtn1"class="btn btn-sm btn-outline-secondary"><a href="supprimer.php?code=<?php echo ($ET['code'])?>"><i class="fas fa-trash-alt"></i><br> </a></button>
                </nav>
              </nav>
            </nav>
          </nav>
        </nav>
        </button>
<?php }?>
 <!-- =======================================================================================================================-->
 




        </nav>
         </div>
 </div>
 <?php } ?>
 
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>