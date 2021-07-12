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
			<h1>Entre em Contato</h1>
      <aside>
        <h2>Envie Sua Mensagem</h2>
        <div>
          <label for="nome">*Nome:
            <input type="text" name="nome" size="80" id="nome">
          </label>
        </div>
        <div>
          <label for="email">*E-mail:
            <input type="email" name="email" size="80" id="email">
          </label>
        </div>
        <div>
          <label>Mensagem:<br>
            <textarea name="obs" rows="5" cols="50"></textarea>
          </label>
        </div>
      </aside>
		</section>
    <section>
      <aside>
        <h2>Endereço</h2>
        <address>
          Endereço: Yosemite National Park, Sierra Nevada<br>
          California - United States of America
          <p>E-mail: contato@bears.com</p>
          <p>Fone: +12093720200</p>
        </address>
      </aside>
		</section>
    <section>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d403240.0035873217!2d-119.8312959809544!3d37.85297716348046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8096f09df58aecc5%3A0x2d249c2ced8003fe!2sParque%20Nacional%20de%20Yosemite!5e0!3m2!1spt-BR!2sbr!4v1625969910817!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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