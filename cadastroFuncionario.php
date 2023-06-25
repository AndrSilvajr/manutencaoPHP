

<?php
	session_start();
    include_once('config.php');
    $sql = "SELECT * FROM cadastro_funcionario ORDER BY nomeCadastro_funcionario DESC";

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro Funcionario</title>
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/scripts.js" defer></script>
  </head>
  <body>



    Funcionario
    <button id="open-modal">Cadastrar</button>
    <div id="fade" class="hide"></div>

	<div>
		Lista de Funcionarios

    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Sálario</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Email</th>
                    <th scope="col">CPF</th>
                    <th scope="col">RG</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Sexo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$user_data['nomeCadastro_funcionario']."</td>";
                    echo "<td>".$user_data['cargoCadastro_funcionario']."</td>";
                    echo "<td>".$user_data['dataNacimentoCadastro_funcionario']."</td>";
                    echo "<td>".$user_data['cidadeCadastro_funcionario']."</td>";
                    echo "<td>"."R$ ".$user_data['salarioCadastro_funcionario']."</td>";
                    echo "<td>".$user_data['ruaCadastro_funcionario']."</td>";
                    echo "<td>".$user_data['complementoCadastro_funcionario']."</td>";
                    echo "<td>".$user_data['emailCadastro_funcionario']."</td>";
                    echo "<td>".$user_data['CPFCadastro_funcionario']."</td>";
                    echo "<td>".$user_data['RGCadastro_funcionario']."</td>";
                    echo "<td>".$user_data['grupoCadastro_funcionario']."</td>";
                    echo "<td>".$user_data['sexoCadastro_funcionario']."</td>";
                }
                    ?>
            </tbody>
        </table>
        
    </div>
	</div>

	




























    <div id="modal" class="hide">
      <div class="modal-header">
        <h2>Cadastro funcionario</h2>
        <button id="close-modal">Fechar</button>
      </div>


      <div class="modal-body">
      <?php
    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $sexo = $_POST['genero'];
        $data = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $complemento = $_POST['complemento'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $grupo = $_POST['grupo'];
        $cargo = $_POST['cargo'];
        $salario = $_POST['salario'];
        $dado =  "INSERT INTO cadastro_funcionario( nomeCadastro_funcionario,
                                                    cargoCadastro_funcionario,
                                                    dataNacimentoCadastro_funcionario,
                                                    cidadeCadastro_funcionario,
                                                    salarioCadastro_funcionario,
                                                    ruaCadastro_funcionario,
                                                    complementoCadastro_funcionario,
                                                    emailCadastro_funcionario,
                                                    CPFCadastro_funcionario,
                                                    RGCadastro_funcionario,
                                                    grupoCadastro_funcionario,
                                                    sexoCadastro_funcionario)
         VALUES ('$nome','$cargo','$data','$cidade','$salario','$endereco','$complemento','$email','$cpf','$rg','$grupo','$sexo')";
        
        mysqli_query($conexao,$dado);
    }

?>

	  <form action="cadastroFuncionario.php" method="POST">
            <fieldset>
                <br>
			<div class="table-wrapper">
                <div class="inputBox">
                    <input type="text" name="nome" class="inputUser" required placeholder="Nome Completo">
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" class="inputUser" required placeholder="Email">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" class="inputUser" required placeholder="Telefone">
                </div>
                <p>Sexo:</p>
                <input type="radio" name="genero" value="F" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" value="M" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" value="O" required>
                <label for="outro">Outro</label>
                <br><br>
                    <input type="date" name="data_nascimento" class="inputUser" required placeholder="data de Nascimento" min = '1963-01-01' max = '2005-01-01'>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" class="inputUser" required placeholder="Cidade">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" class="inputUser" required placeholder="Estado">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" class="inputUser" required placeholder="Endereço">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="complemento" class="inputUser" required placeholder="Complemento">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" class="inputUser" required placeholder="CPF">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="rg" class="inputUser" required placeholder="RG">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="grupo" class="inputUser" required placeholder="Grupo">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cargo" class="inputUser" required placeholder="Cargo">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="salario" class="inputUser" required placeholder="Salário">
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
