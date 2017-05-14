 $(function () {
    $('#form').on('submit', function (e) {
        alert("HELLO");
      e.preventDefault();
      $.ajax({
        type: 'post',
        data: $('form').serialize(),
        url: 'cadastro.php',
        success: function (data) {
            $(".control-group").removeClass("success");
            if(data.status == 'success') // Message Sent? Show the 'Thank You' message and hide the form
                $('.loading').fadeIn('slow').html('<font color="green">Mail sent Successfully.</font>').delay(3000).fadeOut('slow');
            else
                $('.loading').fadeIn('slow').html('<font color="red">Mail not sent.</font>').delay(3000).fadeOut('slow');
        }
      });
      return false;
    });
});
