<?php
include 'config.php';

if(isset ($_POST ['fullname'], $_POST['phone'], $_POST['message'])){
  if(!empty($_POST['fullname']) AND !empty($_POST['phone']) AND !empty($_POST['message']) ){
    $fullname= htmlspecialchars($_POST['fullname']);
    $phone= htmlspecialchars($_POST['phone']);
    $message= htmlspecialchars($_POST['message']);

    $insert = $conn->prepare("INSERT INTO messages(fullname, `phone`, `message`) VALUES(:fullname,:phone,:message)");

    $data = [
      "fullname"=>$fullname,
      "phone"=>$phone,
      "message"=>$message
    ];

    $insert->execute($data);
  }else{
    $error = "Veuiller remplire les champs.";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message</title>
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <div class="wrapper">
    <header>Envoyer un Message</header>
    <p style="color: red;"><?php if(isset($error)){ echo $error;}?></p>
    <form action="" method="POST">

      <div class="dbl-field">

        <div class="field">
          <input type="text" name="fullname" placeholder="Entrer votre nom complet">
          <i class='fas fa-user'></i>
        </div>

        <div class="field">
          <input type="number" name="phone" placeholder="Entrer votre numero">
          <i class='fas fa-envelope'></i>
        </div>

      </div>

      <div class="message">
        <textarea placeholder="Entrer votre message" name="message"></textarea>
        <i class="material-icons"></i>
      </div>

      <div class="button-area">
        <button type="submit">Envoyer Message</button>
        <span></span>
      </div>

    </form>
  </div>

  <script src="js/script.js"></script>

</body>

</html>