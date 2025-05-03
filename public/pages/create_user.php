<?= get('message') ?>

<h2 class="text-center">Register new user</h2>


<form action="/pages/forms/create_user.php" method="POST" role="form">
    <div class="form-group">
        <label for="firstName">First name</label>
        <input type="text" name="firstName" id="firstName" class="form-control">
    </div>

    <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="passowrd" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
    <a href="/" class="btn btn-info">Back</a>

</form>