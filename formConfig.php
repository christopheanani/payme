<?php
session_start();
include 'config.php';

// Insertion du message à l'aide d'une requête préparée
$req = $conn->prepare('INSERT INTO messages (fullname, number, message)
VALUES(?, ?, ?)');
$req->execute(array($_POST['fullname'], $_POST['number'], $_POST['message']));

// Afficher le message de reception du message
echo 'Votre message a été bien envoyé';

// Redirection du visiteur vers la page de d'accueil
// header('Location: index.php');
?>
?>
