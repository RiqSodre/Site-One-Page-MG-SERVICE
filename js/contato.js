$('#input__nome').on('keydown', function(event){
  var aceptChars = [8,9,16,17,20,35,36,37,38,39,40,45,46];
  for(var i = 65; i <= 90; i++){
    aceptChars.push(i);
  }
  if(jQuery.inArray(event.which, aceptChars) === -1){
    if(event.which != 32 || $(input__nome).val().length<=0)
    {
      event.preventDefault();
    }
  }
});

$('#input__telefone').mask('(00) 0000-00009');

$('#input__telefone').blur(function(event) {
   if($(this).val().length == 15){
      $('#input__telefone').mask('(00) 00000-0009');
      $('#input__telefonetipo').val('Celular');
        } else if($(this).val().length == 14){
        $('#input__telefone').mask('(00) 0000-00009');
        $('#input__telefonetipo').val('Residencial');
   }
});

$('#input__mensagem').on('input',function(event){
        var char = 400-$(this).val().length;
        $('.char__restantes').text(char);
});

$().ready(function(){
  $('#form__contato').validate(
    {
          errorClass:'label__error',
          errorElement:'label',
          errorPlacement: function(error, element){
          $(element).next('div').html(error);
        },
        success: function (element){   
          $(element).next('div').html('');
        },
        submitHandler: function(form){
            $.ajax({
            url: 'php/email.php',
            type: 'POST',
            data: $(form).serialize(),
            success: function(data){
              alert(data);
              limpaForm();
            }
            });     
          return false;
        },
        rules: {
            input__nome:{
                minlength: 3,
                required: true
            },
            input__telefone:{
                minlength: 14,
                required: true
            },
            input__email:{
                email: true
            },
            input__telefonetipo:{
                required: true
            },
            input__assunto:{
                required: true
            },
            input__mensagem:{
                minlength: 10,
                required: true
            }
        },
        messages: {
            input__nome:{
                minlength: "O campo NOME deve conter no minimo 3 letras.",
                required: "O campo NOME é obrigatório."
            },
            input__telefone:{
                minlength: "O campo TELEFONE deve conter no minimo 10 numeros.",
                required: "O campo TELEFONE é obrigatório."
            },
            input__email:{
                email: "Insira um email válido."
            },
            input__telefonetipo:{
                required:"Selecione o tipo do telefone."
            },
            input__assunto:{
                required:"Selecione o motivo do contato."
            },
            input__mensagem:{
                minlength: "O campo MENSAGEM deve conter no mínimo 10 caracteres.",
                required: "O campo MENSAGEM é obrigatório."
            }
        } 
      })
});

function limpaForm() {
    $('#input__nome').val('');
    $('#input__email').val('');
    $('#input__telefone').val('');
    $('#input__telefonetipo').val('');
    $('#input__assunto').val('');
    $('#input__mensagem').val('');
}