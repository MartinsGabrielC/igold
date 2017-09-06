<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>IGOLD</title>
<link rel="shortcut icon" href="img/logoFavIconLow.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Gabriel Martins">
<meta name="description" content="IGold é um revolucionário programador de chaves, com leitura de senhas via OBD(diagnose), via pinça e solda. Também faz clonagem de chaves!">
<meta name="keywords" content="igold, OBD, programador de chave">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!--============== ICON FONT FONT-AWESOME =================-->

<link href="css/font-awesome.css" rel="stylesheet">

<!--==============MAIN CSS FOR HOSTING PAGE =================-->

<link href="css/style.css" rel="stylesheet" media="all">

<!--==============Mordernizr =================-->

<script src="js/modernizr.js"></script>

<!--==============DIALOG =================-->
<link rel="stylesheet" type="text/css" href="web/css/dialog-polyfill.css" />

<!--===================FLEX SLIDER=======================-->

<link rel="stylesheet" href="css/flexslider.css" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      useCSS: Modernizr.touch,
      directionNav: false
    });
  });
</script>
</head>
<body id="home" data-spy="scroll" data-target=".navbar-collapse" data-offset="100">

<!--==============Logo & Menu Bar=================-->
<?php include('navbar.php'); ?>

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


      <!--============== Sobre a Gold ==============-->

    <section class="About" id="igold">
        <div class="container-fluid">
            <div class="row text-center">
                <img src="img/logoGold.png" style="display:inline-block">
                <!-- <h1 class="text-center title" style="background-color:#353434; color:#f0f5fe;">GOLD</h1> -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <!-- <article> -->
                        <p>A Gold é a empresa que há 65 anos, vem inovando para oferecer aos seus clientes a melhor parceria, produtos e qualidade.</p>
                      <!-- </article> -->
                    </div>
              </div>
          </div>
          <div class="row">
              <h1 class="text-center title" style="background-color:#353434; color:#f0f5fe; padding: 1rem;">O que é o IGold?</h1>
          </div>
          <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p>É um revolucionário programador de chaves, com leitura de senhas via OBD(diagnose), via pinça e solda.
                    Também faz clonagem de chaves!</p>
                    <p>Todas suas operações (diagnose, clonner e memória) são realizadas à partir de um aplicativo de celular.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 text-right" style="padding-left: 0;">
                <h2 class="sub-title" style="background-color:#353434; color:#f0f5fe; padding:1rem 10px;"><strong>Benefícios:</strong></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                     <ul>
                         <li><p>Muito prático de usar</p></li>
                         <li><p>Manual no próprio APP</p></li>
                         <li><p>Baixo investimento</p></li>
                         <li><p>As principais cargas do mercado</p></li>
                         <li><p>Não precisa de internet e nem de dados**</p></li>
                         <li><p>Após 3 anos, liberação permanente das cargas***</p></li>
                     </ul>
                </div>
              </div>
          </div>
      </div>
    </section>

        <p style="margin:0;">*Consulte serviços disponíveis em www.igold.chavesgold.com.br</p>
        <p style="margin:0;">**Para utilização diária não é necessária conexão com a internet, porém para download e atualização é necessário</p>
        <p style="margin:0;">***Liberação das cargas do momento da adessão do plano</p>
    
  <!--============== Sobre a Parceiros ==============-->
      <section class="Partners" id="#">
          <div class="container">
            <div class="row">
                <div class="col-lg-12" style="padding:0;">
                    <img src="img/celular_home.jpg" alt="Não se preocupe mais em comprar cargas! Você já possui o equipamento" class="img-responsive" style="width: 100%;">
                </div>
              <!-- <div class="col-lg-6" style="padding:0;">
                <img src="img/pexels-photo.jpg" alt="Sou cliente transponder" class="img-responsive" style="heigth=195px; width: 100%;">
              </div>
              <div class="col-lg-6">
                  <article>
                      <h3>Não se preocupe mais em comprar cargas!</h3>
                      <h3>Você já possui o equipamento</h3>
                      <h3>Seu próprio celular</h3>
                      <h3>Toda tecnologia em transponder agora na ponta de seus dedos</h3>
                  </article>
              </div> -->
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
      <div class="row" style="margin-top: 40px;">
          <div class="col-lg-12"><a href="planos/ig17s/"><img src="img/promo1.jpg" alt="Promoção de lançamento! Adquira o plano IG17S por 2 anos e ganhe os hardware" class="img-responsive" style="width: 100%;"></a><div>
      <div>
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
                <img src="img/moduloOdb.png" alt="" class="equipImage">
              </div>
              <div class="col-lg-6">
                <div class="equipDetails">
                  <p class="equipName">Módulo OBD</p>
                  <ul class="equipList">
                    <li>Principal módulo do iGold (obrigatório em todos procedimentos)</li>
                    <li>Responsável por processar todas as funcionalidades do sistema</li>
                    <li>Não necessita de outros módulos para operar </li>
                    <li>Se comunica com o carro (diagnóstico) e com os demais módulos</li>
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
                <img src="img/moduloClonner.png" alt="" class="equipImage">
              </div>
              <div class="col-lg-6">
                <div class="equipDetails">
                    <p class="equipName">Módulo CLONNER</p>
                    <ul class="equipList">
                      <li>Identificação de transponders</li>
                      <li>Clonagem de transponders</li>
                      <li>Dedicação e desbloqueio de transponders</li>
                      <li>Operações de diagnóstico que necessitam do ID da chave</li>
                      <li>Operações de pinça/solda que necessitam do ID da chave</li>
                    </ul>
                </div>
              </div>

            </div>
          </div><!-- /.equipItem -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="equipItem">
            <div class="row">
              <div class="col-lg-6">
                <img src="img/moduloMemoria.png" alt="" class="equipImage">
              </div>
              <div class="col-lg-6">
                <div class="equipDetails">
                  <p class="equipName">Módulo MEMÓRIA</p>
                  <ul class="equipList">
                    <li>Leitura de senha diretamente de painéis e centrais (cabo pinça/solda)</li>
                    <li>Preparação/apresentação de chaves diretamente no imobilizador (cabo solda)</li>
                    <li>Reset/bypass de painéis e centrais (cabo de pinça/solda)</li>
                  </ul>
                </div>
              </div>

            </div>
          </div><!-- /.equipItem -->
        </div>
        <!-- <div class="col-lg-6">
          <div class="equipItem">
            <div class="row">
              <div class="col-lg-6">
                <img src="img/moduloClonner.png" alt="" class="equipImage">
              </div>
              <div class="col-lg-6">
                <div class="equipDetails">
                    <p class="equipName">Módulo CLONNER</p>
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
          </div><!-- /.equipItem
        </div> -->
      </div>
      <!-- <p>*Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae ex eget erat euismod vestibulum. In interdum lorem luctus urna rhoncus pretium. Proin maximus hendrerit consectetur. Etiam interdum facilisis posuere. Phasellus aliquam pulvinar gravida. Nulla vitae lacinia lorem. Aliquam placerat mi at nibh tristique faucibus ac sed nibh.</p> -->
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
                <p>O iGOLD funciona através da combinação de um celular com
                    sistema operacional Android com conectores especialmente
                    desenvolvidos pela iG, para possibilitar ao chaveiro a programação
                    de chaves automotivas codificadas.</p>
                <p>O aplicativo iGold, baixado gratuitamente da playstore, permite que
                    você realize gravações, cópias e clonagens de chaves automotivas,
                    através dos conectores que acompanharão o kit  iGOLD.</p>
              </li>
              <li class="list-group-item">
                <strong>2. O que precisa para entrar no plano?</strong>
                <p>O cliente precisa possuir um smartphone com Android versão 4.1 ou superior</p>
                <p>Baixar o aplicativo iGold na Google PlayStore</p>
                <p>Fazer a adesão a um dos planos iGOLD. Para isso, entre em contato com um distribuidor Gold, ligue para o televendas ou peça para alguém entrar em contato<p>
              </li>
              <li class="list-group-item">
                <strong>3. Como devo fazer para utilizar meu iGold após aderir ao plano?</strong>
                <p>O aplicativo iGOLD funciona tanto online quanto offline, entretanto, é necessário que ele seja conectado à internet  (wi-fi ou plano de dados) de tempos em tempos para renovar a licença e receber as atualizações. Assim, antes de utilizá-lo, atualize o seu aplicativo.</p>
                <p>O conector Modulo OBD-iGOLD também precisa ser conectado à internet de tempos em tempos, para renovar a licença. Conecte-o à  fonte de energia que acompanha o Kit, abra o aplicativo iGold, selecione a opção Atualizar Conector e siga as instruções.</p>
                <p>As atualizações trarão novas cargas, melhorias no aplicativo, inovações e muito mais, possibilitando sempre uma experiência de alto nível ao usuário. Junto com seu aplicativo estará disponível o manual de operação do iGold.</p>
              </li>
              <li class="list-group-item">
                <strong>4. O que acontece com o cliente que não quiser aderir ao plano?</strong>
                <p>Sem a adesão a um plano iGold não é possível utilizar o aplicativo, mesmo que ele esteja instalado no seu smartphone.</p>
              </li>
              <li class="list-group-item">
                <strong>5. Quais as vantagens desse produto?</strong>
                <p>São muitas:</p>
                <p>Economia: Atualmente, o investimento necessário para a aquisição de qualquer um dos diversos maquinários e seus acessórios que trabalham com cópia de chaves automotivas codificadas é bastante alto, inclusive impedindo que alguns chaveiros possam oferecer esse serviço. Com o iGold isso muda radicalmente: o investimento é consideravelmente menor, uma vez que o seu smartphone será a sua máquina.</p>
                <p>Praticidade: O fato de você usar seu celular como um acessório de codificação já lhe economiza um espaço de trabalho surpreendente, diante de uma situação onde você irar realizar uma  gravação de chaves Transponder; seja qual for lugar em que você estiver, você estará com seu  iGOLD no bolso. Em qualquer hora, em qualquer lugar, você estará pronto para solucionar o problema do seu cliente.</p>
              </li>
              <li class="list-group-item">
                <strong>6. Como faço para saber quais cargas já tenho no meu equipamento?</strong>
                <p>Basta conferir a lista no seu aplicativo. Além disso, junto com seu kit iGold você receberá uma lista dos carros que você estará adquirindo com seu plano. Essa lista também pode ser visualizada na sua área de cliente no site iGold.</p>
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
        <h1 class="title text-center" style="color: #f0f5fe;">Boletim Informativo</h1>
        <h3 class="text-center" style="color: #f0f5fe;">Fique informado sobre nossas novidades</h3>
        <form action="#" method="post">
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
          <p>Rua Benevides Ignácio Ramos, 108 – Parque Sisi<br/>
              São Carlos – SP  CEP: 13562-500
          </p>
        </div>
        <div class="contactInfoItem">
          <p><a href="mailto:&#x69;&#x6E;&#x66;&#x6F;&#x40;&#x63;&#x68;&#x61;&#x76;&#x65;&#x73;&#x67;&#x6F;&#x6C;&#x64;&#x2E;&#x63;&#x6F;&#x6D;&#x2E;&#x62;&#x72;">&#x69;&#x6E;&#x66;&#x6F;&#x40;&#x63;&#x68;&#x61;&#x76;&#x65;&#x73;&#x67;&#x6F;&#x6C;&#x64;&#x2E;&#x63;&#x6F;&#x6D;&#x2E;&#x62;&#x72;</a></p>
        </div>
        <div class="contactInfoItem">
          <div>(11) 3879-6870</div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- <div class="col-md-6">
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
    </div> -->
    <div class="col-md-3"></div>
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
        <p class="text-right">by: <a href="https://www.linkedin.com/in/martins-gabriel/" rel="noopener" target="_blank" style="text-decoration: none;">Gabriel Martins</a></p>
    </div>
  </div>
</div>

<!--============== Dialog ==============-->
<dialog id="dialog_login" class="mdl-dialog">
  <div class="mdl-dialog__content">
    <p id="dialog_login_msg" style="color:black;font-weight:bold;text-align: justify;"></p>
  </div>
  <div class="mdl-dialog__actions">
    <a href="/login.php"><button type="button" class="mdl-button">OK</button></a>
  </div>
</dialog>

<!--============== Dialog Account Errada ==============-->
<dialog id="dialog_login" class="mdl-dialog">
  <div class="mdl-dialog__content">
    <p id="dialog_login_msg" style="color:black;font-weight:bold;text-align: justify;"></p>
  </div>
  <div class="mdl-dialog__actions">
    <a href="/login.php"><button type="button" class="mdl-button">OK</button></a>
 </div>
</dialog>


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
         if($(window).width() < 1313)
            navMain.collapse('hide');
     });
 });
</script>
<!--==============CONTACT FORM=================-->
<script src="js/contact_form.js"></script>

<!--==============JQUERY =================-->
<script src="web/js/jquery.mask.min.js"></script>

<!--============== DIALOG =================-->
<script src="web/js/dialog-polyfill.js"></script>

</body>
</html>
