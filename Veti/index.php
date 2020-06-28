<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bienvenue chez Veti Veterinaire !" />
  <meta name="author" content="Atohoun Marvin"/>
  <title>Veti Veterinaire</title>
    
  <!-- CSS & frameworks -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
  <script src="https://kit.fontawesome.com/2186d3ac63.js" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Image and text -->
  <nav class="row navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="assets/img/veti.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      Veti Veterinaire
    </a>
  </nav>
    



  <section class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Veti Veterinaire</h1>
      <p class="lead">L'Ordre est le garant de la qualité du service rendu au public par les vétérinaires en exercice</p>
    </div>
  </section>
  
  <div class="album py-5 bg-light">
    <div class="container jumbotron text-left">
      
      <div class="row">

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="assets/img/cat.jpg" alt="" width="100%" height="225">
            <div class="card-body">
                <h1>Chat</h1>
                <?php
                    include("chat.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="assets/img/cheval.jpg" alt="" width="100%" height="225">
            <div class="card-body">

            <h1>Cheval</h1>
            <?php
                    include("cheval.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="assets/img/chien.jpg" alt="" width="100%" height="225">
            <div class="card-body">
                <h1>Chien</h1>
                <?php
                    include("chien.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="assets/img/perroquet.jpg" alt="" width="100%" height="225">
            <div class="card-body">
                <h1>Perroquet</h1>

                <?php
                    include("perroquet.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="assets/img/poisson-clown.jpg" alt="" width="100%" height="225">
            <div class="card-body">
                <h1>Poisson</h1>

                <?php
                    include("poisson.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="assets/img/serpent.jpg" alt="" width="100%" height="225">
            <div class="card-body">
                <h1>Serpent</h1>

                <?php
                    include("serpent.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>
  </div>

  <footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> Atohoun Marvin</a>
    </div>
  </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-.1.2/jquery.s"></script>
</body>
</html>
