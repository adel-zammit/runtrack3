<?php

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
           <title>Materialize</title>
</head>

<header class="red">
    <nav class="nav">
            <a href="index.php">La Plateforme_</a>
            <ul id="nav" >
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
    </nav>
</header>

<body>
<main>
    <section>
            <form class="form">
                        <label>
                            <input name="group1" type="radio" >
                            <span>Monsieur</span>
                        </label>
                    

                    
                        <label>
                            <input name="group1" type="radio">
                            <span>Madame</span>
                        </label>

                    <div class="input">
                        <input id="first_name" type="text">
                        <label for="first_name">First Name</label>

                    <div class="input">
                        <input id="last_name" type="text" >
                        <label for="last_name">Last Name</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="adress" type="text" class="validate">
                        <label for="adress">Adress</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>

                    <div class="input">
                        <input id="passwordConfirm" type="password" class="validate">
                        <label for="passwordConfirm">Password Confirmation</label>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>
                                <input id="indeterminate-checkbox" type="checkbox"/>
                                <span>Informatique</span>
                            </label>
                        </div>

                        <div class="col">
                            <label>
                                <input id="indeterminate-checkbox" type="checkbox"/>
                                <span>Voyages</span>
                            </label>
                        </div>

                        <div class="col">
                            <label>
                                <input id="indeterminate-checkbox" type="checkbox"/>
                                <span>Sport</span>
                            </label>
                        </div>

                        <div class="col">
                            <label>
                                <input id="indeterminate-checkbox" type="checkbox"/>
                                <span>Lecture</span>
                            </label>
                        </div>
                    </div>
                </div>

                <input type="button" value="Envoyer">
            </form>
    </section>
</main>

</body>

</footer>
</html>