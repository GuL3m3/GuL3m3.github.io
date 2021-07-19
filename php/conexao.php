<?php

$conexao = mysqli_connect("localhost", "root", "", "dbturdus");

if (!$conexao){
    echo "Erro" . mysqli_connect_error();
}



?>