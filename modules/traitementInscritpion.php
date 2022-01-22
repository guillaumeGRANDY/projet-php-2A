<?php
    session_start();
    include 'openDatabase.php';



    $cmd="INSERT INTO users (email,name,lastname,password,admin) VALUES (:email,:name,:lastname,:password,:admin)";
    $value=$data->prepare($cmd);

    $value->execute(
            [
                'email'=>$_POST['email'],
                'name'=>$_POST['firstname'],
                'lastname'=>$_POST['lastname'],
                'password'=>password_hash($_POST['password'],PASSWORD_DEFAULT),
                'admin'=>0
            ]);

    header("Location: /index.php");