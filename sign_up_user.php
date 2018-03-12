<?php
require_once "includes/functions.php";
if (isset($_POST['name'])) {
  // the movie form has been posted : retrieve movie parameters
  $name = escape($_POST['name']);
  $firstName = escape($_POST['firstName']);
  $dayBirth = escape($_POST['dayBirth']);
  $monthBirth = escape($_POST['monthBirth']);
  $yearBirth = escape($_POST['yearBirth']);
  $dateBirth = $yearBirth + "-" + $monthBirth +"-" + "$dayBirth";
  $sex = $_POST['sex'];
  $pcs = $_POST['pcs'];
  $status = $_POST['status'];
  $children = $_POST['children'];
  $situation = $status + " " + $children;
  $mail = escape($_POST['mail']);
  $password = escape($_POST['password']);
  
  // insert movie into BD
  $stmt = getDb()->prepare('insert into participant
  (nom_participant, prenom_participant, mail_participant, mdp_participant, sexe, date_naiss, pcs, situation_familiale)
  values (?, ?, ?, ?, ?, ?, ?, ?)');
  $stmt->execute(array($name, $firstName, $mail, $password, $sex, $dateBirth, $pcs, $situation));
  redirect("index.php");
}
?>

  <!doctype html>
  <html>

  <?php
    $pageTitle = "Inscription - Participant";
    require_once "includes/head.php";
  ?>

    <body>
    <?php require_once "includes/header.php"; ?>
      <div class="container">
          <h2 class="text-center">Inscription participant</h2>
          <div class="well">
            <form class="form-horizontal" role="form" enctype="multipart/form-data" action="sign_up_user.php" method="post">
              <input type="hidden" name="id" value="<?= $id ?>">
              <div class="form-group">
                <label class="col-sm-4 control-label">Nom</label>
                <div class="col-sm-3">
                  <input type="text" name="name" value="<?= $name ?>" class="form-control" placeholder="Entrez votre nom" required autofocus>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Prénom</label>
                <div class="col-sm-3">
                  <input type='text' name="firstName" value ="<?= $firstName ?>" class="form-control" placeholder="Entrez votre prénom" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Date de naissance</label>
                <div class="col-sm-1">
                  <input type='number' name="dayBirth" value ="<?= $dayBirth ?>" class="form-control" placeholder="jj" required>
                </div>
                <label class="col-sm-1 control-label">/</label>
                <div class="col-sm-1">
                  <input type='number' name="monthBirth" value ="<?= $monthBirth ?>" class="form-control" placeholder="mm" required>
                </div>
                <label class="col-sm-1 control-label">/</label>
                <div class="col-sm-2">
                  <input type='number' name="yearBirth" value ="<?= $yearBirth ?>" class="form-control" placeholder="aaaa" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Sexe</label>
                <div class="col-sm-6">
                  <div class="col-sm-3">
                    <input type = "radio" id="F" name="sex" value = "F" required>
                    <label for="F">Féminin</label>
                  </div>
                  <div class="col-sm-3">
                    <input type = "radio" id="M" name="sex" value = "M" required>
                    <label for="M">Masculin</label>
                  </div>
                  <div class="col-sm-5">
                    <input type = "radio" id="N" name="sex" value = "N" required>
                    <label for="N">Ne se prononce pas</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">PCS</label>
                <div class="col-sm-4">
                <select name="pcs" id="pcs" required>
                  <option value="" selected>-- Sélectionnez votre PCS --</option>
                  <option value="Agriculteurs exploitants">Agriculteurs exploitants</option>
                  <option value="Artisans, commerçants et chefs d’entreprise">Artisans, commerçants et chefs d’entreprise</option>
                  <option value="Cadres et professions intellectuelles supérieures">Cadres et professions intellectuelles supérieures</option>
                  <option value="Professions intermédiaires">Professions intermédiaires</option>
                  <option value="Employés">Employés</option>
                  <option value="Ouvriers">Ouvriers</option>
                  <option value="Retraités">Retraités</option>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Situation familiale</label>
                <div class="col-sm-4">
                <select name="status" id="status" required>
                  <option value="" selected>-- Sélectionnez votre situation --</option>
                  <option value="Célibataire">Célibataire</option>
                  <option value="Marié">Marié</option>
                  <option value="Pacsé">Pacsé</option>
                  <option value="Séparé">Séparé</option>
                  <option value="Divorcé">Divorcé</option>
                  <option value="Veuf">Veuf</option>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Avec enfant(s) à charge</label>
                <div class="col-sm-6">
                  <div class="col-sm-3">
                    <input type = "radio" id="Oui" name="children" value = "avec enfant(s) à charge" required>
                    <label for="Oui">Oui</label>
                  </div>
                  <div class="col-sm-3">
                    <input type = "radio" id="Non" name="children" value = "sans enfant à charge" required>
                    <label for="Non">Non</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">E-mail</label>
                <div class="col-sm-4">
                  <input type="text" name="mail" value="<?= $userMail ?>" class="form-control" placeholder="Entrez votre adresse mail" required autofocus>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Mot de passe</label>
                <div class="col-sm-3">
                  <input type="text" name="password" value="<?= $userPassword ?>" class="form-control" placeholder="Entrez votre mot de passe" required autofocus>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Confirmation du mot de passe</label>
                <div class="col-sm-3">
                  <input type="text" name="password" value="<?= $userPassword ?>" class="form-control" placeholder="Confirmez votre mot de passe" required autofocus>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4 col-sm-offset-4">
                  <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-save"></span> S'inscrire</button>
                  <button type="reset" class="btn btn-default">Annuler</button>
                </div> 
              </div>
            </form>
          </div>
      </div>
      <?php require_once "includes/footer.php"; ?>
      <?php require_once "includes/scripts.php"; ?>
    </body>

  </html>