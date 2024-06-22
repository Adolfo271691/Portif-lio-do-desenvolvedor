<?php
    $nome = addslashes($_POST ['nome']);
    $email = addslashes($_POST['email']);
    $numero = addslashes($_POST['numero']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "adolfojunior544@gmail.com";
    $assunto = "programar encontro - portifólio";

    $corpo = "nome: ".$nome."\n"."Email: ".$email."\n"."Numero de telefone: ".$numero."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: cabeiaadolfo6@gmail.com"."\n"."reply-to: ".$email."\n"."X=Mailer: PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso");   
    }else{
        echo("Houve um erro ao enviar o email");
    }
?>