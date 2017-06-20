
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>IGOLD</title>
<link rel="shortcut icon" href="img/logoFavIconLow.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!--============== ICON FONT FONT-AWESOME =================-->

<link href="css/font-awesome.css" rel="stylesheet">

<!--==============MAIN CSS FOR HOSTING PAGE =================-->

<link href="css/style.css" rel="stylesheet" media="all">

<!--==============Mordernizr =================-->

<script src="js/modernizr.js"></script>

<!--===================FLEX SLIDER=======================-->

<link rel="stylesheet" href="css/flexslider.css" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      useCSS: Modernizr.touch
    });
  });
</script>
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
     <a class="navbar-brand" href="#"><img src="img/logoNav.png" alt="logo" class="img-responsive"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse" id="nav-main">
      <ul class="nav navbar-nav">
        <li><a href="#" class="scroll">GOLD</a></li>
        <li><a href="#igold" class="scroll">IGOLD</a></li>
        <li><a href="#planos" class="scroll">PLANOS</a></li>
        <li><a href="#equipamentos" class="scroll">EQUIPAMENTOS</a></li>
        <li><a href="#faq" class="scroll">FAQ</a></li>
        <li><a href="#contato" id="cttScroll" class="scroll">CONTATO</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-right" role="form" id="formLogin" method="post" action="web/logar.php" style="margin:8px auto;">
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="senha" placeholder="Senha" required>
            </div>
            <button type="submit" class="btn btn-default">Login</button>
        </form>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>


    <!--==============HEADER =================-->
    <div class="jumbotron masthead">

    <!--============== Slider =================-->

      <div class="flexslider">
        <ul class="slides">
          <li>
            <img src="img/banner1.png" alt="">
          </li>
          <li>
            <img src="img/banner2.png" alt="">
          </li>
          <li>
            <img src="img/banner3.png" alt="">
          </li>
          <li>
            <img src="img/banner4.png" alt="">
          </li>
        </ul>
      </div>
    </div>


  <div class="container">
    <!--============== Sobre a Gold ==============-->

    <section class="About" id="igold">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <article>
            <h1 class="text-center title">GOLD</h1>
            <p>A Gold é a empresa que há 65 anos, vem inovando para oferecer aos seus clientes a melhor parceria, produtos e qualidade.</p>
          </article>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12">
          <article>
            <h1 class="text-center title">O que é o IGold?</h1>
            <p>É um revolucionário programador de chaves, com leitura de senhas via OBD(diagnose), via pinça e solda.
            Também faz clonagem de chaves!</p>
             <h2 class="sub-title"><strong>Benefícios:</strong></h2>
             <ul>
                 <li><p>Muito fácil de usar</p></li>
                 <li><p>Manual no próprio APP</p></li>
                 <li><p>Baixo investimento</p></li>
                 <li><p>As principais cargas do mercado</p></li>
                 <li><p>Não precisa de internet e nem de dados**</p></li>
                 <li><p>Após 3 anos, liberação permanente das cargas***</p></li>
             </ul>
          </article>
        </div>
      </div>
    </section>
    <small>
        <p style="margin:0;">*Consulte serviços disponíveis em www.igold.chavesgold.com.br</p>
        <p style="margin:0;">**Para utilização diária não é necessária conexão com a internet, porém para download e atualização é necessário</p>
        <p style="margin:0;">***Liberação das cargas do momento da adessão do plano</p>
    </small>
  </div>
  <!--============== Sobre a Parceiros ==============-->
      <section class="Partners" id="#">
          <div class="container">
            <div class="row">
              <div class="col-lg-6" style="padding:0;">
                <img src="img/pexels-photo.jpg" alt="Sou cliente transponder" class="img-responsive" style="heigth=195px; width: 100%;">
              </div>
              <div class="col-lg-6">
                  <article>
                      <h3>Não se preocupe mais em comprar cargas!</h3>
                      <h3>Você já possui o equipamento</h3>
                      <h3>Seu próprio celular</h3>
                      <h3>Toda tecnologia em transponder agora na ponta de seus dedos</h3>
                  </article>
              </div>
            </div>
            </div>
      </section>

  <!--============== Planos ==============-->

  <section class="Plans" id="planos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <h1 class="text-center title">Planos</h1>
          <h4 class="text-center sub-title">Escolha o melhor para você</h4>
        </div>
      </div>
      <div class="row">
        <div class="plans-wrap clearfix">
          <div class="col-lg-6" style="margin-top: 40px;">
            <a href="planos/ig17/">
              <img src="img/planIg17.jpg" alt="Sou cliente transponder" class="img-responsive" style="width: 100%;">
            </a>
          </div>
          <div class="col-lg-6" style="margin-top: 40px;">
            <a href="planos/ig17s/">
              <img src="img/planIg17s.jpg" alt="Quero ser um novo cliente transponder" class="img-responsive" style="width: 100%;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

