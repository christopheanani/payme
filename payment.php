<?php
include 'config.php';

if(isset ($_POST ['society'], $_POST['code'], $_POST['moyen'], $_POST['montant'])){
  if(!empty($_POST['society']) AND !empty($_POST['code']) AND !empty($_POST['moyen']) AND !empty($_POST['montant']) ){
    $society= htmlspecialchars($_POST['society']);
    $code= htmlspecialchars($_POST['code']);
    $moyen= htmlspecialchars($_POST['moyen']);
    $montant= htmlspecialchars($_POST['montant']);

    $insert = $conn->prepare("INSERT INTO payment(society, `code`, `montant`) VALUES(:society,:code,:montant,:montant)");

    $data = [
      "society"=>$society,
      "code"=>$code,
      "moyen"=>$moyen,
      "montant"=>$montant
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
    <title>Payment Checkout Form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="css/payment.css">
</head>

<body>

    <div class="wrapper">
        <div class="payment">
            <div class="payment-logo">
                <p>p</p>
            </div>


            <h2>Payment Gateway</h2>
            <div class="form">
                <div class="card space icon-relative">
                    <label class="label">Société:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="ole" name="society">Olé</option>
                        <option value="tito" name="society">Tito</option>
                    </select>
                </div>

                <div class="card space icon-relative">
                    <label class="label">Numéro identification:</label>
                    <input type="text" class="input" name="code"  placeholder="Card Number">
                    <i class="far fa-credit-card"></i>
                </div>

                <div class="card space icon-relative">
                    <label class="label">Moyen de paiement:</label>
                    <select class="form-select" aria-label="Default select example">
                    <option value="tmoney" name="moyen">Tmoney</option>
                        <option value="flooz" name="moyen">Flooz</option>
                        <option value="card" name="moyen">Carte de crédit</option>
                    </select>
                </div>
                <div class="card-item icon-relative">
                    <label class="label">Montant:</label>
                    <input type="number" class="input" name="montant" placeholder="000">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="btn">
                    <button type="submit">Payer</button>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>

</html>