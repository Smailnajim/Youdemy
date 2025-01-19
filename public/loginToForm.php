<?php

include_once "./../app/core/DataBase.php";
    include_once "./../app/forms/loginForm.php";
    include_once "./../app/controllers/EnseignantController.php";
    include_once "./../app/models/UserModel.php";
    include_once "./../app/models/EnseignantModel.php";
    



    if($_SERVER['REQUEST_METHOD'] == 'POST')
        $form = new loginForm($_POST['FirstName'], $_POST['LastName'], $_POST['email'], $_POST['role']);
    else{
        header("Location: pageLogin.php");
        exit;
    }
    
    echo $_POST['role'];


    var_dump($form);

    switch($form->role)
    {
        case 'Enseignant':
            $controller = new EnseignantController();
            echo '--------------0';
            $controller->readByFormLpogin_crud($form);
            break;

        case 'Etudiant':
            echo $form->FirstName;
            break;

        case 'Administrateur':
            echo $form->FirstName;
            break;

        default:
            echo 'role is undifinde';
            break;
    }

?>


