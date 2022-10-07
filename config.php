<?php

try {
    $conn = new PDO("mysql:host=localhost; dbname=payme; charset=utf8", "root", "");
} catch (Exception $e) {
    die ('Erreur :' .$e -> getMessage());
}

?>