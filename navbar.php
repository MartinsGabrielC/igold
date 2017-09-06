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
     <a class="navbar-brand" href="#"><img src="/img/logoNav.png" alt="logo" class="img-responsive"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse" id="nav-main">
      <ul class="nav navbar-nav">
        <li><a href="/#" class="scroll">GOLD</a></li>
        <li><a href="/#igold" class="scroll">IGOLD</a></li>
        <li><a href="/#planos" class="scroll">PLANOS</a></li>
        <li><a href="/#equipamentos" class="scroll">EQUIPAMENTOS</a></li>
        <li><a href="/#faq" class="scroll">FAQ</a></li>
        <li><a href="/#contato" id="cttScroll" class="scroll">CONTATO</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right" style="overflow:hidden;">
        <div>
            <?php
            	include('web/functions_login.php');

            	$url = get_url_acesso();

            	if(!is_null($url)){
            ?>
                <ul class="nav navbar-nav">
                  <li class="user-info">Bem vindo <?php  echo $_SESSION['nome']; ?><a href="/login.php" id="back-session">Continuar sessão</a></li>
                </ul>
            <?php
                }else{
            ?>
                <form class="navbar-form navbar-right" role="form" id="formLogin" method="post" style="margin:8px auto;">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" tabindex="2" required>
    					<div class="text-left" id="forgot-password"><a href="/web/esqueciSenha.php">Esqueci a senha</a></div>
                    </div>
                    <button type="submit" class="btn btn-default" tabindex="3">Login</button>
                </form>
            <?php
                }
            ?>
        </div>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>
<!--============== JS Login =================-->
<script src="/web/js/login.js"></script>
