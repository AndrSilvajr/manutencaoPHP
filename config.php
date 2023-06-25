<?php

    $dbdHost = 'localhost';
    $dbdUsername = 'root';
    $dbdPasswoed = '';
    $dbdName = 'manutencao';

    $conexao = new mysqli($dbdHost,$dbdUsername,$dbdPasswoed,$dbdName);

    //if($conexao->connect_errno)
    //{
      //  echo "erro";
    //}
    //else{
      //  echo "foi";
    //}

?>