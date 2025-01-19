<?php

    include_once "./../app/forms/LoginModel.php";



    if($_SERVER['REQUEST_METHOD'] == 'POST')
        $form = new loginForm($_POST['FirstName'], $_POST['LastName'], $_POST['email'], $_POST['role']);
    else
        header();




    switch($form->role)
    {
        case 'Enseignant':
            readByFormLpogin_crud($form);
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


