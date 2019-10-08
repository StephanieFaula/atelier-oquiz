<?= view("layout.header", ["title" => "Mon compte"]); ?>

<div class="content-account">

    <h1>Mes identifiants</h1>

    <div>
        <p>Prénom: <?= $connectedUser->firstname;?></p>
    </div>

    <div>
        <p>Nom: <?= $connectedUser->lastname;?></p>
    </div>

    <div>
        <p>Email: <?= $connectedUser->email;?></p>
    </div>

</div>


<?= view("layout.footer"); ?>