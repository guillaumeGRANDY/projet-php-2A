<?php
    include 'openDatabase.php';

    $data->exec("CREATE TABLE IF NOT EXISTS message
            ('id' INTEGER,
           'email' varchar(255),
           'name'	VARCHAR(255),
           'lastName'	VARCHAR(255),
           'text' varchar(1000),
           PRIMARY KEY('id')
           );");

    $value=$data->prepare("INSERT INTO message (email,name,lastname,text) VALUES (:email,:name,:lastname,:text);");


    $value->execute(
        [
            'email'=>$_POST['email'],
            'name'=>$_POST['firstName'],
            'lastname'=>$_POST['lastName'],
            'text'=>$_POST['text']
        ]);

header("Location: /index.php");

