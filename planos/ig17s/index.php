
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>IGOLD</title>
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
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
      <a class="navbar-brand" href="#"><img src="../../img/logo.png" alt="logo" class="img-responsive"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse" id="nav-main">
      <ul class="nav navbar-nav">
        <li><a href="../../" class="scroll">GOLD</a></li>
        <li><a href="../../#igold" class="scroll">IGOLD</a></li>
        <li><a href="../../#planos" class="scroll">PLANOS</a></li>
        <li><a href="../../#equipamentos" class="scroll">EQUIPAMENTOS</a></li>
        <li><a href="../../#faq" class="scroll">FAQ</a></li>
        <li><a href="#contato" id="cttScroll" class="scroll">CONTATO</a></li>
        <li class="dropdown" id="menuLogin">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
            <div class="dropdown-menu" style="padding:17px;">
              <form class="form" id="formLogin">
                <input name="username" id="username" type="text" placeholder="Username">
                <input name="password" id="password" type="password" placeholder="Password"><br>
                <button type="button" id="btnLogin" class="btn">Login</button>
              </form>
            </div>
          </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>

<!--============== Planos ==============-->
<section class="Pricing">
	<div class="container">
		<!-- <div class="row">
      		<h1 class="title text-center">Planos para clientes</h1>
    	</div> -->
		<div class="row">
			<div class="colg-lg-12 PricingItem PricingPanel active" id="start">
				<div class="row">
					<div class="col-lg-12">
						<div class="PlanBlock">
							<img src="../../img/ig17s.png" alt="Plano IG17S" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<div class="row">
									<div class="PricingBlock">
										<h2>Hardware Incluso:</h2>
										<ul class="PricingList">
											<li>OBD, CLONNER e Memória</li>
											<li>Fonte</li>
											<li>Cabos e Acessórios</li>
										</ul>
										<h2>Funções Disponíveis:</h2>
										<ul class="PricingList">
											<li>Funções via OBD</li>
											<li>Clonagens</li>
                                            <li>Soldas</li>
                                            <li>Pinças</li>
										</ul>
										<h2>Softwares Disponíveis*:</h2>
										<ul class="PricingList">
											<li>Todos Nacionais e Importados</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<p class="PricingDescription">Vantagens de ter o IGOLD</p>
										<ul>
											<li>Muito fácil de usar</li>
											<li>Manual no próprio APP</li>
											<li>Baixo investimento</li>
											<li>As principais cargas do mercado</li>
											<li>Não precisa de internet e nem de dados**</li>
											<li>Após 3 anos, liberação permanente das cargas***</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row PricingPromotion">
							<div class="col-lg-12">
								<p class="PricingDescription">Promoção de lançamento por tempo limitado</p>
								<p>Adquira o plano iG 17S por 2 anos e ganhe o kit completo de hardwares</p>
								<p>Composição do kit:</p>
								<p>1 Módulo OBD/1 Módulo Clonner/1 Módulo Memória/1 Cabo Extensor/1 Cabo Adaptador DC/1 Cabo Soquete IG01/2 Cabos Solda(IG02, IG04)/1 Cabo Pinça Soic8/1 Fonte 12V</p>
                                <p>Aproveite e pague em 24xR$250,00 ( Economize R$1740,00 )</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<p class="PricingDescription">Montadoras</p>
								<img src="../../img/montadoras.png" alt="Montadoras" class="img-responsive">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="PricingBlock" style="padding-top:0;">
									<p class="PricingTag text-right">R$395,00<p class="text-right"><small>12x s/Juros</small></p></p>
									<p class="text-right">Hardware: R$145,00</p>
									<p class="text-right">Plano: R$250,00</p>
									<p class="text-right" style="font-size: 1em;">A partir do 2º ano, o valor cobrado será somente o do plano</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				 <p class="text-center PricingLearnMore">
				   <a href="../cadastro?plan=ig17s" class="btn btn-lg btn-success">Intenção de Compra</a>
				 </p>
			   </div>
			   <div class="row">
				   <small>
					   <p style="margin:0;">*Consulte serviços disponíveis em www.igold.chavesgold.com.br</p>
					   <p style="margin:0;">**Para utilização diária não é necessária conexão com a internet, porém para download e atualização é necessário</p>
					   <p style="margin:0;">***Liberação das cargas do momento da adessão do plano</p>
				   </small>
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
        <form action="../newsletter" method="post">
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
      <form action="/contato" method="post" class="form">
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

<!--==================== All Page Scripts ===================== -->
<script src="../../js/main.js"></script>

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
