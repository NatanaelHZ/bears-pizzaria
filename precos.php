<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<?php include 'components/header.php'; ?>
</head>
<body>
	<!-- Cabeçalho e navegação -->
	<?php include 'components/navigation.php'; ?>

	<!-- Cabeçalho e navegação -->
	<?php include 'components/banner.php'; ?>

	<main>
		<section class="precos">
		<h2 class="titulo-main">Escolha sua opção de Pizza...</h1>
			<table class="tabela-preco">
				<thead>
					<tr class="tabela-preco-cabecalho">
						<th>Pequena</th>
						<th>Média</th>
						<th>Grande</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Até 1 Sabor</td>
						<td>Até 2 Sabores</td>
						<td>Até 3 Sabores</td>
					</tr>
					<tr>
						<td>20 centimetros</td>
						<td>30 centimetros</td>
						<td>40 centimetros</td>
					</tr>
					<tr>
						<td>Borda Recheada</td>
						<td>Borda Recheada</td>
						<td>Borda Recheada</td>
					</tr>
					<tr>
						<td>Entrega Grátis</td>
						<td>Entrega Grátis</td>
						<td>Entrega Grátis</td>
					</tr>
				</tbody>
			</table>
		</section>
	</main>
 
	<aside>
	  <h2>Promo do dia:</h2>
	</aside>
 
	<!-- Rodapé das páginas -->
	<?php include 'components/footer.php'; ?>

</body>
</html>
<!--https://stackoverflow.com/questions/37373608/use-php-to-reuse-common-elements-in-websitehtml-->