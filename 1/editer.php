<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
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
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-secondary">
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
         <div class="col-md-10 text-center  text-center">
           
         <div class = "scroll"> 

         <ul class="pager">
         <nav  style="margin-top:70px">

        <h1 style=" text-shadow: 2px 2px 5px red;">Modidier l'évènements</h1>
    
<div class="table">
  

 <div class="row">
      <div class="col-md-2 offset-md-2 "><h1 style=" text-shadow: 2px 2px 5px green;">Code</h1>
  </div>
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-6 offset-md-2" ><input type="text" class="form-control " name="code" value="<?php echo ($ET['code'])?>">
</div>


    <div class="row">
      <div class="col-md-2 offset-md-2"><h2 style="text-shadow: 2px 2px 5px gold;">OBJET</h2>
  </div>
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-6 offset-md-2" ><input type="text" class="form-control" name="titre" value="<?php echo ($ET['titre'])?>">
</div>
    </div>
  </div>
    </div><br>

    <div class="row">
      <div ><h1 style="text-shadow: 2px 2px 5px gold;">Date de publication</h1>
  </div>
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-6 offset-md-2" ><input type="date" class="form-control" name="date" value="<?php echo ($ET['date'])?>">
</div>
    </div>
  </div>
    </div><br>

    <div class="row">
      <div class="col-md-3 offset-md-3"><h2 style=" text-shadow: 2px 2px 5px gold;">sous titre</h2></div>
    </div>
    <div class="row">
    <div class="container-fluid">
      <div class="col-md-5 offset-md-3" ><input type="text" class="form-control" name="soustitre"value="<?php echo ($ET['soustitre'])?>">
</div>
    <div class="row">
      <div class="col-md-9 offset-md-3"><h2 style=" text-shadow: 2px 2px 5px gold;">commentaire Commentaire <small><h6>(s 'il vous plait met à la ligne a chaque fois que le colone est remplie)</h6></small> </h2></div>
    </div>
    <div class="row">
    <div class="container-fluid">
      <div class="col-md-10 offset-md-2" >
  <textarea type="text"name="commentaire" cols="69px" rows="10"><?php echo ($ET['commentaire'])?>
      
    </textarea> 
</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 offset-md-3"><h2 style=" text-shadow: 2px 2px 5px gold;">Photo</h2><h6 style=" text-shadow: 2px 2px 5px red;">(l'insertion n'est pas obligatoire)</h6></div>
    </div>
    <div class="row">
    <div class="container-fluid">
      <div class="col-md-5 offset-md-3" ><input type="file" name="photo" class="form-control">
   </div>
<br><br>
   <div class="row">
    <div class="container-fluid">
      <div class="col-md-2 offset-md-2" ><input type="submit" value="ENREGISTRER">
   </div>
   

  </div>
  <div class="row">
  <div class="col-md-2 offset-md-1"><a class="btn btn-primary" href="14.php"  class="fst-italic">Retour</a></div>
  </div>
</form>



  </table>



<?php } ?>
</script>
              <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>