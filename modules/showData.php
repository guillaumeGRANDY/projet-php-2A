<?php
    include 'openDatabase.php';

    $request = "SELECT name,id, lastname, email, password FROM users";
    $sth = $data->prepare($request);
    $sth->execute();
    $output = $sth->fetchAll();

    foreach($output as $row){
        var_dump($row);
}

