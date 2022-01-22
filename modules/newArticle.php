<?php
    include 'openDatabase.php';

    $data->exec("CREATE TABLE IF NOT EXISTS blogs
    ('id' INTEGER,
   'title' varchar(255),
   'shortDesc'	VARCHAR(255),
   'text'	VARCHAR(2000),
   'picture' VARCHAR(255),
   PRIMARY KEY('id'));");

    $value=$data->prepare("INSERT INTO blogs (title,shortDesc,text,picture) VALUES (:title,:shortDesc,:text,:picture);");

    $value->execute(
    [
        'title'=>$_POST['titre'],
        'shortDesc'=>$_POST['petiteDescription'],
        'text'=>$_POST['contenu'],
        'picture'=>$_FILES['image']['name']
    ]);

    move_uploaded_file($_FILES["image"]["tmp_name"],__DIR__.'/../img/bg/'.$_FILES["image"]["name"]);

    
    header("Location: ../index.php");