<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - Products Dashboard UI</title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <?php
  //       get cours

  include "../app/models/UserModel.php";
  include "../app/models/CoursModel.php";
  include "../app/models/EnseignantModel.php";
  include "../app/models/EtudiantModel.php";
  include "../app/models/General.php";
  include "../app/models/RoleModel.php";
  include "../app/models/TagModel.php";
  include "../app/models/CategorieModel.php";
  include "../app/core/DataBase.php";


  include "../app/controllers/AdministrateurController.php";
  include "../app/controllers/CategorieController.php";
  include "../app/controllers/CoursController.php";
  include "../app/controllers/EnseignantController.php";
  include "../app/controllers/EtudiantController.php";
  include "../app/controllers/RoleController.php";
  include "../app/controllers/TagController.php";

  // $path = $_SERVER['REQUEST_URI'].
  // $method = strtolower($path);

  // switch($path){
  //     case 'login':
  //         if()
  // }


  $controllerCours = new CoursController();
  $courses = $controllerCours->readAll_crud();
  // var_dump($cours) ;
  // strtolower($cours["video"]);
  ?>


  <!-- partial:index.partial.html -->
  <div class="app-container">
    <?php include_once "./sidebar.php";?>
    
<!-- cors read -->
    <div class="products-area-wrapper tableView">
      <?php foreach ($courses as $cours): ?>
        <div class="card" style="width: 18rem;">
          <video src=<?php echo strtolower($cours["video"]); ?>></video>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      <?php endforeach ?>
    </div>


    <?php
    /*
    to create cours you need 
    -rol if you don't have rol create controllerRole (shod be in db)
    -Categorie if you don't have Categorie create CategorieController(shod be in db)
    -insert role to techer and create him (shod be in db)
    -create cours
    -create it into db
    */
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>