
//formulario contato pagina home

function validar() {
    var nome = formuser.nome.value;
    var email = formuser.email.value;
    var assunto = formuser.assunto.value;
    var msg = formuser.msg.value;

    if (nome == "") {
        alert('Preencha o campo Nome.');
        formuser.email.focus();
        return false;
    }

    if (email == "" || email.indexOf('@') == -1) {
        alert('Preencha o campo E-mail.');
        formuser.email.focus();
        return false;
    }

    if (assunto == "") {
        alert('Preencha o campo Assunto.');
        formuser.assunto.focus();
        return false;

    }

    if (msg == "") {
        alert('Preencha o campo Mensagem.');
        formuser.msg.focus();
        return false;

    }

    else {

        alert('Mensagem enviada com sucesso');
        location.reload();
    }
}