<!--============== Equipamentos ==============-->

  <section class="Equip" id="equipamentos">
    <div class="container">
      <div class="row">
        <h1 class="text-center title">Equipamentos</h1>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="equipItem">
            <div class="row">
              <div class="col-lg-6">
                <img src="img/igold.jpg" alt="" class="equipImage remap-smart">
              </div>
              <div class="col-lg-6">
                <div class="equipDetails">
                  <p class="equipName">Lorem ipsum dolor</p>
                  <ul class="equipList">
                    <li>sit amet</li>
                    <li>consectetur adipiscing elit</li>
                    <li>Nunc ac ligula vel arcu blandit eleifend</li>
                    <li>Proin ac nunc molestie</li>
                    <li>ullamcorper at</li>
                    <li>Duis hendrerit nec ipsum non tristique</li>
                  </ul>
                </div>
              </div>

            </div>
          </div><!-- /.equipItem -->
        </div>
        <div class="col-lg-6">
          <div class="equipItem">
            <div class="row">
              <div class="col-lg-6">
                <img src="img/igold-gold.jpg" alt="" class="equipImage remap-smart-III">
              </div>
              <div class="col-lg-6">
                <div class="equipDetails">
                    <p class="equipName">Lorem ipsum dolor</p>
                    <ul class="equipList">
                      <li>sit amet</li>
                      <li>consectetur adipiscing elit</li>
                      <li>Nunc ac ligula vel arcu blandit eleifend</li>
                      <li>Proin ac nunc molestie</li>
                      <li>ullamcorper at</li>
                      <li>Duis hendrerit nec ipsum non tristique</li>
                    </ul>
                </div>
              </div>

            </div>
          </div><!-- /.equipItem -->
        </div>
      </div>
      <p>*Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae ex eget erat euismod vestibulum. In interdum lorem luctus urna rhoncus pretium. Proin maximus hendrerit consectetur. Etiam interdum facilisis posuere. Phasellus aliquam pulvinar gravida. Nulla vitae lacinia lorem. Aliquam placerat mi at nibh tristique faucibus ac sed nibh.</p>
    </div>
  </section>

