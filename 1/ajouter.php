<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:authentifi/admin/logout.php');
  } else{
    
?>

<?php
require_once('connexion.php');
$name = $_POST["titre"];
$date = $_POST["date"];
$soustitre = $_POST["soustitre"];
$commentaire = $_POST["commentaire"];
$nomphoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"./sary/$nomphoto");
mysqli_query($connexion,"INSERT INTO evenements (titre,date,soustitre,commentaire,photo) VALUES ('" . $name. "','" . $date. "', '" . $soustitre. "', '" . $commentaire. "', '" . $nomphoto. "')");
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
<style>
.container--bold {
        border: solid 5px #555;
        margin: 10px 100px 10px 100px;
        background:rgb(95, 128, 3);
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
      th{
          color:yellow;
          margin:10px;
          padding: 5px;
          border:2px;
      }
    </style>
<body class="bg-dark">
    <nav class="container--bold">
      <nav class="container--small">
        <h5 align="center"><p> Votre évènement </p></h5>
      </nav>
      <nav class="container--small">
    <table border=""1>
        <tr>
            <th>Titre</th> <th>Date</th><th>Sous titre</th><th>Commentaire</th><th>Photo</th>
        </tr>
        <tr>
            <td class="bg-primary"> <p><?php echo($name) ?></p> </td>
            <td class="bg-primary"> <p><?php echo($date) ?></p> </td>
            <td class="bg-secondary"><p> <?php echo($soustitre)  ?> </p></td>
            <td><textarea readonly="true" cols="50" rows="10" > <?php echo($commentaire) ?></textarea></td>
             <td> <img whidth="250px"height="250px"  src="sary/<?php echo($nomphoto)?>" alt=""> </td>
        </tr>
    </table>
    <h5 align="center"><p> a étè enregistreé avec succée  </p> </h5>

  
    <a class="btn btn-primary" aria-current="page" href="14.php"> Accueil</a>
    <a class="btn btn-secondary" href="premier.php">Ajouter</a>
    <a class="btn btn-success" href="14.php">Lister</a>
    
    </nav>
    </nav>
    </nav>
    
 <?php } ?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
