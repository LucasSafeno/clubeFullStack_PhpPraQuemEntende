<?php
require "../../../bootstrap.php";

//dd($_SERVER['REQUEST_METHOD']);

if (isEmpty()) {
    flash('message', 'Preencha todos os campos');

    return redirect("create_user");
}

$validate = validate([
    'firstName' => 's',
    'lastName' => 's',
    'email' => 'e',
    'password' => 's',
]);



$cadastrado = create('users', (array) $validate);

dd($cadastrado);





// $cadastrado = create('users', $validate);



// if ($cadastrado) {
//     flash('message', 'Cadastrado com sucesso', 'success');
//     return redirect('create_user');
// }

// flash('message', 'Erro ao cadastrar usuário');

// redirect('create_user');