<?php

    include_once "./../app/forms/LoginModel.php";


    switch($_SERVER["REQUEST_METHOD"])
    {
        case 'post':
        case 'get':
            $form = new loginForm($_POST['FirstName'], $_POST['LastName'], $_POST['email']);

        case 'get':
            echo "eror get";
            break;

        case 'post':
            echo $form->FirstName;
            break;
    }
    

?>
