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
<body style="color:white" class="bg-info">
 <div class="container-fluid">
     <!--navbar top fixed-->
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
  <nav class="container-fluid">
    <a class="navbar-brand" href="#">Navbar w/ text</a>
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
          Déconnexion
      </span>
    </nav>
  </nav>
</nav>
 <!-- fin navbar -->
     <div class="row">
         <div class="col-md-2 bg-success  text-center top-fixed" style="margin-top:55px;">
         <div class="container text-center">
         <ul class="list-group list-group-flush"  style="margin-top:55px;">
  <li class="list-group-item">
  <a class="nav-link" href="premier.php"> + Creér un évènement</a>
  </li>
  <li class="list-group-item"><a class="nav-link" href="premier.php"> Modifer un évènement</a>
  </li>
  <li class="list-group-item"><a class="nav-link" href="supprimer.php">Supprimer un évènement</a></li>
  <li class="list-group-item"><a class="nav-link" href="4.php">Lister tous l'évènement</a></li>
</ul>
     

<ul class="list-group list-group-flush"  style="margin-top:100px;">
  <li class="list-group-item"><a href="pdf.php?code=<?php echo ($ET['code'])?>">Reporter en PDF</a></li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
</ul>

<ul class="list-group list-group-flush"  style="margin-top:150px;">
  <li class="list-group-item">About</li>
</ul>


</div>
        </div>
         <div class="col-md-10 text-center  text-center">
           
         <div class = "scroll"> 


        
         <p style="margin-top:70px">Tous l'évènement</p><br>
         <ul class="pager">
         <nav class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4" style="margin-top:8px">
 <!-- =======================================================================================================================-->
 <?php while ($ET=mysqli_fetch_assoc($result)){?>
        <nav class="col">
          <nav class="card shadow-sm">
           <img src="sary/<?php echo ($ET['photo'])?>" alt="">
            <nav class="card-body">
              <p class="card-text bg-secondary text-dark" ><?php echo ($ET['titre'])?><br><?php echo ($ET['soustitre'])?>
              <nav class="d-flex justify-content-between align-items-center">
              <nav class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="../view/4.php?code=<?php echo ($ET['code'])?>">voir plus sur view</button>
                  <img whidth="250px"height="250px" src="sary/<?php echo($ET['photo'])?>">

                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="voirplus.php?code=<?php echo ($ET['code'])?>">voir plus sur 1</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="pdf.php?code=<?php echo ($ET['code'])?>">Reporter en PDF</a></button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="editer.php?code=<?php echo ($ET['code'])?>">modifier</a></button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="supprimer.php?code=<?php echo ($ET['code'])?>">supprimer</a></button>
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
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>