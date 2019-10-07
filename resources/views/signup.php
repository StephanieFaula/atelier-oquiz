<?= view("layout.header", ["title" => "Signup"]); ?>

<h1>Signup page</h1>

    <form action="<?php route("signup"); ?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">First name</label>
            <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First name">
            <?php if (!empty($errors['firstname'])) : ?>
                <div class="alert alert-danger"><?= $errors['firstname'] ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last name</label>
            <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last name">
            <?php if (!empty($errors['lastname'])) : ?>
                <div class="alert alert-danger"><?= $errors['lastname'] ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <?php if (!empty($errors['email'])) : ?>
                <div class="alert alert-danger"><?= $errors['email'] ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <?php if (!empty($errors['password'])) : ?>
                <div class="alert alert-danger"><?= $errors['password'] ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" name="passwordBis" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?= view("layout.footer"); ?>