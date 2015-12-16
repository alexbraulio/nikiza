<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$emailreferente = 'SITE NIKIZA';
$emailremetente    = trim($_POST['emailremetente']);
$emaildestinatario = 'contato@nikiza.xyz','nikizadistribuidora@gma'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web

$assunto          = 'NIKIZA MAIS UM CLIENTE  SE CADASTROU';

 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>FORMULARIO PREENCHIDO NO SITE WWW.NIKIZA.XYZ</P>

<p><b>E-Mail:</b> '.$emailreferente.'

<p><b>Assunto:</b> '.$assunto.'
<p><b>Mensagem:</b> '.$emailremetente.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 
 
 if($envio)
echo "<script>location.href='index.html'</script>"; // Página que será redirecionada

?>