<?php
    
    include "../app/models/User.php";
    include "../app/models/Cours.php";
    include "../app/models/Enseignant.php";
    include "../app/models/Etudiant.php";
    include "../app/models/General.php";
    include "../app/models/Role.php";
    include "../app/models/Tag.php";
    include "../app/models/Categorie.php";
    include "../app/core/DataBase.php";


    // $teatcher = new Enseignant("smail", "najim");
    // $cours = $teatcher->createCours("math", "for everyone here! you can do it",  "./../public/video/World Wide Web   شبكة الويب العالمية.mp4", "./../public/document/Reenskaug-MVC.pdf", ["ahmed", "bord", "chta"]);
    // var_dump($cours);

    // echo "-------------------------1";
    // // $cours->create();
    // echo "----------".$cours->id()."---------------2";

    $userController = new UserController();
    $userModel = new UserModel("smail", "najim");
// TODO
    $userController->create($userModel);
    