<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <?php include 'modules/head.php'; ?>
  </head>
  <body class="bg-light">
    <header>
    <?php include 'modules/navbar.php'; ?>
    </header>
    <div class="container">
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark bg-5">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Contactez-nous</h1>
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
            <h4 class="mb-3">Contactez-nous par formulaire</h4>
            <form action="modules/traitementMessage.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">Prénom</label>
                  <input type="text" class="form-control" id="firstName" name="firstName">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Nom</label>
                  <input type="text" class="form-control" id="lastName"  name="lastName">
                </div>
              </div>

              <div class="mb-3">
                <label for="username">Adresse email</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="email" class="form-control" id="username" name="email">
                </div>
              </div>

              <div class="mb-3">
                <label for="content">Votre message</label>
                <textarea class="form-control" id="content" cols="30" rows="10" name="text"></textarea>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Envoyer le message</button>
            </form>
          </div>
        </div>
        
      </div>

    </main>
    
<?php include 'modules/footer.php'; ?>
  
</body>
</html>
