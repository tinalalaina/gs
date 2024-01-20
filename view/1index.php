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
  <title>premier</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-navider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      textarea{
        background: rgb(214, 150, 13);
        color:white;
      }
      
      h1{
          text-shadow: 2px 2px 5px red;
         }
         h2{
          text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
         }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

</head>
<body class="bg-warning">
<main>
<nav id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  

  <nav class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </nav>
  <nav class="carousel-inner">
    <nav class="carousel-item active">

    <img  src="../1/sary/<?php echo ($ET['photo'])?>" alt=""> 
      <nav class="container">
        <nav class="carousel-caption text-start">
          <p><?php echo ($ET['titre'])?></p>
        </nav>
      </nav>
    </nav>
    <nav class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

      <nav class="container">
        <nav class="carousel-caption">
        <h5>
          <?php echo ($ET['titre'])?></h5>
           </nav>
      </nav>
    </nav>
    <nav class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

      <nav class="container">
        <nav class="carousel-caption text-end">
          <h6>Gestion d'évènement</h6>
          <p>de METFP</p>
          </nav>
      </nav>
    </nav>
  </nav>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</nav>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->


<nav class="container marketing ">
  <nav class="row featurette">
    <nav class="col-md-7">
      <h1 class="featurette-heading fw-normal lh-1"><?php echo ($ET['titre'])?></h1><br>
       <h2><span class="text-muted"><?php echo ($ET['soustitre'])?></span></h2>
     <textarea readonly="true" cols="80" rows="10"> <?php echo ($ET['commentaire'])?></textarea>
    </nav>
    <nav class="col-md-5"><img height=500px width=500px  src="../1/sary/<?php echo ($ET['photo'])?>"> 

    </nav>
  </nav>

  <!-- /END THE FEATURETTES -->

</nav><!-- /.container -->

<!-- FOOTER -->
<footer class="container">
  <p class="float-end"><br><a class="btn btn-primary" href="../1/4.php">Retour</a><br><br><a href="#">revenir en haut</a> </p>
  <p>&copy; 2022–2027 &middot; <a href="#">facebook:tinalalaina RAKL</a> &middot; <a href="#">Contact:0347594403</a></p>
</footer>
</main>

 <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 