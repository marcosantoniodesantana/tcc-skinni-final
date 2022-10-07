<?php

include("./php/conexao.php");

if(!empty($_GET['id_produto'])){
	$id_produto = $_GET['id_produto'];

	$sqlSelect = "SELECT * FROM produto WHERE id_produto=$id_produto";

	$result = $conexao->query($sqlSelect);
	$resultName = $conexao->query($sqlSelect);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de compra</title>

    <link rel="stylesheet" href="./css/pgComprar.css">
    <link rel="shortcut icon" href="./imagens/imagens_pagina/icone_titulo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&family=Merriweather+Sans&display=swap"
		rel="stylesheet">
</head>
<body>

    <header class="cabecalho">
		<div class="itens-cabecalho">


			<div class="logo">
				<h1 class="titulo-logo">Skinni</h1>
			</div>

			<div class="barra-pesquisa">
				<i class="fas fa-search pesquisar-icon"></i>
				<input type="text" class="pesquisa" id="pesquisa" placeholder="Pesquisar...">
			</div>

			<div class="icones">

				<a href="compras.html">
					<div class="compras">
						<i class="fas fa-shopping-bag"></i>
					</div>
				</a>

				<a href="login.html">
					<div class="usuario">
						<i class="fas fa-user"></i>
					</div>
				</a>
			</div>

		</div>

			<div id="menu-bar" class="menu-bar">
				<i class="fa-solid cor fa-bars"></i>
			</div>

		<nav class="menu">
			
			<ul>

				<li><h5 class="link-menu">Conta</h5>
					<ul class="submenu">
						<li><a href="../login/login.html" class="link-menu"><span>Login</span></a></li>
						<li><a href="../cadastro/cadastro.html" class="link-menu"><span>Criar conta</span></a></li>
					</ul>
				</li>

				<li class="opMenu"><a href="index.html" class="link-menu"><span>Novidades</span></a></li>
				<li class="opMenu"><a href="feminino.html" class="link-menu"><span>Feminino</span></a></li>
				<li class="opMenu"><a href="masculino.html" class="link-menu"><span>Masculino</span></a></li>
				<li class="opMenu"><a href="infantil.html" class="link-menu"><span>Infantil</span></a></li>
				<li class="opMenu"><a href="moletons.html" class="link-menu"><span>Moletons</span></a></li>
				<li class="opMenu"><a href="acessorios.html" class="link-menu"><span>Acessórios</span></a></li>
			</ul>
			<!--
			<section class="subMenu-inferior"></section>
			-->
		</nav>
	</header>
	<article id="sombra-menu"></article>

    <article class="container">

		<section class="containerImagem">
			<!--<img src="./imagens/produtos/moletons/kimetsu-masks-canguru-unissex.jpg" class="produto">-->
			<?php
				while($user_data = mysqli_fetch_assoc($result)){
					echo "<img class='produto' src=".$user_data['url']."/>";
				}
			?>
		</section>


		<form class="infs" action="./php/cCompra.php?" method="GET">
			<?php
				while($user_data = mysqli_fetch_assoc($resultName)){
							echo "<h2 class='tituloItem'>".$user_data['nome_produto']."</h2>";
							echo "<h3 class='preco' id='preco'>".$user_data['preco']."</h3>";
							echo "<input type='number' name='id' hidden value='".$user_data['id_produto']."'/>";
				}
				?>

			<!--<h3 class="preco">R$ 59,99</h3>-->

			<div class="separacoes">

				<div class="box">
					<p class="descricao-input">Tamanho</p>

					<select class="tamanho" name="tamanho" id="tamanho">
						<option value="P">P</option>
						<option value="m">M</option>
						<option value="g">G</option>
						<option value="gg">GG</option>
					</select>
				</div>

				<div class="box">

					<p class="descricao-input">Modelo</p>

					<select class="modelo" name="modelo" id="modelo">
						<option value="masculino">Masculino</option>
						<option value="feminino">Feminino</option>
						<option value="unisex">Unissex</option>
					</select>
				</div>

			</div>

			<div class="separacoes">

				<figure class="quantidade-caixa">
					<input type="number" class="quantidade"
					placeholder=" " id="quantidade" name="quantidade">
					<label for="quantidade">Quantidade</label>
				</figure>
			</div>

			<div class="separacoes">
				
				<figure class="frete-caixa">
					<input type="text" id="z" placeholder=" ">
					<label for="z">Calcular Frete</label>
				</figure>

				<button class="calcularFrete"><Span>Calcular</Span></button>

			</div>

			<button type="submit" class="comprar"><span>Comprar</span></button>

		</form>

    </article>

	<footer>
		<div class="itens-rodape">
			<div class="divisoes-rodape">
				<h2></h2><br>

				<a href="https://www.instagram.com/tcc_skinni_grupo5/">
					<i class="fa-brands fa-instagram"></i>
				</a>
			</div>

			<div class="divisoes-rodape">
				<ul>
					<li>
						<a href="">Sobre a Skinni</a>
					</li>

					<li>
						<a href="">Quem somos</a>
					</li>

					<li>
						<a href="">Termos de uso</a>
					</li>

					<li></li>
				</ul>
			</div>

			<div class="divisoes-rodape">
				<h2>Formas de pagamento:</h2>

				<figure class="forma-pagamentos">

					<figure class="tipo-forma-pagamento">
						<img src="./imagens/imagens_pagina/formas_pagamento/visa.png" alt="">
					</figure>

					<figure class="tipo-forma-pagamento">
						<img src="./imagens/imagens_pagina/formas_pagamento/elo.png" alt="">
					</figure>

					<figure class="tipo-forma-pagamento">
						<img src="./imagens/imagens_pagina/formas_pagamento/mercadopago.png" alt="">
					</figure>

					<figure class="tipo-forma-pagamento">
						<img src="./imagens/imagens_pagina/formas_pagamento/boleto.png" alt="">
					</figure>

					<figure class="tipo-forma-pagamento">
						<img src="./imagens/imagens_pagina/formas_pagamento/pix.png" alt="">
					</figure>

				</figure>
			</div>
		</div>

		<div class="copyright"> <h2>© Copyright 2022</h2></div>
	</footer>
    
	<script src="./js/jquery-3.3.1.min.js"></script>
	<script src="./js/okzoom-1.0.min.js"></script>
	
	<script src="./js/comprar.js"></script>

	<script>
		let preco = document.querySelector("#preco").innerText.replace(".",",")

		document.querySelector("#preco").innerText = preco

		//console.log(preco)
	</script>

</body>
</html>