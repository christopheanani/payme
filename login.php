<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="center">
        <input type="checkbox" id="show">
        <label for="show" class="show-btn">Se connecter</label>
        <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
                Connexion
            </div>
            <form action="loginConfig.php" method="POST">
                <div class="data">
                    <label>Votre nom complet</label>
                    <input type="text" name="fullname" required>
                </div>
                <div class="data">
                    <label>Numero d'identification</label>
                    <input type="text" name="code" required>
                </div>
                <div class="btn">
                    <div class="inner"></div>
                    <!-- <button type="submit">Se connecter</button> -->
                    <input type="submit" name="submit" value="Se connecter">
                </div>
                
            </form>
        </div>
    </div>
</body>

</html>