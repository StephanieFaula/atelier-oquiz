
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- Reset CSS -->
        <link href="<?= url("css/reset.css"); ?>"  rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Really beautiful CSS -->
        <link href="<?= url("css/style.css"); ?>"  rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

        <title><?= $title; ?> | O'Quiz</title>
    </head>
    <body>
    <main>
        <header>

            <a href="#"><h1>O'Quiz</h1></a>

                <!-- Liens de nav -->
                <nav class="navbar navbar-light bg-light navbar-expand-lg d-flex justify-content-end">
                <a class="navbar-brand mb-0 h1" href="<?= route("home") ?>">Accueil</a>
                <a class="navbar-brand mb-0 h1" href="<?= route("tags") ?>">Sujets des Quizs</a>
                <a class="navbar-brand" href="<?= route("signin") ?>">Mon compte</a>
                <a class="navbar-brand" href="<?= route("signup") ?>">M'inscrire</a>
                <a class="navbar-brand" href="#">Déconnexion</a>
                </nav>

        </header>
