<?php
session_start();
//connexion a la base de donnée
include 'config.php';
if(isset($_POST['submit'])){

    if(!empty($_POST['fullname']) AND !empty($_POST['code'])){
      
//declaration des variables
    $fullname = $_POST['fullname'];
    $code = $_POST['code'];

     $recupuser= $conn->prepare('SELECT * FROM users WHERE fullname=? AND code =?');
     $recupuser->execute(array($fullname,$code));
     $user = $recupuser->fetch();
        if($recupuser->rowCount() >0){
            $_session['fullname'] =$fullname;
            $_session['code'] = $code;
            $_session['id'] = $recupuser->fetch()['id'];
            header('location:payment.php');
        } else{
            session_destroy();
            // $error = "Veuiller remplire les champs.";
            echo"Assurez-vous que votre nom est dans la base de données. Contacter votre société si l'erreur persiste."; 
        }

  }else{
     echo"Veuillez completer tous les champs ";
 }

}
?>