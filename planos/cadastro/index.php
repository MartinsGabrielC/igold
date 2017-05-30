
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Gold-Tech</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="../../css/bootstrap.css" rel="stylesheet">

<!--============== ICON FONT FONT-AWESOME =================-->

<link href="../../css/font-awesome.css" rel="stylesheet">

<!--==============MAIN CSS FOR HOSTING PAGE =================-->

<link href="../../css/style.css" rel="stylesheet" media="all">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!--==============Mordernizr =================-->

<script src="../../js/modernizr.js"></script>

<!--===================FLEX SLIDER=======================-->

<link rel="stylesheet" href="../../css/flexslider.css" />
<script src="../../js/jquery.min.js"></script>
<script src="../../js/jquery.flexslider.js"></script>
<script type="text/javascript">
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      useCSS: Modernizr.touch
    });
  });
</script>
    <!-- google analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-65655318-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- google analytics -->

<!--==============CONTACT FORM=================-->
<script src="../../js/contact_form.js"></script>
</head>
<body id="home" data-spy="scroll" data-target=".navbar-collapse" data-offset="100">

<!--==============Logo & Menu Bar=================-->


<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../../img/logo.png" alt="logo" class="img-responsive"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="nav-main">
            <ul class="nav navbar-nav">
                <li><a href="#" class="scroll">GOLD</a></li>
                <li><a href="../../#igold" class="scroll">IGOLD</a></li>
                <li><a href="../../#planos" class="scroll">PLANOS</a></li>
                <li><a href="../../#equipamentos" class="scroll">EQUIPAMENTOS</a></li>
                <li><a href="../../#faq" class="scroll">FAQ</a></li>
                <li><a href="#contato" id="cttScroll" class="scroll">CONTATO</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Sign In</button>
                </form>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!--============== Formulário ==============-->

  <section class="Subscribe">
      <h1 class="text-center">INTENÇÃO DE COMPRA</h1>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-push-2">
              <form method="post" id="form" data-parsley-validate>
              <div class="form-group">
                <input type="hidden" name="plano" value="<?php echo $_GET['plan']; ?>">
              </div>
            <div class="form-group">
              <input type="text" name="nome" placeholder="Nome completo" class="form-control input-lg" data-required-message="O campo Nome é obrigatório" required>
            </div>
            <div class="form-group">
              <input type="text" name="tel" id="tel" placeholder="Telefone" class="form-control input-lg" data-required-message="O campo Telefone é obrigatório" required>
            </div>
            <div class="form-group">
              <input type="text" name="cel" placeholder="Celular" class="form-control input-lg">
            </div>
            <div class="form-group">
              <input type="email" name="email" placeholder="E-mail" class="form-control input-lg" data-required-message="O campo E-mail é obrigatório" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-lg-push-2">
            <button class="btn btn-lg btn-block btn-primary" id="submit">Enviar</button>
          </div>
        </div>
      </div>
    </form>
  </section>

<!--============== Newsletter ==============-->

  <section class="Newsletter" id="newsletter">
    <div class="container">
      <div class="row">
        <h1 class="title text-center" style="color: #f0f5fe;">Newsletter</h1>
        <h3 class="text-center" style="color: #f0f5fe;">Fique informado sobre nossas novidades</h3>
        <form action="/newsletter" method="post">
          <div class="form-group">
            <input type="text" name="email" placeholder="Digite seu e-mail" class="form-control input-lg">
          </div>
          <div class="text-center">
            <button class="btn btn-lg btn-primary" style="background-color: #f0f5fe;color: #0F3068;">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </section>

<!--============== Contato ==============-->

