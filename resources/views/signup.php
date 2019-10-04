<?= view("layout.header", ["title" => "Signup"]); ?>

<h1>Signup page</h1>

    <form action="<?php route("signup"); ?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">First name</label>
            <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last name</label>
            <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="psw" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" name="psw2" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <?php if (!empty($errors)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach ($errors as $error) : ?>
                <?= $error; ?> <br>
            
        <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?= view("layout.footer"); ?>