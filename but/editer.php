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
  <title>premier</title>
  
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
      h1,p{
          text-shadow: 2px 2px 5px red;
         }
    </style>
<body class="bg-dark">
    <nav class="container--bold">
      <nav class="container--small">
        <h1 align="center"><p> Modifer l'évènements </p></h1>
      </nav>
      <nav class="container--small">
  <form action="modifier.php" method="POST" enctype="multipart/form-data">
    <center>
   <p> code <br><input readonly="true" type="text"name="code" value="<?php echo ($ET['code'])?>" ><br>
    Titre <br><input type="text"name="titre" value="<?php echo ($ET['titre'])?>" ><br>
   Sous titre <br><input type="text"name="soustitre" value="<?php echo ($ET['soustitre'])?>" ><br>
   Commentaire <br>      <textarea type="text"name="commentaire"cols="80"rows="10" ><?php echo ($ET['commentaire'])?></textarea><br></p>
  <br> photo <br><input type="file" name="photo"><br>
   <br><input type="submit" value="ENREGISTRER"><br>
<br>  <a class="btn btn-primary" href="4.php">Retour</a>
</center>
  </form>
    </nav>
    </nav>
    </nav>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
