<?php
    session_start();
    
    include 'openDatabase.php';

    $_SESSION['form']=$_POST;

    if(isset($_POST['email']))
    {
        $cmd=$data->prepare("SELECT password, name, lastname,id,admin FROM users WHERE email = :adresse");

        $cmd->execute(
            [
                'adresse'=>$_POST['email']
            ]
        );

        $value = $cmd->fetch();

        if(password_verify($_POST['password'] , $value['password']))
        {
            $_SESSION['name'] = $value['name'].' '.$value['lastname'];

            if($value['admin'])
            {
                $_SESSION['admin'] = true;
            }

            else
            {
                $_SESSION['admin'] = false;
            }

            if(isset($_POST['save']) && $_POST['save']=="on")
            {
                setcookie('email',$_POST['email'],time()+84600,'/');
                setcookie('password',$_POST['password'],time()+84600,'/');
            }
        }
    }

    if(isset($_SESSION['admin'])) {
        header("Location: /index.php");
    }

    else{
        header("Location: /login.php");
    }