<!--============== FAQ ==============-->
<section class="faq" id="faq">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">FAQ</h3>
            </div>
            <div class="panel-body">
              Encontre aqui as respostas para as dúvidas mais frequentes sobre nossos produtos, caso ainda tenha mais dúvidas, entre em contato conosco através do formulário de contato <a href="/#contato">clicando aqui</a>.
            </div>

            <ul class="list-group">
              <li class="list-group-item">
                <strong>1. Como funciona esse sistema?</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus elementum gravida lacus, a maximus dui sodales eget. Sed at tempus arcu. Nullam vel viverra elit, ornare sollicitudin neque. Mauris quis quam eros. Duis laoreet, neque in luctus hendrerit, mi turpis varius mauris, vulputate tincidunt augue justo ut arcu. Integer lacinia vehicula lorem, ac aliquam libero consectetur in. Integer volutpat elementum ultricies. Vivamus aliquam pharetra massa in pellentesque. Quisque sed leo eget nisi blandit finibus. Praesent placerat augue eget eleifend dapibus. Nunc consequat mauris in elementum aliquet.</p>
              </li>
              <li class="list-group-item">
                <strong>2. O que precisa para entrar no plano?</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque eleifend nisi, ac elementum lectus accumsan id. Etiam a odio vel turpis pellentesque elementum. Fusce eget nisi tempus sapien egestas consequat. Maecenas varius, magna et facilisis finibus, erat tellus fermentum ligula, sit amet rhoncus quam arcu sit amet metus. Sed ultricies pharetra tortor sit amet elementum. Nullam ut magna laoreet, dapibus mauris eu, blandit nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus in tellus odio.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisl nulla, porttitor sed nunc quis, pellentesque placerat lectus. Morbi dignissim eget nibh vitae vehicula.</p>
              </li>
              <li class="list-group-item">
                <strong>3. Como devo fazer para utilizar o máximo das funções do meu IGold após aderir ao plano?</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra libero eu semper convallis. Proin at nibh vitae nunc lobortis maximus. Maecenas finibus dictum lectus, quis dapibus purus dictum ut. Integer placerat tincidunt orci, quis rhoncus lectus faucibus sit amet. Aliquam erat volutpat. Pellentesque auctor eu turpis a auctor. Pellentesque ornare libero vel blandit maximus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris eu nisi faucibus, molestie lacus efficitur, ullamcorper augue. Etiam sit amet urna vestibulum, facilisis est quis, malesuada odio. Vestibulum finibus felis mi, et porttitor dolor luctus nec. Mauris sit amet quam quis lacus varius suscipit et a nunc. Ut vehicula pretium sapien, non tempor turpis feugiat in. Cras ac rhoncus sem, sit amet maximus est. Vivamus auctor eu massa a elementum.</p>
              </li>
              <li class="list-group-item">
                <strong>4. O que acontece com o cliente que não quiser aderir ao plano?</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur sollicitudin dignissim. Donec malesuada lorem et enim placerat, id cursus ante dapibus. In lobortis augue dui, quis consequat odio posuere malesuada. Praesent id tortor pharetra, vestibulum leo eu, mattis lectus. Maecenas et tortor ut quam porttitor fringilla ullamcorper pellentesque magna. Pellentesque quis mauris sed orci egestas gravida at mattis lacus. Ut mollis est leo, eu varius sem dapibus ac. Praesent nec interdum enim. Integer rhoncus mollis risus, ac congue nisl fermentum in. Pellentesque id eros sit amet mi consequat accumsan non quis urna. Etiam id lacinia nibh.</p>
              </li>
              <li class="list-group-item">
                <strong>5. O que acontece com as cargas compradas antes da adesão do plano?</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis aliquet lectus, eget euismod tortor pharetra scelerisque. Phasellus lacinia aliquet neque sed placerat. Donec augue augue, egestas in orci id, semper consequat augue. Pellentesque ut sollicitudin lacus, id tincidunt augue. Vestibulum ornare in neque in porttitor. Etiam at libero interdum, euismod lorem ac, mollis dui. Vivamus pellentesque tincidunt leo a finibus.</p>
              </li>
              <li class="list-group-item">
                <strong>6. Como faço para saber quais cargas já tenho no meu equipamento?</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis aliquet lectus, eget euismod tortor pharetra scelerisque. Phasellus lacinia aliquet neque sed placerat. Donec augue augue, egestas in orci id, semper consequat augue. Pellentesque ut sollicitudin lacus, id tincidunt augue. Vestibulum ornare in neque in porttitor. Etiam at libero interdum, euismod lorem ac, mollis dui. Vivamus pellentesque tincidunt leo a finibus.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
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
      <form method="post" class="form" id="contact-form">
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
        <p class="text-right">by: <a href="https://www.linkedin.com/in/martins-gabriel/" target="_blank" style="text-decoration: none;">Gabriel Martins</a></p>
    </div>
  </div>
</div>



<!--==============QUERY LIBRARY=================-->

<script src="js/jquery.easing.1.2.js"></script>

<!--==============BOOTSTRAP JS=================-->

<script src="js/bootstrap.min.js"></script>

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
<script type="text/javascript" src="js/jquery.noty.packaged.min.js"></script>
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
<!--==============CONTACT FORM=================-->
<script src="js/contact_form.js"></script>

</body>
</html>
