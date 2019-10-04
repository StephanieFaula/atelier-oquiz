<?= view("layout.header", ["title" => $quiz->title]); ?>

    <div class="header-quiz">
        <h1><?= $quiz->title; ?></h1>
        <h2><?= $quiz->description; ?></h2>
        <h3>By <?= $quiz->author->firstname; ?> <?= $quiz->author->lastname; ?></h3>
    </div>

    <div class="content">
        <?php //dd($quiz);?>
    <?php foreach ($quiz->questions as $question): ?>
    <?php // dd($question); ?>

    
    
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?= $question->question; ?></h5>
                <p class="card-text"><?= $question->anecdote; ?></p>
                <p><?= $question->created_at; ?></p>
            </div>
        </div>
    
    
        
        
        
    <?php endforeach; ?>
    </div>

<?= view("layout.footer"); ?>