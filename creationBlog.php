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
            <div class="col-md-12 order-md-1">
                <h4 class="mb-3">Créer un blog</h4>
                <?php $form=new Form("modules/newArticle.php","post","multipart/form-data");?>
                    <fieldset>
                        <legend>Votre article</legend>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <?= $form->input('titre') ?>
                            </div>

                            <div class="col-md-12 mb-3">
                                <?= $form->input('petiteDescription',['type' =>'textarea']) ?>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Le contenu</legend>
                        <div class="col-md-12 mb-3">

                            <?= $form->input('contenu',['type' =>'textarea','maxsize'=>1000]) ?>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Votre illustration</legend>
                        <div class="mb-3">
                            <?= $form->input('image',['type' =>'file']) ?>
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

