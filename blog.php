<?php 
  session_start();
  include 'modules/openDatabase.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <?php include 'modules/head.php'; ?>
  </head>
  <body>
    <header>
      <?php include 'modules/navbar.php'; ?>
    </header>

    <?php
     if(isset($_GET['article'])):

      $id=$_GET['article'];
      $stmt=$data->prepare("SELECT title,shortDesc,text,picture FROM blogs WHERE id=:id");
      $stmt->execute(
      [
          'id'=>$_GET['article']
      ]);
      $value = $stmt->fetch();

          $picture=$value['picture']??'no-value';
          $title=$value['title']??'no-value';
          $shortDesc=$value['shortDesc']??'no-value';
          $text=$value['text']??'no-value';

      ?>
        <div class="container">
            <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark" style="background-image:url(/img/bg/<?= $picture ?>); background-size:cover; height:400px;">
                <div class="col-md-6 px-0">
                  <h1 class="display-4 font-italic"> <?= $title ?> </h1>
                  <p class="lead my-3"> <?= $shortDesc?></p>
                  <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Bonne lecture <br>...</a></p>
              </div>
          </div>
        </div>
        <main role="main" class="container">
            <div class="row">
                <div class="col-md-133 blog-main">
                <p>  <?= $text ?> <p>
                    <div class="p-4">
                        <h4 class="font-italic">Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </aside><!-- /.blog-sidebar -->
            </div><!-- /.row -->
        </main>

     <?php else: ?>
        <main role="main">

          <section class="jumbotron text-center bg-3">
            <div class="container">
              <h1>Album example</h1>
              <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
              <p>
                <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
              </p>
            </div>
          </section>

          <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">

            <?php
              $i=0;
              foreach($data->query("SELECT * FROM blogs") as $fichier) {
                  $i = $i + 1;
             ?>
                  <div class="col-md-4  ">
                    <div class="card mb-4 shadow-sm">
                      <img class="bd-placeholder-img card-img-top left" style="width:100%; height:225px;" src="/img/bg/<?=$fichier['picture'] ?>">
                      <div class="card-body">
                        <p class="card-text " style="font-weight:bold;"> <?=$fichier['title'] ?></p>
                        <p class="card-text" style="height:100px"> <?= $fichier['shortDesc']?></p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="blog.php?article= <?=$i?> ">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Lire</button>
                            </a>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Editer</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
             <?php } ?>

        </div>
      </div>
    </div>
  </div>

</main>

<?php
endif;
include 'modules/footer.php'; ?>
</body>
</html>
