<?php
require_once "includes/functions.php";
session_start();

if (!empty($_POST['login']) and !empty($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $stmt1 = getDb()->prepare('select * from participant where mail_participant=:mail and mdp_participant=:mdp'); //prépare la requête sql à être exécutée
    $stmt2 = getDb() -> prepare('select * from experimentateur where mail_experimentateur=:mail and mdp_experimentateur=:mdp');
    $stmt1->execute(array(':mail' => $login, ':mdp' => $password));
    $stmt2 -> execute(array(':mail' => $login, ':mdp' => $password)); //exécute la requête sql en remplaçant les marqueurs par les bonnes valeurs
    if ($stmt1->rowCount() == 1 or $stmt2->rowCount() == 1) //compte le nombre de lignes renvoyées après exécution de la requête sql
    {
        // Authentication successful
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        redirect("index.php");
    }
    else {
        $error = "Utilisateur non reconnu";
    }
}
?>

<!doctype html>
<html>

<?php 
$pageTitle = "Connexion";
require_once "includes/head.php";
?>

<body>
    <?php require_once "includes/header.php"; ?>
    <div class="container">
        <h2 class="text-center"><?= $pageTitle ?></h2>

        <?php if (isset($error)) { ?>
            <div class="alert alert-danger">
                <strong>Erreur !</strong> <?= $error ?>
            </div>
        <?php } ?>

        <div class="well">
            <form class="form-signin form-horizontal" role="form" action="login.php" method="post">
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <input type="text" name="login" class="form-control" placeholder="Entrez votre login" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Se connecter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/scripts.php"; ?>
</body>

</html>