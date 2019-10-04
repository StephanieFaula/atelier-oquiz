<?= view("layout.header", ["title" => "Accueil"]); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-4">Bienvenue sur O'Quiz</h2>
        <p class="lead">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </p>
    </div>
</div>

<div class="content">
    <?php foreach($quizzes as $quiz) : ?>
    
        <div class="card">
            <div class="card-header">
                <h3><a href="<?=  route("quiz_detail", ["id" => $quiz->id]); ?>"><?= htmlentities($quiz->title); ?></a></h3>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= htmlentities($quiz->description); ?></h5>
                <p class="card-text"><?= htmlentities($quiz->author->firstname); ?> <?= htmlentities($quiz->author->lastname); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= view("layout.footer"); ?>
