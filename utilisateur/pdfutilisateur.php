
<script type="text/javascript">
window.print();
 setTimeout(window.close,750);
</script>
<?php
require_once("../authentifi/includes/config.php");
$result = mysqli_query($con,"select * from users");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="bg-info">
    

   <div class="container" >
<br>
<a href="../1/14.php"> retour</a>
<br>

<table class="table table-success table-striped table-bordered" style="margin-top:95px">
<tr><td >Email</td><td>Mot de passe</td></tr>

<!---->
<center><img src="../1/logo/2.jpg">
<br><br>
MINISTERE DE L'ENSEIGNEMENT TECHNIQUE ET DE LA FORMATION <br>
PROFESSIONNELLE</center>
<br><br>
<div class="text-center"><h1 style="color:red">Liste de toutes les  utilisateur</h1></div>
<?php while ($ET=mysqli_fetch_assoc($result)){?>
    
        
             <tr><td class="text-center"style="color:blue"><?php echo ($ET['email'])?></td><td style="color:green"class="text-center"><?php echo ($ET['password'])?></td>
      
                </nav>
              </nav>
            </nav>
          </nav>
        </nav>
<?php }?>

<!---->
 
</table>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
</body>
</html>