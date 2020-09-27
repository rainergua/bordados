<!DOCTYPE html>
<html lang='es'>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162797262-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-162797262-1');
	</script>
	<title>Portal EduVirt - Ministerio de Educación</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'; ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>	
	<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/css/all.css',
	'rel' => 'stylesheet',
	'type' => 'text/css',
	);
	echo link_tag($link);?>
	<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/css/bootstrap.min.css',
	'rel' => 'stylesheet',
	'type' => 'text/css',
	);
	echo link_tag($link);?>
	<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/css/estilos.css',
	'rel' => 'stylesheet',
	'type' => 'text/css',
	);
	echo link_tag($link);?>
	
</head>
<body>
<header>
	<div class="container-fluid bg-red">
	<div class="container-fluid "> <!--main-->
	<div class="container">
        <div class="row justify-content-center align-items-center"><!--header-->
            <div class="col-12 col-sm-12 col-md-2 col-ld-2 mb-1 mt-1">
				<a href="<?php echo base_url();?>">
				<img src="<?php echo base_url()."assets/img/logo.jpg";?>" alt="" class="img-fluid w-100"></a>
            </div>
			<div class="col-12 col-sm-12 col-md-10 col-ld-10 text-center">
            </div>
		</div>
	</div>
	</div>
	</div>
	</header>
	<!--NAVBAR-->
	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<a class="navbar-brand" href="<?php echo base_url();?>"><i class="fas fa-home"  style="font-size:24px"></i> Inicio</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link" href="<?=base_url()?>principal/qsms">Quienes Somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url()?>principal/nsoc">Nuestros Socios</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Nuestro Folklore
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Nuestras Danzas</a>
						<a class="dropdown-item" href="#">Nuestras Festividades</a>
						<!--div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a-->
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contáctanos</a>
				</li>
			</ul>
		</div>
</nav>
