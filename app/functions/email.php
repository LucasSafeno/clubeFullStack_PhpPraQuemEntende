<?php

function send(array $data)
{
    $email = new PHPMailer\PHPMailer\PHPMailer();
    $email->CharSet = "UTF-8";
    $email->SMTPSecure = "plain"; // ssl
    $email->isSMTP();
    $email->Host = 'sandbox.smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = "e7aa95759cfe1b";
    $email->Password = "072d1bc7c8b87e";
    $email->setFrom('');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['message'];
    $email->Subject = $data['subject'];
    $email->AltBody = 'Para ver esse email tenha certeza de esta vendo em um programa que aceita ver HTML';
    $email->MsgHtml($data['mensagem']);


    return $email->send();


}


?>