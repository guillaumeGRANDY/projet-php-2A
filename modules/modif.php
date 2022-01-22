<?php

    include 'openDatabase.php';

    $data->exec('UPDATE users SET admin=true WHERE id=1503');