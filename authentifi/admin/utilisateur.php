<?php session_start(); 
include_once('../includes/config.php');
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
header("location:dashboard.php");

}
else
{
echo "<script>alert('Invalid username or password');</script>";
}
}
?>
  exemple   

email: phpgurukulteam@gmail.com
mot de passe: Test@123
    </h3></div>
                                        
                                        <form method="post">
                                            
<div class="form-floating mb-3">
<input name="uemail" type="email"/>
<label for="inputEmail">Adress email</label>
</div>
                                   
<input name="password" type="password" placeholder="Password" required />

<a class="small" href="password-recovery.php">Mot de passe oublier</a>
<button name="login" type="submit">Connexion</button>

</form>
                                        
                                          <div><a href="index.php">Retour</a>