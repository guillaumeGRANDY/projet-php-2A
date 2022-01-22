<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <?php
    include 'modules/head.php';
    include 'modules/Form.php';
    ?>
  </head>
  <body class="bg-light">
    <header>
    <?php include 'modules/navbar.php'; ?>
    </header>
    <div class="container">
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark bg-6">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Inscrivez-vous sur notre site</h1>
        <p class="lead my-3">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Excepturi itaque autem ducimus dolores ab consectetur, unde distinctio sed nulla modi! Maxime labore debitis quam illo omnis non animi obcaecati molestiae.</p>
      </div>
    </div>
  </div>
    <main>
      <div class="container">
        <div class="row">
          <aside class="col-md-4 order-md-2 mb-4 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
              <h4 class="font-italic">Contact-us</h4>
              <p class="mb-0">
                  <ul>
                    <li>Tel : 000000</li>
                    <li>Address : 12 rue de la république</li>
                    <li>01000 BOURG EN BRESSE</li>
                  </ul>
              </p>
            </div>
          </aside><!-- /.blog-sidebar -->
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Formulaire d'inscription</h4>
            <?php $form=new Form("modules/traitementInscritpion.php","post","multipart/form-data");?>
              <fieldset>
                <legend>Vos informations personnelles</legend>
                <div class="row">

                  <div class="col-md-6 mb-3">
                      <?= $form->input('firstname') ?>
                  </div>
                  <div class="col-md-6 mb-3">
                      <?= $form->input('lastname') ?>
                  </div>
                    <div class="col-md-12 mb-3">
                        <?= $form->input('password',['type' =>'password']) ?>
                    </div>
                </div>

                <div class="mb-3">
                  <label for="email">Adresse email</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">@</span>
                    </div>
                      <?= $form->input('email',['type' =>'email']) ?>
                  </div>
                </div>
              </fieldset>
              
              <fieldset>
                <legend>Vos passions</legend>
                <div class="custom-control custom-checkbox">
                    <?= $form->input('ski',['type' =>'checkbox']) ?>
                </div>
                <div class="custom-control custom-checkbox">
                    <?= $form->input('roller',['type' =>'checkbox']) ?>
                </div>
                <div class="custom-control custom-checkbox">
                    <?= $form->input('foot',['type' =>'checkbox']) ?>
                </div>
                <div class="custom-control custom-checkbox">
                    <?= $form->input('basket',['type' =>'checkbox']) ?>
                </div>
              </fieldset>
              <fieldset>
                <legend>Votre avatar</legend>
                <div class="mb-3">
                <?= $form->input('avatar',['type' =>'file']) ?>
              </div>
              </fieldset>
              <button class="btn btn-primary btn-lg btn-block" type="submit">Inscription</button>
            </form>
          </div>
        </div>
        
      </div>

    </main>
    
<?php include 'modules/footer.php'; ?>
  
</body>
</html>
