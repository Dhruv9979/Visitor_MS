<?php
    $connection = new PDO("mysql:host=localhost;dbname=baps", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
?>