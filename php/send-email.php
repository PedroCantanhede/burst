<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $projeto = $_POST["projeto"];
    $mensagem = $_POST["mensagem"];

    // Defina o endereço de e-mail do destinatário
    $para = "";

    // Defina o assunto do e-mail
    $assunto = "Novo pedido de orçamento de $nome";

    // Componha a mensagem de e-mail
    $mensagem = "Nome: $nome\n";
    $mensagem .= "E-mail: $email\n";
    $mensagem .= "Projeto: $projeto\n";
    $mensagem .= "Mensagem:\n$mensagem";

    // Defina cabeçalhos adicionais
    $cabeçalhos = "De: $email" . "\r\n" .
                  "Responder a: $email" . "\r\n" .
                  "X-Mailer: PHP/" . phpversion();

    // Envie o e-mail
    mail($para, $assunto, $mensagem, $cabeçalhos);

    // Redirecione de volta para o formulário com uma mensagem de sucesso
    header("Location: ../index.php?success=true");
} else {
    // Redirecione de volta para o formulário com uma mensagem de erro
    header("Location: ../index.php?error=true");
}
?>
