<?php
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$deletado = delete('users', 'id', $id);


if ($deletedo) {
    return redirectToHome();
}


flash('message', ' Erro ao deletar');
redirectToHome();

?>

