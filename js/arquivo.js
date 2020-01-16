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

    } else {

        alert('Mensagem enviada com sucesso');
        location.reload();
    }
}

jQuery(document).ready(function() {
    // Exibe ou oculta o botão
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 3600) {
            jQuery('.voltar-ao-topo').fadeIn(0);
        } else {
            jQuery('.voltar-ao-topo').fadeOut(0);
        }
    });

    // Faz animação para subir
    jQuery('.voltar-ao-topo').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, 800);
    })
});




// Check javascript has loaded
$(document).ready(function(){
 
    // Click event of the showPassword button
    $('#showPassword').on('click', function(){
       
      // Get the password field
      var passwordField = $('#password');
   
      // Get the current type of the password field will be password or text
      var passwordFieldType = passwordField.attr('type');
   
      // Check to see if the type is a password field
      if(passwordFieldType == 'password')
      {
          // Change the password field to text
          passwordField.attr('type', 'text');
   
          // Change the Text on the show password button to Hide
          $(this).val('Hide');
      } else {
          // If the password field type is not a password field then set it to password
          passwordField.attr('type', 'password');
   
          // Change the value of the show password button to Show
          $(this).val('Show');
      }
    });
  });