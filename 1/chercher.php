<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:authentifi/admin/logout.
  php');
  } else{
    
?>
<?php
require_once("connexion.php");
$mc="NULL";
if(isset($_POST['motcle'])){
    $mc=$_POST['motcle'];
}
$result =mysqli_query($connexion,"select * from evenements where titre like '%$mc%'");


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
<a href="premier.php">AJOUTER</a><br>
<a href="chercher.php">chercher</a><br>
<form action="" method="POST">
    mot cle= <input type="text" name="motcle"><input type="submit" value="chercher">
</form>
    <table border="12" whidth="50%">
    <tr>
   <td></td> <td></td><th>code</th><th>Titre</th><th>Sous titre</th><th>commentaire</th><th>photo</th>
    </tr>
    <?php while ($ET=mysqli_fetch_assoc($result)){?>
        
  <td><a href="supprimer.php?code=<?php echo ($ET['code'])?>">supprimer</a></td>
  <td><a href="editer.php?code=<?php echo ($ET['code'])?>">modifier</a></td>
        <td><?php echo ($ET['code'])?></td>
        <td><?php echo ($ET['titre'])?></td>
        <td><?php echo ($ET['date'])?></td>
        <td><?php echo ($ET['soustitre'])?></td>
        <td><textarea readonly="true" name="" id="" cols="30" rows="10"><?php echo ($ET['commentaire'])?></textarea></td>
        <td><img width="200px" height="200px" src="sary/<?php echo ($ET['photo'])?>"></td>
                <!-- on peut changer sary/ en ./sary/-->
 </tr>

    <?php }?>

    </table>

    <?php } ?>
</body>
</html>