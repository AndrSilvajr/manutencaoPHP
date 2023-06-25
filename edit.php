<?php
    include_once('config.php');
    if(!empty($_GET['maquinacadastro_manutencao']))
    {
        
        $parametro = $_GET['maquinacadastro_manutencao']; 

        $sql = "SELECT * FROM cadastro_manutencao WHERE maquinacadastro_manutencao=$parametro";

        $result = $conexao->query($sql);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $maquina = $user_data['maquinacadastro_manutencao'];
                $grupo = $user_data['grupocadastro_manutencao'];
                $data = $user_data['datacadastro_manutencao'];
                $hora = $user_data['horacadastro_manutencao'];
                $responsavel = $user_data['responsavelcadastro_manutencao'];
                $orsamento = $user_data['orsamentocadastro_manutencao'];
            }
        }
        else
        {
            header('Location: manutencoes.php');
        }

    }
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relato</title>
</head>
<body>

    <div class="box">
        <form action="edit.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário Maquina</b></legend>
                <br>
                <div>
                    <?php
                        print_r($maquina);
                    ?>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="grupo" class="inputUser" required value=<?php echo $grupo;?>>
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
</body>
</html>