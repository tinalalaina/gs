<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:../authentifi/admin/logout.php');
  } else{
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
      .container--bold {
        border: solid 5px #555;
        margin: 10px 100px 10px 100px;
        background:rgb(3, 67, 128) ;
      }

      .container--small {
        border: solid 1px #555;
        margin: 5px;
      }
      p{  
          color:white;
          padding: 10px;
          
      }
      input{
          color: black;
          background:gold;
      }
      textarea{
          color: black;
          background:gold;
      }
      a{
          background: blue;
          color:red;
      }
    </style>
<body class="bg-dark">
    <nav class="container--bold">
      <nav class="container--small">
        <h5 align="center"  class="fst-italic"><p> Ajouter un évènements </p></h5>
      </nav>
      <nav class="container--small">
<form action="ajouter.php" method="POST" enctype="multipart/form-data">
<a class="btn btn-primary" href="4.php"  class="fst-italic">Retour</a>
<center>
<p  class="fst-italic" >DATE DE PUBLICATION : </p><input  class="fst-italic"type="date" cols="65px" rows="10"name="date">
    <br>
   <p  class="fst-italic" > TITRE</p><input  class="fst-italic"type="text" cols="65px" rows="10"name="titre">
    <br>
   <p  class="fst-italic"> Sous titre </p><input  class="fst-italic"type="text" name="soustitre">
    <br>
    <p  class="fst-italic"> Commentaire (s 'il vous plait met à la ligne a chaque fois que le colone est remplie) </p><textarea  name="commentaire" cols="65px" rows="10"></textarea>
    <br>
   <p  class="fst-italic"> Photo </p><input type="file" name="photo"><br><br>
   <button type="reset" class="btn btn-danger"  class="fst-italic">EFFACER TOUS</button>
    <input type="submit" class="btn btn-success"   class="fst-italic"value="ENREGISTRER"><br><br>
    <a class="btn btn-primary" href="4.php"  class="fst-italic">Retour</a>
   
 
       </center>
</form>

    </nav>
    </nav>
    </nav>

    <?php } ?>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


