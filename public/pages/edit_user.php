<?= get('message') ?>
<?php

$user = find('users', 'id', $_GET['id']);

//dd($user);
?>

<h2 class="text-center">Edit user</h2>

<form action="/pages/forms/update_user.php" method="POST" role="form">
    <div class="form-group">
        <label for="firstName">First name</label>
        <input type="text" name="firstName" id="firstName" class="form-control" value="<?= $user->firstName ?>">
    </div>

    <input type="hidden" name="id" value="<?= $user->id ?>">

    <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName" class="form-control" value="<?= $user->lastName ?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?= $user->email ?>">
    </div>


    <button type="submit" class="btn btn-primary">Edit User</button>

</form>