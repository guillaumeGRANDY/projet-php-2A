<?php
    try
    {
        $data=new PDO('sqlite:' . __DIR__ . '/../database/database.db');
        $data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch(PDOException $Exception)
    {
        die(ERROR);
    }