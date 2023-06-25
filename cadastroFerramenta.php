

<?php
	session_start();
    include_once('config.php');
    $sql = "SELECT * FROM cadastro_ferramenta ORDER BY nomecadastro_ferramenta DESC";

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro Ferramenta</title>
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/scripts.js" defer></script>
  </head>
  <body>



    Ferramenta
    <button id="open-modal">Cadastrar</button>
    <div id="fade" class="hide"></div>

	<div>
		Lista de Ferramentas

    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Funcionando</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Grupo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$user_data['nomecadastro_ferramenta']."</td>";
                    echo "<td>".$user_data['estadocadastro_ferramenta']."</td>";
                    echo "<td>".$user_data['funcionandocadastro_ferramenta']."</td>";
                    echo "<td>".$user_data['fornecedorcadastro_ferramenta']."</td>";
                    echo "<td>".$user_data['grupocadastro_ferramenta']."</td>";
                }
                    ?>
            </tbody>
        </table>
        
    </div>
	</div>

	




























    <div id="modal" class="hide">
      <div class="modal-header">
        <h2>Cadastro ferramenta</h2>
        <button id="close-modal">Fechar</button>
      </div>


      <div class="modal-body">
      <?php
    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $fornecedor = $_POST['fornecedor'];

        $dado =  "INSERT INTO cadastro_ferramenta( nomecadastro_ferramenta,
                                                    estadocadastro_ferramenta,
                                                    funcionandocadastro_ferramenta,
                                                    fornecedorcadastro_ferramenta,
                                                    grupocadastro_ferramenta
                                                    )
         VALUES ('$nome','novo','1','$fornecedor','novo')";
        
        mysqli_query($conexao,$dado);
    }

?>

	  <form action="cadastroFerramenta.php" method="POST">
            <fieldset>
                <br>
			<div class="table-wrapper">
                <div class="inputBox">
                    <input type="text" name="nome" class="inputUser" required placeholder="Nome">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="fornecedor" class="inputUser" required placeholder="Fornecedor">
                </div>
                <br><br>

                <input type="submit" name="submit" value="Cadastrar">
			</div>
            </fieldset>
        </form>	


      </div>
    </div>
  </body>
</html>
