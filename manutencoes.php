

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Manutencao</title>
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/scripts.js" defer></script>
  </head>
  <body>
    
	<div>
		Lista de Manutencoes

    </div>
    <div class = "box-search">
        <imput type="search" class="form-control w-25" placehouder="Pesquisa" id="pesquisar">
        
    </div>
    <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Maquina</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Chefe</th>
                    <th scope="col">Orsamento</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$user_data['maquinacadastro_manutencao']."</td>";
                    echo "<td>".$user_data['datacadastro_manutencao']."</td>";
                    echo "<td>".$user_data['horacadastro_manutencao']."</td>";
                    echo "<td>".$user_data['responsavelcadastro_manutencao']."</td>";
                    echo "<td>"."R$ ".$user_data['orsamentocadastro_manutencao']."</td>";
                    echo "<td>".$user_data['grupocadastro_manutencao']."</td>";
                    echo "<td>
                        <a class='btn btn-sm btn-primary'  href='edit.php?id=$user_data[maquinacadastro_manutencao]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                }
                    ?>
            </tbody>
        </table>
        
    </div>
	</div>

  </body>
</html>
