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
    include "../app/controllers/RoleController.php";
    include "../app/controllers/TagController.php";

    // $path = $_SERVER['REQUEST_URI'].
    // $method = strtolower($path);

    // switch($path){
    //     case 'login':
    //         if()
    // }


    $roleController = new RoleController();
    $role = $roleController->createModel("student");
    $roleController->create_crud($role);

    $CategorieController = new CategorieController();
    $Categorie = $CategorieController->createModel('chta');
    // echo "hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";
    // $CategorieController->create_crud($Categorie);

    
    $techerController = new EnseignantController(); 
    // var_dump($role);
    $techerTybe = $techerController->createEnseignant("youssef2", "hwa2", "f2@gmail.com", $role);
    $techerController->create_crud($techerTybe);
    // var_dump($techerTybe);
    
    $cours = $techerTybe->createCours("jjjjj", "jibazevssan", "./video/World Wide Web.mp4", "./document/Reenskaug-MVC.pdf",["a", "b", "c"], $techerTybe, $Categorie);
    var_dump($cours);
    $cours->create();


    /*
    to create cours you need 
    -rol if you don't have rol create controllerRole (shod be in db)
    -Categorie if you don't have Categorie create CategorieController(shod be in db)
    -insert role to techer and create him (shod be in db)
    -create cours
    -create it into db
    */