<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    
?>

<?php 

//Code for Registration 
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into users(email,password) values('$email','$password')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = '../../utilisateur/lister.php'; </script>";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <a class="navbar-brand" href="#">Gestion/Evenement</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Gestion" aria-controls="Gestion" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="collapse navbar-collapse" id="Gestion">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../1/premier.php">Ajouter un évènement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../1/14.php">Lister tous l'évènement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../1/chercher1.php">Chercher un évènement</a>
        </li>
      </ul>
      <span class="navbar-text">
      <a href="logout.php">Déconnexion</a>
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
  <li class="list-group-item"><a class="nav-link" href="../../1/chercher1.php">chercher un évènement</a>
  </li>
  <li class="list-group-item"><a class="nav-link" href="../../1/14.php">Lister tous l'évènement</a></li>
</ul>
     

<ul class="list-group list-group-flush"  style="margin-top:100px;">
  <li class="list-group-item"><a href="signup.php">   Ajouter un nouveau utilisateur</a></li>
  <li class="list-group-item"><a href="../../utilisateur/lister.php">   lister tous les utilisateur</a></li>
  <li class="list-group-item"> <a href="../../utilisateur/chercher.php">   chercher un  utilisateur</a> </li>
</ul>

<ul class="list-group list-group-flush"  style="margin-top:150px;">
<li class="list-group-item"><a href="../pdfevenement.php">   Tous les évènements en PDF</a></li>
<li class="list-group-item"><a href="../pdfevenement.php">   Tous les utilisateur en PDF</a></li>
  
  <li class="list-group-item">About</li>
</ul>


</div>
        </div>
         <div class="col-md-10 text-center  text-center">
           
         <div class = "scroll"> 


        
         <h1><p style="margin-top:70px;text-shadow: 2px 2px 5px red;" class="fst-italic">Tous l'évènement</p></h1><br>
         <div class="row">
           <div class="col-md-6 offset-md-3 text-center bg-warning">
       <a href="chercher1.php">chercher</a></div>
         </div>

         <ul class="pager">
         <nav class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4" style="margin-top:8px">






    
    <form method="post" name="signup">
    <div class="table">
        <tr>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

    </tr>
    <tr>  Mot de passe
    <input  name="password" type="password" class="form-control"placeholder="Create a password"/>
    </tr>
                            <tr><br><br> 
    <button type="submit"  name="submit">Envoyer</button>
    </tr>
                                            </form>
        
    
    </div>
    

    </nav>
         </div>
 </div>
 <?php } ?>
 
<script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>