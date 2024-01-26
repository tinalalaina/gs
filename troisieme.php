<?php session_start(); 
include_once('authentifi/includes/config.php');
// Code for login 
if(isset($_POST['login']))
{
  $adminusername=$_POST['username'];
  $pass=($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="1/14.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['adminid']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="troisieme.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login | user</title>
    
    <link rel="stylesheet" href="webfont/css/all.css">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body >
<form method="post"><div class="container">

<table class="table table-bordered border-dark bg-danger" style="margin-top:70px">
  <tr><td>
    <div class="row">
        <div class="col-sm-12 text-center " style="color:black" > <h1 style="text-shadow: 3px 3px 6px green;"><i class="fab fa-earlybirds"></i> Géstion d'évènement</h1></div>
       
        <div class="text-center">

        <div class="card">
  <div class="card-body">
  <div class="form-group">
    <h2> Page de connexion Administrateur</h2><p>
 <h4> Vous êtes déconnecté. </p></h4><br>
  <label for="usr">Utilisateur : <i class="fas fa-user-secret"></i></label>
<input  name="username" type="text" placeholder="Username"  class="form-control" />
</div>
<div class="form-group">
  <label for="pwd">Mot de passe : <i class="fas fa-user-secret"></i></label>
<input name="password" type="password" placeholder="Password" class="form-control"/></div>
<div class="form-group">

<button  class="btn btn-primary"name="login" type="submit">Login</button>


</div>
  </div>
        </div>
        
        </div>
        <div class="col-2"><a href="index.php"><i class="far fa-caret-square-left"></i>Retour</a></div>
        <div class="col-sm-12 text-center" style="color:red">2022-2027</div>
    </div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</form>

