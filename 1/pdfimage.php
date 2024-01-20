<script type="text/javascript">
window.print();
 setTimeout(window.close,750);
</script>
<style type="text/css">
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
    }
    #display table, #display th, #display td {
        border: .1em solid #000;
    }
    body, #display table, #display th, #display td {
        color: #000;
      
        font-size: 13px;
    }

    #display table {
        display: table;
        border-collapse: separate;
        border-spacing: 2px;
        border-color: grey;
        padding: 10px;

    }
    td{
      padding:4px;
    }
/*    @media all {
  .page-break { display: none; }
}*/

@media print {
    td{
      padding:4px;
    }
  .hide{display: none;}
  .page-break {
    display: block; page-break-before: always;
  }

}
  </style>
<!--///////////////////////////////////////////-->
<?php
require_once('../1/connexion.php');
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
<br>
<br><br><br>
<body style="color:dark" class="bg-info">
<div class="container" class="margin-top:200px">

    <div class="row">
    <div class="col-md-12 text-center" ><h1 style=" text-shadow: 2px 2px 5px red;color:dark"><?php echo ($ET['titre'])?></h1></div>
    </div><br><br><br>
    <div class="row">
        <div class="col-md-4 text-center"><h2 style=" text-shadow: 2px 2px 5px gold;color:red" ><?php echo ($ET['soustitre'])?></h2>
    </div>
    </div><br>
   <div class="container">
   <img whidth="850px"height="850px" src="sary/<?php echo($ET['photo'])?>">
   </div>     
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<!--///////////////////////////////////////////-->
  <body>
    <div class="container">
      <div class="text-center">1</div>
      <h1</h1><br>
      <h2></h2><br><br><br>
      <p></p>
    </div>
  </body>

  
<!--///////////////////////////////////////////-->
<a href="../1/4.php">Retour</a>








