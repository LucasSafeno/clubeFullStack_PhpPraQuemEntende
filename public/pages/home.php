<a href="?page=create_user" class="btn btn-success">Cadastrar Usuário</a>

<h2>Página Inicial</h2>


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $users = all('users');
        foreach ($users as $user):
            ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->firstName ?></td>
                <td><?= $user->lastName ?></td>
                <th><?= $user->email ?></th>
                <td>
                    <a href="?page=edit_user&id=<?= $user->id ?>" class="btn btn-success">Edit</a>
                </td>
                <td>
                    <a href="?page=delete_user&id<?= $user->id ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>