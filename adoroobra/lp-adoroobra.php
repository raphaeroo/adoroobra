 <?php
/* Template Name: landing-page */
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Adoro Obra</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Links CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/lp-css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/lp-css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/lp-css/aos.css">

	<!-- Icones -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!-- Icone da Empresa -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/lp-favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/lp-favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/lp-favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/lp-favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/lp-favicon/safari-pinned-tab.svg" color="#1b1b1b">
	<meta name="msapplication-TileColor" content="#fbfbfb">
	<meta name="theme-color" content="#fbfbfb">
<?php wp_head(); ?>
</head>
<body>

    <!-- Preloader -->
	<div id="preloader">
		<div class="spinner"></div>
	</div>

    <!-- Botão Top -->
	<div class="scrollToTop">
		<span>TOPO</span>
	</div>

    <!-- Menu Responsivo -->
	<div id="overlay-nav">
    	<div id="nav-content">
        	<ul>
				<li><a href="https://adoroobra.com.br/" target="_blank">Página Principal</a></li>
		        <li><a href="#servicos">O que Procura?</a></li>
		        <li><a href="#orcamento">Solicite uma Visita</a></li>
		    	<li><a href="#contatos">Contato</a></li>
          	</ul>
        </div>
    </div>

    <!-- Menu da Página -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory'); ?>/lp-images/logo.png" alt="Logo" title="Logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" onclick="openNav()"  aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end">
				<ul class="navbar-nav">
		        	<li class="nav-item"><a href="https://adoroobra.com.br/" target="_blank" class="nav-link">Página Principal</a></li>
		        	<li class="nav-item"><a href="#servicos" class="nav-link scroll">O que Procura?</a></li>
		        	<li class="nav-item"><a href="#orcamento" class="nav-link scroll">Solicite uma Visita</a></li>
		          	<li class="nav-item"><a href="#contatos" class="nav-link scroll">Contato</a></li>
				 </ul>
			</div>
	    </div>
	</nav>

	<!-- Slides -->
	<section class="home-slider">
    	<div class="slider-item bg" style="background-image:url('<?php bloginfo('template_directory'); ?>/lp-images/bg.png');">
        	<div class="container">
	          	<div class="row">
	          		<div class="col-md-7 slider-text">
	          			<hr/>
		            	<h1>Fale com quem <span>Adora</span> o que faz!</h1>
		            	<a href="#orcamento" class="scroll"><button type="button" class="btn btn-slide">Solicite uma Visita</button></a>
	            	</div>
          		</div>
        	</div>
      	</div>
  	</section>

  	<!-- Quadros -->
	<section class="quadros">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="card" data-aos="fade-up" data-aos-duration="900" data-aos-offset="100">
						<div class="card-body">
						    <i class="fas fa-horse-head"></i>
						    <h6 class="card-subtitle">Gestão de Projetos com Equipe Própria</h6>
						    <hr/>
						    <p class="card-text">Deseja manter sua equipe na obra? Temos o melhor gerenciamento para conduzi-la com sabedoria e garantir resultados bem-sucedidos.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100">
						<div class="card-body">
						    <i class="fas fa-cogs"></i>
						    <h6 class="card-subtitle">Gestão de Projeto com Equipe Terceirizada</h6>
						    <hr/>
						    <p class="card-text">Profissionais terceirizados e indicados pela Adoro Obra. Selecionamos uma equipe qualificada para atuar com êxito em seu projeto.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
  	</section>

  	<!-- Serviços -->
  	<section class="servicos space-one" id="servicos">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-5 title">
  					<hr/>
  					<h2>O que Procura?</h2>
  					<p>É com satisfação que respondemos às suas dúvidas.</p>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-md-12">
  					<a href="#solucion" class="scroll">
	  					<div class="serv" data-aos="flip-up" data-aos-offset="100">
	  						<h5>Faltando tempo para liderar a equipe na obra?</h5>
	  					</div>
	  				</a>
  				</div>
  				<div class="col-md-12">
  					<a href="#solucion" class="scroll">
	  					<div class="serv" data-aos="flip-up" data-aos-offset="100">
	  						<h5>O que você faria para ter mais tempo para fechar projetos?</h5>
	  					</div>
	  				</a>
  				</div>
  				<div class="col-md-12">
  					<a href="#solucion" class="scroll">
	  					<div class="serv" data-aos="flip-up" data-aos-offset="100">
	  						<h5>Ter um gestor de equipe na sua obra garantindo prazo e execução, aumentaria o valor da sua marca?</h5>
	  					</div>
	  				</a>
  				</div>
  				<div class="col-md-12">
  					<a href="#solucion" class="scroll">
	  					<div class="serv" data-aos="flip-up" data-aos-offset="100">
	  						<h5>Se você fechar mais projetos, não terá tempo para cuidar da obra?</h5>
	  					</div>
	  				</a>
  				</div>
  				<div class="col-md-12">
  					<a href="#solucion" class="scroll">
	  					<div class="serv" data-aos="flip-up" data-aos-offset="100">
	  						<h5>Você precisa estar na sua obra para garantir a boa execução do seu projeto?</h5>
	  					</div>
	  				</a>
  				</div>
  				<div class="col-md-12">
  					<a href="#solucion" class="scroll">
	  					<div class="serv" data-aos="flip-up" data-aos-offset="100">
	  						<h5>Falta tempo para comunicar-se bem com sua equipe?</h5>
	  					</div>
	  				</a>
  				</div>
  			</div>
  		</div>
  	</section>

  	<!-- Solução -->
  	<section class="solucion space-one" id="solucion">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12 title text-center">
  					<hr/>
  					<h2>A Adoro Obra tem a Solução!</h2>
  					<p>Evite contratempos, conheça nossos serviços.</p>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-md-12 text-center">
  					<p class="desc">Liderar uma equipe no momento de realizar a obra é uma das tarefas mais difíceis, não é mesmo? Temos que lidar com temperamentos distintos, além de problemas como: alterações no projeto sem autorização, faltas, retrabalho, trabalho mal executado, desentendimentos, falta de comprometimento dos colaboradores com o prazo de execução, falha na comunicação, entre outrosimprevistos.<br/>

  					Mas a grande questão é: quanto vale se certificar de que seu projeto será conduzido com agilidade e eficiência do início ao fim e que sua equipe vai funcionar como uma orquestra? Já pensou quanto tempo terá disponível para fechar novos contratos? E ainda poderá tirar umas horinhas para relaxar com a família.<br/>

  					Sendo assim, a gestão de pessoas e projetos durante a obra é a forma mais inteligente de produzir mais e de maneira eficiente. Sem custos e responsabilidades com funcionários, apenas o prazer de conferir resultados satisfatórios.<br/><br/>

  					<strong>É por essa razão que estamos aqui para ajudar você. Fale com quem adora o que faz!</strong></p>

  					<i class="fas fa-sort-down floating-arrow"></i>
  				</div>
  			</div>
  		</div>
  	</section>

  	<!-- Formulario -->
  	<section class="orcamento space-one" id="orcamento">
  		<div class="container">
  			<div class="row text-center">
  				<div class="col-md-12 title">
  					<hr/>
  					<h2>Solicitar Uma Visita.</h2>
  					<p>Dê o primeiro passo para uma obra de sucesso.</p>
  				</div>
  			</div>
			<div class="inner contact space-one">
	            <div class="contact-form">
	              <?php echo do_shortcode('[contact-form-7 id="219" title="Formulário Landing_page"]'); ?>
				</div>
	        </div>
	    </div>
  	</section>

  	<!-- Contatos -->
  	<section class="contatos space-one" id="contatos">
  		<div class="container">
  			<div class="row text-center" data-aos="fade-up" data-aos-offset="100">
  				<div class="col-lg-3 col-md-12 ct">
	    			<a class="navbar-brand scroll" href="#ftco-navbar"><img src="<?php bloginfo('template_directory'); ?>/lp-images/logo.png" alt="Logo" title="Logo"></a>
  				</div>
  				<div class="col-lg-3 col-md-12 ct">
	  				<span>WhatsApp:</span><br/><a href="https://bit.ly/2HjuThZ" target="_blank">(11) 97684-5977</a>
	  			</div>
  				<div class="col-lg-3 col-md-12 ct">
	  				<span>E-mail:</span><br/><a href="mailto:comercial@adoroobra.com.br">comercial@adoroobra.com.br</a>
	  			</div>
  				<div class="col-lg-3 col-md-12 ct">
	  				<span>Facebook:</span><br/><a href="https://bit.ly/2RVeioH" target="_blank">/suzanagarciadesigner</a>
	  			</div>
	  		</div>
	  	</div>
  	</section>

  	<!-- Rodapé -->
  	<footer>
		<div class="col-md-12">
			<p>© 2019 <a href="#ftco-navbar" class="scroll">Adoro Obra</a> | Desenvolvido por - <a href="http://www.agenciasense.com.br/" target="_blank">Agência SENSE</a></p>
		</div>
  	</footer>

  	<!-- JavaScripts -->
  	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lp-js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lp-js/button_top.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lp-js/aos.js"></script>
  	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lp-js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
  	<script>
	$(window).load(function(){
    	$('#preloader').fadeOut(1500);
	});

	$(document).ready(function() {
	})
	</script>

	<!-- Menu Responsivo -->
	<script>
	$(document).ready(menu);

	function menu() {
	  $('.navbar-toggler, #overlay-nav').on('click', function() {
	    $('.navbar-toggler').toggleClass('active');
	    $('#top, #middle, #bottom').toggleClass('active');
	    $('#overlay-nav').toggleClass('active');
	  });
	}
	</script>

	<!-- Links Ancora -->
	<script type="text/javascript">
	jQuery(document).ready(function($) { 
	    $(".scroll").click(function(event){        
	        event.preventDefault();
	        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
	   });
	});
	</script>

	<!-- AOS Efeitos -->
	<script>
	  AOS.init();
	</script>
</body>
</html>