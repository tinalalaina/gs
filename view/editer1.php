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
    <title>Document</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">
<form action="modifier.php" method="POST" enctype="multipart/form-data">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center"><br>
        <h1 style=" text-shadow: 2px 2px 5px red;">Modidier l'évènements</h1>
      </div>
    </div><br><br>
    <div class="row">
      <div class="col-md-2 offset-md-2"><h1 style=" text-shadow: 2px 2px 5px green;">titre</h1>
  </div>
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-6 offset-md-2" ><input type="text" class="form-control" name="titre" value="<?php echo ($ET['titre'])?>">
</div>
    </div>
  </div>
    </div><br>
    <div class="row">
      <div class="col-md-3 offset-md-3"><h2 style=" text-shadow: 2px 2px 5px gold;">sous titre</h2></div>
    </div>
    <div class="row">
    <div class="container-fluid">
      <div class="col-md-5 offset-md-3" ><input type="text" class="form-control" name="soustitre"value="<?php echo ($ET['soustitre'])?>">
</div>
    <div class="row">
      <div class="col-md-3 offset-md-3"><h2 style=" text-shadow: 2px 2px 5px gold;">commenaire</h2></div>
    </div>
    <div class="row">
    <div class="container-fluid">
      <div class="col-md-10 offset-md-2" >
      <pre> <textarea type="text"name="commentaire"cols="99"rows="10" ><?php echo ($ET['commentaire'])?></textarea>  </pre>
</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 offset-md-3"><h2 style=" text-shadow: 2px 2px 5px gold;">Photo</h2></div>
    </div>
    <div class="row">
    <div class="container-fluid">
      <div class="col-md-5 offset-md-3" ><input type="file" name="photo" class="form-control">
   </div>
<br><br>
   <div class="row">
    <div class="container-fluid">
      <div class="col-md-2 offset-md-2" ><input type="submit" value="ENREGISTRER">
   </div>
   

  </div>
</form>
</script>
              <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>