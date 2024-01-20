<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:authentifi/admin/logout.php');
  } else{
    
?>
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
</head>
<body >
<form action="modifier.php" method="POST" enctype="multipart/form-data">
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
         <ul class="list-group list-group-flush"  style="margin-top:75px;">
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
        <div class="col-md-6">
          
          <div class = "scroll"> 
 
          <div class="row"><a class="btn btn-dark" href="4.php"  class="fst-italic" style="margin-top:75px">Retour</a>
  
  
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
<h1><p style="margin-top:150px;text-shadow: 2px 2px 5px red;" class="fst-italic"><i class="fab fa-studiovinari"></i>Photo </p></h1><br>
      

<img width="455px" style="margin-top:58px;"height="455px" src="../1/sary/<?php echo($ET['photo'])?>">
</div>
 </div>
 
</form>
<?php } ?>
</script>
              <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>