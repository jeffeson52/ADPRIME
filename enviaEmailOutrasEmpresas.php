<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['nome']);
    $dataAniversario = addslashes($_POST['dataAniversario']) ;
    $rg = addslashes($_POST['rg']);
    $cpf = addslashes($_POST['cpf']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $celular = addslashes($_POST['celular']);
    $endereco = addslashes($_POST['endereco']);
    $Nresidencia = addslashes($_POST['Nresidencia']);
    $cep = addslashes($_POST['cep']);
    $pais = addslashes($_POST['pais']);
    $estado = addslashes($_POST['estado']);
    $complemento = addslashes($_POST['complemento']);
    $bairro = addslashes($_POST['bairro']);
    $cidade = addslashes($_POST['cidade']);
    $mensagem = addslashes($_POST['mensagem']);
    


    $to = "jeffeson.a.mor2@gmail.com";
    $subject = "Preenchimento de Formulário WSCriptacoin";
    $body = "Nome: ".$nome."\r\n".
            "Data de Aniversário: ".$dataAniversario."\r\n".
            "RG: ".$rg."\r\n".
            "CPF: ".$cpf."\r\n".
            "Email: ".$email."\r\n".
            "telefone: ".$telefone."\r\n".
            "celular: ".$celular."\r\n".
            "endereco: ".$endereco."\r\n".
            "Nresidencia: ".$Nresidencia."\r\n".
            "cep: ".$cep."\r\n".
            "pais: ".$pais."\n".
            "estado: ".$estado."\r\n".
            "complemento: ".$complemento."\r\n".
            "bairro: ".$bairro."\r\n".
            "cidade: ".$cidade."\r\n".
            "mensagem: ".$mensagem."\r\n";
            

    $header = "From: jeffeson.a.mor5@gmail.com"."\r\n"
            ."Replay-To: ".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)){
    echo("Email enviado com Sucesso");
}else{
    echo("Email não pode ser enviado");
}
}

?>

