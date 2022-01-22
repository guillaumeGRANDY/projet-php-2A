<?php
    include 'openDatabase.php';

    $value=$data->prepare("SELECT id,password FROM users");
    $value->execute();

    foreach($value as $row)
    {
        var_dump($row);
        $value=$data->prepare("UPDATE users SET password = :newPassword WHERE id=:id;");

        $value->execute(
        [
            'newPassword'=> password_hash( $row['password'],PASSWORD_DEFAULT),
            'id'=>$row['id']
        ]);
    }
