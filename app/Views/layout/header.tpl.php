<!DOCTYPE html>
<html lang="fr" class="nav-is-stuck">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/663b1e4bdb.js" crossorigin="anonymous"></script>
    <title>CYNES</title>
</head>

<body>
    <header id="header" role="banner">
        <div class="menu-wrap">
            <input type="checkbox" onchange="changeZIndexForm(this) "class="toggler">
            <div class="hamburger">
                <div></div>
            </div>
            <div class="menu">
                <div>
                    <div>
                        <ul>
                            <li><a href="<?= $router->generate('expertise'); ?>">Savoir-faire</a></li>
                            <li><a href="<?= $router->generate('realisation'); ?>">Réalisations</a></li>
                            <li><a href="<?= $router->generate('team'); ?>">L' equipe</a></li>
                            <li><a href="<?= $router->generate('contact'); ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?= $router->generate('home'); ?>"><img class="logo-cynes" src="assets/img/Logo + Baseline.png" alt="Logo Cynes"></a>
    </header>
