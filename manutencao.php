

<?php
    include_once('config.php');
    $sql = "SELECT * FROM cadastro_manutencao ORDER BY grupocadastro_manutencao DESC";

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manutenção</title>
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/scripts.js" defer></script>

  </head>
  <body>



    <h1>Manutencao</h1>
    <button id="open-modal">Nova</button>
    <div id="fade" class="hide"></div>

	<div>
		Lista de Manutencoes

    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Grupo</th>
                    <th scope="col">Maquina</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Chefe</th>
                    <th scope="col">Orsamento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$user_data['grupocadastro_manutencao']."</td>";
                    echo "<td>".$user_data['maquinacadastro_manutencao']."</td>";
                    echo "<td>".$user_data['datacadastro_manutencao']."</td>";
                    echo "<td>".$user_data['horacadastro_manutencao']."</td>";
                    echo "<td>".$user_data['responsavelcadastro_manutencao']."</td>";
                    echo "<td>"."R$ ".$user_data['orsamentocadastro_manutencao']."</td>";
                }
                    ?>
            </tbody>
        </table>
        
    </div>
	</div>

	




























    <div id="modal" class="hide">
      <div class="modal-header">
        <h2>Nova Manutencao</h2>
        <button id="close-modal">Fechar</button>
      </div>


     <div class="modal-body">
      <?php
    if(isset($_POST['submit']))
    {


        

        $maquina = $_POST['maquina'];
        $grupo = $_POST['grupo'];
        $data = $_POST['data'];
        $hora = $_POST['hora'].":00";
        $responsavel = $_POST['responsavel'];
        $orsamento = $_POST['orsamento'];
        $dado =  "INSERT INTO cadastro_manutencao(  grupocadastro_manutencao,
                                                    maquinacadastro_manutencao,
                                                    datacadastro_manutencao,
                                                    horacadastro_manutencao,
                                                    responsavelcadastro_manutencao,
                                                    orsamentocadastro_manutencao)
         VALUES ('$grupo','$maquina','$data','$hora','$responsavel','$orsamento')";
        
        mysqli_query($conexao,$dado);
        
    }

?>

	  <form action="manutencao.php" method="POST">
            <fieldset>
                <br>
			<div class="table-wrapper">
                <div class="inputBox">
                    <input type="text" name="maquina" class="inputUser" required placeholder="Maquina">
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="grupo" class="inputUser" required placeholder="Grupo">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="date" name="data" class="inputUser" required placeholder="data">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="time" name="hora" class="inputUser" required placeholder="Hora">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="responsavel" class="inputUser" required placeholder="Funcionario responsavel">
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="orsamento" class="inputUser" required placeholder="Orsamento">
                </div>
                <br><br>
                <input type="submit" name="submit" value="OK">
			</div>
            </fieldset>
        </form>	


      </div>
    </div>
  </body>
</html>
