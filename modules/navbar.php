<?php 
include 'openDatabase.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
  <div class="container">
    <a class="navbar-brand" href="/">My Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/presentation.php">Présentation</a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="/contact.php">Contactez-nous</a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="/inscription.php">Inscription</a>
        </li>
          <li class="nav-item">
              <a class="nav-link" href="/creationBlog.php">Nouveau Blog</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/blog.php" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
              <div class="dropdown-menu" aria-labelledby="dropdown07">
                  <a class="dropdown-item" href="blog.php" style="background-color: #C1C1C1">Tous mes articles</a>

          <?php
            $stmt = $data->query("SELECT title,id FROM blogs ORDER BY id DESC LIMIT 5");
            $articles = $stmt->fetchAll();

            foreach($articles as $value)
            {
              echo "<a class=\"dropdown-item\" href=\"blog.php?article=".$value['id']."\">".$value['title']."</a>";
            }
            ?>
            </div>
          </li>

          <?php
          if(isset($_SESSION['admin']))
          {
          ?>
            <li class="nav-item">
            <a class="nav-link" href="#"> Bonjour <?php if($_SESSION['admin']) {echo "administrateur";} else{ echo $_SESSION['name'];}  ?></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="modules/logout.php">Logout</a>
            </li>
          <?php
          }

          elseif(isset($_SESSION['admin'])==false)
          {
          ?>
            <li class="nav-item">
            <a class="nav-link" href="/login.php">Login</a>
            </li>
          <?php
          }
          ?>
            <li class="nav-item">
              <a class="nav-link" href="modules/modif.php">modif</a>
          </li>
      </ul>
    </div>
  </div>
</nav>