<?php
require "../../../bootstrap.php";

//dd($_SERVER['REQUEST_METHOD']);

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isEmpty()) {
    flash('message', 'Preencha todos os campos');

    return redirect("/edit_user&id={$id}");
}

$validate = validate([
    'firstName' => 's',
    'lastName' => 's',
    'email' => 'e',
]);



$atualizado = update('users', (array) $validate, ['id', $id]);

//dd($atualizado);

if ($atualizado) {
    flash('message', 'Atualizado com sucesso', 'success');
    return redirect('/edit_user&id=' . $id);
}

flash('message', 'Erro ao atualizar usuário');

redirect('/edit_user&id={$id}');