<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$to = "jpn.agostinho27@gmail.com";
$subject = "Mensagem do site Body Invaders";
$body = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nMensagem:\n$mensagem";

$headers = "From: $email";

if(mail($to, $subject, $body, $headers)){
    echo "Enviado com sucesso!";
} else {
    echo "Erro ao enviar!";
}
?>