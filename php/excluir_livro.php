<?php
require_once 'conexao.php';

$id_livro = $_GET['idLivro'];

$comando = "DELETE FROM Livro WHERE idLivro = $id_livro";
$resultado = mysqli_query($conexao, $comando);

if ($resultado) {
    echo "Livro EXCLUÍDO";
} else {
    echo "Deu ruim" . mysqli_error($conexao);
}

?>