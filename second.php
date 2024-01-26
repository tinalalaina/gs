
<?php session_start(); 
include_once('authentifi/includes/config.php');
// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT id FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{

$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
header("location:utilisateurexistant/4.php");

}
else
{
echo "<script>alert('Invalid username or password');</script>";
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
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body >
<form method="post"><div class="container">

<table class="table table-bordered border-dark bg-success" style="margin-top:70px">
  <tr><td>

    <div class="row">
        <div class="col-sm-12 text-center " style="color:black" > <h1 style="text-shadow: 3px 3px 6px green;" >Géstion d'évènement</h1></div>

        <div class=" text-center">

        <div class="card">
  <div class="card-body">
  <div class="form-group">
  <h2> Page de connexion </h2><p>
 <h4> Vous êtes déconnecté. </p></h4>
  <label for="usr">Utilisateur:</label>
  <input name="uemail"type="email" class="form-control" id="usr"placeholder="exemple@gmail.com" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu’un d’autre.</div>
</div>
<div class="form-group">
  <label for="pwd">Mot de passe:</label>
  <input name="password" type="password" placeholder="Password" class="form-control" id="pwd">
</div>
<div class="form-group">
<input class="btn btn-primary" name="login" type="submit" value="Confirmer">
</div>
  </div>
        </div>
        
        </div>
        <div class="col-2 "><a href="index.php">RETOUR</a></div>
        <div class="col-sm-12 text-center" style="color:black">2022-2027</div>
    </div>
</div></td>

</tr>

</table>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</form>


</body>
</html>

                                        
                                          