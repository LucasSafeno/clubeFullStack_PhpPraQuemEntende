<h2>Contato</h2>

<?= get('message') ?>

<form action="/pages/forms/contato.php" method="post" role="form">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" placeholder="E-mail" class="form-control">
    </div>

    <div class="form-group">
        <label for="assunto">Subject</label>
        <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea cols="30" rows="10" name="message" id="message" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>