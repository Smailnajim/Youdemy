<?php
    
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
    // include "../app/controllers/RoleController.php";
    include "../app/controllers/TagController.php";

    // $path = $_SERVER['REQUEST_URI'].
    // $method = strtolower($path);

    // switch($path){
    //     case 'login':
    //         if()
    // }


    $techerController = new EnseignantController();
    $techerTybe = $techerController->createEnseignant("tybe", "swini", "t@gmail.com");
    var_dump($techerTybe);
    $techerController->create_crud($techerTybe);

    // $techerTybe->