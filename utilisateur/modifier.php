<!--
require_once('connexion.php');
$id=$_GET['id'];
$nom=$_GET['nom'];
$nomphoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"./images/$nomphoto");
$result = mysqli_query($connexion, "UPDATE images SET photo='$nomphoto',nom='$nom' where id=$id");
header("location:afficher.php");
-<?php session_start();
include_once('../authentifi/includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:authentifi/admin/logout.php');
  } else{
    
?>
<?php
require_once('../authentifi/includes/config.php');
$code=$_POST['code'];
$name = $_POST["titre"];
$soustitre = $_POST["soustitre"];
$commentaire = $_POST["commentaire"];
$nomphoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"sary/$nomphoto");

mysqli_query($connexion,"UPDATE evenements set code='$code',titre='$name',soustitre='$soustitre',commentaire='$commentaire',photo='$nomphoto' where code='$code'");
header("location:4.php");
?>
hello

<?php } ?>