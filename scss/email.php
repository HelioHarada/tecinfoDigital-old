<?php



    $nome = addslashes($_POST['mensgem']);
    $assunto = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensagem']);
        
        $to ="marketing@tecinfodigtal.com.br";
        $subject = "Contato - Site TecInfo Digital";
        $body = "Nome: ".$nome "\n".
                "Email: ".$email "\n".
                "Mensagem: ".$mensagem;
    
    $header = "From:marketing@tecinfodigital.com.br" . "\n". "Reply-To:".$email "\n".
                "X=Mailer:PHP/".phpversion();
    if(mail($to,$subject,Sbody,$header)){
        echo("Email enviado com sucesso!");
}else{
        echo("O email não pode ser enviado");
        
    }

    ?>
