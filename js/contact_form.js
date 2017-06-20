$('#contact-form').submit(function (e) {
 $.ajax({
   type: 'post',
   data: $('form').serialize(),
   url: '/web/contato.php',
   success: function(data)
   {
      alert('Mensagem enviada!');
    // alert(data);
   },
   error: function(data){
      alert('Erro ao enviar a mensagem');
   }});
 e.preventDefault();
});
