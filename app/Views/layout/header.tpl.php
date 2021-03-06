<?php global $router; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://kit.fontawesome.com/663b1e4bdb.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <title>CYNES</title>
</head> 
<body>
    <header id="header" role="banner">
        <div class="menu-wrap">
            <input type="checkbox" onchange="changeColorToggle(this) "class="toggler">
            <div class="hamburger">
                <div></div>
            </div>
            <div class="menu">
                <div>
                    <div>
                        <ul>
			                <li><a href="<?= $router->generate('home'); ?>">Accueil</a></li>
                            <li><a href="<?= $router->generate('category-list'); ?>">Notre Savoir-faire</a></li>
                            <li><a href="<?= $router->generate('projet-list'); ?>">Nos réalisations</a></li>
                            <li><a href="<?= $router->generate('team'); ?>">L' equipe</a></li>
                            <li><a href="<?= $router->generate('contact'); ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?= $router->generate('home'); ?>"><img class="logo-cynes" src="/assets/img/CYNES-logo-noir.png" alt="Logo-Cynes"></a>
    </header>
