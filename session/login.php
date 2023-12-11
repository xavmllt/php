<?php
session_start();
@$login = $_POST['login'];
@$pass = $_POST['pass'];
@$valider = $_POST['valider'];
$erreur = "";
if(isset($valider)){
    if($login == "user" && md5($pass) == "3def184ad8f4755ff269862ea77393dd"){
        $_SESSION["autoriser"] = "oui";
        header("location:session.php");
    }else{
        $erreur = "Mauvais login ou mot de passe";
    };
};
// echo md5("125");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login session php</title>
</head>
<body>
    <form action="" method="post">
        <div class="label">Login</div>
        <input type="text" name="login" value="<?php echo $login ?>">
        <br>
        <div class="label">Mot de passe</div>
        <input type="password" name="pass">
        <br>
        <input type="submit" name="valider">
    </form>

<?php if(!empty($erreur)){?>
    <div id="erreur"><?=$erreur?></div>
    <?php } ?>
</body>
</html>