<section class="container Contact" id="contato">
  <div class="row PageHead">
    <div class="col-md-12">
      <h1 class="title text-center">Contato</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="contactInfo">
        <div class="contactInfoItem">
          <h4>Matriz</h4>
          <p>Rua Luigi Greco, 46 - Barra Funda<br>
          São Paulo - SP, CEP: 01135-030
          </p>
        </div>
        <div class="contactInfoItem">
          <p><a href="mailto:&#x69;&#x67;&#x6F;&#x6C;&#x64;&#x40;&#x63;&#x68;&#x61;&#x76;&#x65;&#x73;&#x67;&#x6F;&#x6C;&#x64;&#x2E;&#x63;&#x6F;&#x6D;&#x2E;&#x62;&#x72;">&#x69;&#x67;&#x6F;&#x6C;&#x64;&#x40;&#x63;&#x68;&#x61;&#x76;&#x65;&#x73;&#x67;&#x6F;&#x6C;&#x64;&#x2E;&#x63;&#x6F;&#x6D;&#x2E;&#x62;&#x72;</a></p>
        </div>
        <div class="contactInfoItem">
          <div>(11) 3879-6882</div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
     <ul class="phoneList">
       <li>
         <h4>Sede Jundiaí</h4>
         <p>Av Benedito Quina da Silva, 511 - Jundiai<br> São Paulo - SP CEP: 13212-141<br>
          Tel: (11) 4525-6550
         </p>
       </li>
       <li>
         <h4>Sede Pouso Alegre</h4>
         <p>Av. Pref Olavo Gomes de Oliveira Aeroporto<br>
          Pouso Alegre - MG - CEP: 37550-000<br>
          Tel: (35) 3421-4298
         </p>
       </li>
     </ul>
    </div>
    <div class="col-md-6">
      <form action="" method="post" class="form">
        <div class="form-group">
          <input class="form-control input-lg" type="text" placeholder="Nome" name="name" id="name" required>
        </div>
        <div class="form-group">
          <input class="form-control input-lg" type="email" placeholder="Email" name="email" id="email" required>
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="10" name="message" placeholder="Sua mensagem" id="message" required></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</section>

<!--============== Footer ==============-->

<div class="footer">
  <div class="container">
    <div class="row copyright">
      <p class="text-center">Copyright &copy; 2017. IGold Todos os direitos reservados.</p>
        <p class="text-right">by: <a href="https://github.com/MartinsGabrielC" target="_blank" style="text-decoration: none;">Gabriel Martins</a></p>
    </div>
  </div>
</div>



<!--==============QUERY LIBRARY=================-->

<script src="../../js/jquery.easing.1.2.js"></script>

<!--==============BOOTSTRAP JS=================-->

<script src="../../js/bootstrap.min.js"></script>

<!--==========ONE PAGE SCROLLING SCRIPTS STARTS===============-->
<script>
  $(function() {
    $('.scroll').bind('click',function(event){
          var $anchor2 = $(this).parent();
          var $anchor = $(this);

        $('.nav li').removeClass('active');
          $anchor2.addClass('active');

          var anchorLink = $anchor.attr('href');
          anchorLink = anchorLink.replace('/', '');

          $('html, body').stop().animate({
              scrollTop: $(anchorLink).offset().top - 80
          }, 1500,'easeInOutExpo');
          event.preventDefault();
        });
    });
</script>
<!--=============ONE PAGE SCROLLING SCRIPTS ENDS============-->

<!-- notifications -->
<script type="text/javascript" src="../../js/jquery.noty.packaged.min.js"></script>
<script>
    function generateMsg(type, text) {
        noty({
            text        : text,
            animation   : {
                open: {height: 'toggle'},
                close: {height: 'toggle'},
                easing: 'swing',
                speed: 500
            },
            type        : type,
            dismissQueue: true,
            layout      : 'center',
            theme       : 'bootstrapTheme',
            closeWith   : ['button', 'click'],
            modal       : false
        });
    }
    </script>
<script>
  $(function(){
     var navMain = $("#nav-main");
     navMain.on("click", "a", null, function () {
         navMain.collapse('hide');
     });
 });
</script>

</body>
</html>
