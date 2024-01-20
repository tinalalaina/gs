<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
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
    <title></title>
</head>
<body>
<a href="premier.php">AJOUTER</a>
<a href="chercher.php">chercher</a>
    <table border="12" whidth="50%">
    <tr>
   <td></td><td></td> <th>Photo</th><th>code</th><th>Titre</th><th>Sous titre</th><th>Commentaire</th>
    </tr>
    <?php while ($ET=mysqli_fetch_assoc($result)){?>

        <td><a href="supprimer.php?code=<?php echo ($ET['code'])?>">su</a></td>
  <td><a href="editer.php?code=<?php echo ($ET['code'])?>">modifier</a></td>

        <td><img whidth="250px"height="250px" src="sary/<?php echo($ET['photo'])?>"></td>
        <td><?php echo ($ET['code'])?></td>
        <td><?php echo ($ET['titre'])?></td>
        <td><?php echo ($ET['soustitre'])?></td>
        <td><textarea readonly="true"cols="30" rows="10"><?php echo ($ET['commentaire'])?></textarea></td>
        
        
 </tr>

    <?php }?>
    </table>
</body>
</html>
<!--  <tr>
        <td>< echo ($ET['id'])?></td>
        <td><img src="images/php echo ($ET['nom'])?>" alt=""></td>
        <td><php echo ($ET['photo'])?></td>
        <td><img src="images/<phpecho($ET('photo'))?>"></td>
        <td><img src="images/<php echo($ET['photo'])?>"></td>
        <img src="images/<php echo($ET['nom'])?>">
        <php
echo "<img src=\"images/".$ET["nom"].">";
?>
    </tr>-->
    
 <?php } ?>