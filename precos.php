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
		<section>
      <h1>Escolhas Sua Opção</h1>
        <table border="1"> <!--não usar border. deixar em CSS-->
          <tr>
              <th>Pequena</th>
              <th>Média</th>
              <th>Grande</th>
          </tr>
          <tr>
              <td>Conteúdo</td>
              <td>Conteúdo</td>
              <td>Conteúdo</td>
          </tr>
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