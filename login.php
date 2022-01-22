<?php session_start(); ?>
<!doctype html>
<html lang="fr">
  <?php
  include 'modules/head.php';

  ?>
  <body class="text-center">
    <form class="form-signin" action="modules/traitementlogin.php" method="post" enctype="multipart/form-data">
      <h1 class="h3 mb-3 font-weight-normal">Formulaire de connexion</h1>

      <label for="inputEmail">Adresse Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email"  <?php if(isset($_SESSION['form'])) echo "value=\"".$_SESSION['form']['email']."\""?> required autofocus>

      <label for="inputPassword">Mot de passe</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" <?php if(isset($_SESSION['form'])) echo "value=\"".$_SESSION['form']['password']."\""?> required>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="save" > Se souvenir de moi
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>
</body>
</html>
