

<?php
	session_start();
    include_once('config.php');
    $sql = "SELECT * FROM cadastro_maquina ORDER BY grupocadastro_maquina DESC";

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grupos</title>
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/scripts.js" defer></script>
  </head>
  <body>
    
	


  <div>
		Lista de Maquinas

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
                    echo "<td>".$user_data['nomecadastro_maquina']."</td>";
                    echo "<td>".$user_data['estadocadastro_maquina']."</td>";
                    echo "<td>".$user_data['funcionandocadastro_maquina']."</td>";
                    echo "<td>".$user_data['fornecedorcadastro_maquina']."</td>";
                    echo "<td>".$user_data['grupocadastro_maquina']."</td>";
                }
                    ?>
            </tbody>
        </table>
        
    </div>
	</div>

	







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

                $sql = "SELECT * FROM cadastro_funcionario ORDER BY nomeCadastro_funcionario DESC";

                $result = $conexao->query($sql);

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

                $sql = "SELECT * FROM cadastro_ferramenta ORDER BY nomecadastro_ferramenta DESC";

                $result = $conexao->query($sql);

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

	





  </body>
</html>
