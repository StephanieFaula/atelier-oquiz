<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- Reset CSS -->
        <link href="./css/reset.css"  rel="stylesheet">
        <!-- Really beautiful CSS -->
        <link href="./css/style.css"  rel="stylesheet">
        <title>O'Quiz</title>
    </head>
    <body>
        <main class="container">
            <nav>
                <ul>
                    <li>
                        <a href="#">
                        <h1>O'Quiz</h1>
                        </a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="#">
                            <i></i>
                            Accueil
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i></i>
                            Mon compte
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i></i>
                            Déconnexion
                        </a>
                    </li>

                </ul>
            </nav>

            <div>
                <h2> Bienvenue sur O'Quiz </h2>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
            </div>

            <div class="row">
                <?php foreach($quizzes as $quiz) : ?>
                <div class="col">
                    <h3><?= $quiz->title; ?></h3>
                    <h5><?= $quiz->description; ?></h5>
                    <p>by author name</p>
                </div>
                <?php endforeach; ?>
            </div>
        </main>
    </body>
</html>