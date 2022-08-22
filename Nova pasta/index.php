<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
	<title>Projeto 01</title>
	<link rel="stylesheet" href="estilo/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link href="estilo/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="logoicone.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8" />
</head>
<body style="background-color: black">



	<header>
		<div class="center">
			<div class="logo left">Logomarca</a></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="depoimentos">Depoimentos</a></li>
					<li><a href="servicos">Serviços</a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
				 <div class="botao-menu-mobile">
				 <span class="material-symbols-outlined">menu</span>
				   
                 </div>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Depoimentos</a></li>
					<li><a href="">Serviços</a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="banner-principal">
		<div class="overlay"></div>
		<div class="center">
			<form method="POST" action="Banco.php">
				 <h2>Digite seu email para receber noticias!</h2>
				 <input type="email" name="email">
				<input type="submit" name="acao" value="Cadastrar">
			</form>
		</div>
	</section>

	<section class="descricao-autor">
		<div class="center">
			<div class="w50 left">
				<h1>Desenvolvimento do TCC</h1>
				 <p>
				 A escolha do tema de Games, foi por causa do seu crescimento no mercado. 
				 É a maior indústria do mundo, maior até do que a do cinema, música e artes juntos,
				  com mais de 200 bilhões de dólares, e principalmente na pandemia subiu 20% as 
				  compras de jogos, e também subiu mais de 55% do mercado de games para smartphones
				   e os games
				</p>
				<p>NFTS foi criado em 2020, esse termo de NFT, significa token não fundível, 
					um token não-fungível, por sua vez, tem propriedades específicas e únicas, 
					nunca um é igual a outro. Uma foto tem apenas uma versão original, ainda que 
					possa haver cópias e reproduções (ou mesmo falsificações).
                </p>
				<p>Em 2021 subiu 500% os investimentos, um dos mais conhecidos são : 
					Axie Infinity, MIR4, Thetan Arena.
                </p>
				<p>Desses games NFTS, os principais problemas, são à falta de credibilidades dos
					 desenvolvedores com o cliente, explicar sobre as atualizações do game deixando 
					 ela publica, vendo as opiniões dos players sobre as atualizações, e a falta de 
					 clareza dos desenvolvedores.
                </p>


			</div> 
			<div class="w50 left">
				<div class="right"><img src="images/Foto1.jpeg"width="450" height="770"/>
				
        </div>
				
        </div>
		</div>
		<div class="clear"></div>	
	</section>
	
	<section class="especialidades">
		<div class="center">
			
		<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidade">
				<h3>Front-End</h3>
				<h4>Desenvolvedor: Igor César</h4>
				<p>As linguagens utilizadas são, CSS,CSS3 com design responsivel,<br> Java Script, para
					as movimentações do site, e cadastrou nosso<br> jogo em uma Blockchain.
			</div><!--box-especialidade-->

			<div class="w33 left box-especialidade">
				<h3>Back-End</h3>
				<h4>Desenvolvedor: Kauã Henri </h4>
				<p>Linguagens utilizadas PHP com Mysql, Framework Laravel,<br> ajudou cadastrar a moeda do jogo
					na Blockchain, e integrando<br> no banco de dados. 
				</p>
			</div><!--box-especialidade-->

			<div class="w33 left box-especialidade">
				<h3>Estilização</h3>
				<h4>Desenvolvedor: Danilo</h4>
				<p>Desenvolvendo texturas, e desgn clean</p>
			</div><!--box-especialidade-->
			<div class="clear"></div>
		</div>
	</section>

	<section class="extras">
		<div class="center">
			<div class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos dos usuarios</h2>
				
				<div class="depoimento-single">
					<p class="depoimento-descricao">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p class="nome-autor">Lorem ipsum</p>
				</div><!--depoimento-single-->
			</div><!--w50-->

			<div id="servicos" class="w33 left servicos-container">
				<h2 class="title">Serviços</h2>
				<div class="servicos">
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
					</ul>
				</div><!--servicos-->
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--extras-->

	<footer>
		<div class="center">
			<p>F1-NFT - Todos os direitos reservados!</p>
		</div>
	</footer>
	
</form>
<script src="js/jquery"></script>
<script>
	
</script>
</body>
</html>