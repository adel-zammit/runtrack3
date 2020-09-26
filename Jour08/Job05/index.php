<?php

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
           <title>Materialize</title>
</head>

<header>
  <nav class="purple">
    <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">La Plateforme_</a>
            <ul  id="nav-mobile" class="right hide-on-med-and-down" >
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
    </nav>
</div>
</header>

<body>
<main>

<section>
<div class="row" style="height: 100px;">
    <div class="col s12 m5">
      <div class="card-panel purple lighten-4" style="width: 200px;" >
        <span class="white-text">I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
        </span>
      </div>
    </div>
  </div>

<div class="row" style="width: 500px;">
    <div class="col s12 m6">
      <div class="card-panel purple lighten-4" style="height: 300px;">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
</section>


    <section>

    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input class="active" placeholder="" id="first_name" type="text" >
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
        </div>
      </div>
    </form>
  </div>

</div>

    </section>
</main>

</body>
<footer class="">

<ul class="purple" class >
                <li><i class="material-icons">home</i><a href="index.php">Accueil</a></li>
                <li><i class="material-icons">group_add</i><a href="index.php">Inscription</a></li>
                <li><i class="material-icons">settings_power</i><a href="index.php">Connexion</a></li>
                <li><i class="material-icons">search</i><a href="index.php">Rechercher</a></li>
            </ul>
</footer>
</html>