<?= view("layout.header", ["title" => "Sujets"]); ?>

<div class="content">

    <?php foreach ($tags->quizzesHasTags as $quiz): ?> 
    
        <div class="card card-tag" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="card-body">
                    <h5 class="card-title"><a href="<?= route("quiz_detail", ["id" => $quiz->id]); ?>"><?= $quiz->title; ?></a></h5>
                    <p class="card-text"><?= $quiz->description; ?></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>




<?= view("layout.footer"); ?>