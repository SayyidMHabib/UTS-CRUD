<?php
try {
    $con = new PDO('mysql:host=localhost:3306;dbname=mycrud','crud','Bismillah_28');
    $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    print $e -> getMessage();
    die();
}