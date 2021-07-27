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
      <h2 class="titulo-main">Entre em Contato</h1>
      <div class="contato">
      <fieldset>
        <legend>Formulário</legend>
        <form id="formulario">
          <div>
              <label for="nome" class="rotulo">Nome completo:</label><br>
              <input type="text" name="nome" id="nome" size="50" maxlength="50" required autocomplete="off" autofocus>
          </div>
          <div>
              <label for="email" class="rotulo">E-mail:</label><br>
              <input type="email" name="enderecoEmail" id="email" size="50" maxlength="50" placeholder="nome@dominio">
          </div>
          <div>
              <label for="fone" class="rotulo">Telefone:</label><br>
              <input type="tel" name="telefone" id="fone" placeholder="(xx)xxxxx-xxxx">
          </div>
          <div>
              <label for="assunto" class="rotulo">Assunto:</label><br>
              <select name="assunto" id="assunto">
                  <option value="0">Selecione</option>
                  <option value="1">Dúvidas</option>
                  <option value="2">Sugestões</option>
                  <option value="3">Críticas</option>
                  <option value="4">Elogios</option>
              </select>
          </div>
          <div>
              <label for="msg">Mensagem:</label><br>
              <textarea name="mensagem" id="msg" size="50"></textarea>
          </div>
          <div>
              <input type="submit" name="enviar" value="Enviar">
              <input type="reset" name="limpar" value="Limpar campos">
          </div>
        </form>
      </fieldset>
        <details>
          <summary>Ver endereço completo</summary>
          <address>
            Endereço: Yosemite National Park, Sierra Nevada<br>
            California - United States of America
            <p>E-mail: contato@bears.com</p>
            <p>Fone: +12093720200</p>
          </address>
        </details>
      </div>
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