<main style="margin-top: 10px">
  <hr>
    <h2 class="tittle-page">
      <i class="fa fa-user" aria-hidden="true"></i>
      <?=$titulo?>
    </h2>
    <hr>
    <br><br>
    <p><a style="border: 1px solid green; border-radius: 8px; padding: 5px; color: green" href="adm_sabor.php?acao=cadastra"> <i style="color: green" class="fa fa-user-plus" aria-hidden="true"></i> Cadastrar Novo</a></p>
    <?php
    if(count($lista) == 0){
        echo "<p>Nenhum cliente cadastrado</p>";
    }
    else{
        ?>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
            <?php
            foreach($lista as $sabor){
                ?>
                <tr>
                    <td><?=$sabor->getCodigo()?></td>
                    <td><?=$sabor->getNome()?></td>
                    <td><?=$sabor->getIngredientes()?></td>
                    <td>
                    <a href="adm_sabor.php?acao=altera&cod=<?=$sabor->getCodigo()?>"><i style="color: green" class="fa fa-pencil" aria-hidden="true"></i></a> 
                    | 
                    <a href="adm_sabor.php?acao=exclui&cod=<?=$sabor->getCodigo()?>" onclick="return confirm('Tem certeza que deseja excluir este item?')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    }
    ?>
</main>