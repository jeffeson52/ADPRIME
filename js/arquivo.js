function validar() {
    var nome = formuser.nome.value;
    var email = formuser.email.value;
    var assunto = formuser.assunto.value;
    var mensagem = formuser.mensagem.value;

    if(nome==""){
        alert('Preencha o campo nome.');
        formuser.nome.focus();
        return false;

    }

    if(email == "" || email.indexOf('@') == -1 ){
        alert('Preencha o campo E-mail.');
        formuser.email.focus();
        return false;
    }
        
    if(assunto==""){
        alert('Preencha o campo Assunto.');
        formuser.assunto.focus();
        return false;

    }

    if(mensagem==""){
        alert('Preencha o campo Mensagem.');
        formuser.mensagem,focus();
        return false;

    }
}