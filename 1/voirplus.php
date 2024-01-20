<?php
require_once('connexion.php');
$id=$_GET['code'];
$result = mysqli_query($connexion, "SELECT * FROM evenements WHERE (code=$id)");
$ET=mysqli_fetch_assoc($result);

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
<body>
<form action="modifier.php" method="POST" enctype="multipart/form-data">
 









    <div class="container-fluid">
     <!--navbar top fixed-->
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
  <nav class="container-fluid">
    <a class="navbar-brand" href="#">Gestion/Evenement</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Gestion" aria-controls="Gestion" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="collapse navbar-collapse" id="Gestion">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" class="joinBtn4"href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="joinBtn4"href="premier.php">Ajouter un évènement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="joinBtn4"href="14.php">Lister tous l'évènement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"class="joinBtn4" href="chercher1.php">Chercher un évènement <i class="fas fa-search"></i> </a>
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







        <div class="col-md-6">
          
           <div class = "scroll"> 
  
           <div class="row">
            
    <a class="btn btn-dark" href="14.php"  class="fst-italic" style="margin-top:70px">Retour</a>
  
  
    <H3 style=" margin-top:70px" >DATE DE PUBLICATION : <?php echo ($ET['date'])?></H3>
  
    <div class="row">

  
      <div class="col-md-8"><br>
      
        <h4 style=" ">OBJET : <?php echo ($ET['titre'])?></h4>
        <BR></BR>
      </div>
    </div><br><br>
  <div class="col-md-3 offset-md-2 "><h3 style=""><?php echo ($ET['soustitre'])?></h3></div><BR></BR><BR></BR>
   
   
   <div class="row">
     <div class="col-md-3"><P>
     
     <?php echo ($ET['commentaire'])?></P>
     </div>
   
    </div>
 
  </div>
  
    
</div>



</div>

   
<div class="col-md-4 text-center">
<div class="container">
<h1><p style="margin-top:70px;text-shadow: 2px 2px 5px red;" class="fst-italic"><i class="fab fa-studiovinari"></i>Photo </p></h1><br>
        

<img width="455px" height="455px" src="sary/<?php echo($ET['photo'])?>">
</div>
   </div>
   
</form>
</script>
              <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>