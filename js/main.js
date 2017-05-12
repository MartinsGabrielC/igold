$( '.PricingTitle' ).on('click', function() {

    $('.PricingTitle').removeClass('active');

    $(this).addClass('active');

    var dataTab = $(this).data('tab');

    $.when($( '.PricingPanel' ).fadeOut())
    .done($("#"+dataTab+"").fadeIn());

});

// para o formulÃ¡rio de cadastro
// se um dos radio box Ã© selecionado, alterna entre inputs
$('input[name=tipopessoa]').on('change', function() {

  // recebe o elemento input
  var inputCnpj = "<input type='text' name='cnpj' id='cnpj' placeholder='CNPJ' class='form-control input-lg' required>";
  var inputCpf  = "<input type='text' name='cpf' id='cpf' placeholder='CPF' class='form-control input-lg'  required>";
  var inputRg   = "<input type='text' name='rg' id='rg' placeholder='RG' class='form-control input-lg' required>";

  // se pessoa fisica Ã© marcada, remove o cnpj
  if( $('#pf').is(':checked') ) {
    $('#cnpj').detach();
    $('#inputPessoa').append(inputCpf);
    $('#inputRg').append(inputRg);
    $('#cpf').attr('data-parsley-error-message', 'O campo CPF Ã© obrigatÃ³rio');
    $('#rg').attr('data-parsley-error-message', 'O campo RG Ã© obrigatÃ³rio');

  // se pessoa juridica Ã© marcada, remove o cpf e rg
  } else if( $('#pj').is(':checked') ) {
    $('#cpf').detach();
    $('#rg').detach();
    $('#inputPessoa').append(inputCnpj);
    $('#cnpj').attr('data-parsley-error-message', 'O campo CNPJ Ã© obrigatÃ³rio');
  }

});

// para o formulÃ¡rio de cadastro
// se o checkbox dos termos de contrato
// Ã© marcado, habilita o botÃ£o de submit
$('#term').on('change', function() {

  var submitBtn = $('#submit');

  return (submitBtn.is(':disabled'))? submitBtn.removeAttr('disabled') : submitBtn.attr('disabled','disabled');

});
