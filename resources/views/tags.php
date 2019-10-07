<?= view("layout.header", ["title" => "Sujets"]); ?>

<div class="content">

    <?php foreach ($tags as $tag): ?>


    <?php // dd($tag->quizzesHasTags); ?>
        <div class="card card-tag" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= $tag->image; ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?= route("quizByTag", ["id" => $tag->id]);?>"><?= $tag->name; ?></a></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>




<?= view("layout.footer"); ?>