<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
	<title>Projeto 01</title>
	<link rel="<?php echo INCLUDE_PATH; ?>stylesheet" href="estilo/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="logoicone.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8" />
</head>
<body style="background-color: black">
<?php
	$url = isset($_GET['url']) ? $_GET['url'] : 'home';
	switch ($url) {
		case 'sobre':
			echo '<target target="sobre"/>';
			break;
			case 'servicos':
			echo '<target target="servicos"/>';
			break;
		
	}
?>


	<header>
		<div class="center">
		
		<div class="logo left"><div class = "logoc"><img src="<?php echo INCLUDE_PATH; ?>images/logo.png"width="300" height="300"/></div></a></div><!--logo-->
			
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>nfts itens">Nfts itens</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
				 <div class="botao-menu-mobile">

				 <i class="fa-solid fa-bars"></i>
				 
				 
				   
                 </div>
				<ul>
				
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>nfts itens">Nfts itens</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div><!--center-->
	</header>
	
	<?php

	if(file_exists('pages/'.$url.'.php')){
		 include('pages/'.$url.'.php');

}else{
//Podemos fazer o que quiser, pois a página não existe. include('pages/404.php');
	if($url != 'sobre'&& $url != 'servicos'){
	$pagina404 = true;
	include('pages/404.php');
}else{
	include('pages/home.php');
}
}

	
	?>
	

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo  'class= "fixed"';?>>
	
		<div class="center">
			<p>F1-NFT  Todos os direitos reservados!</p>
		</div>
</footer>
		
	
</form>
<script src="<?php echo INCLUDE_PATH; ?>JS/jquery.js"></script>
<script src ="<?php echo INCLUDE_PATH; ?>JS/scripts.js"></script>
<?php
	if($url == 'contato'){
?>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrfbKOidJMlBV--M0Bvt4Zrkp3FtpOv58&callback=initMap&v=weekly"
      defer
    ></script>
<script src="<?php echo INCLUDE_PATH; ?>JS/map.js"></script>
<?php }?>
</body>
</html>

