<?php
    require_once 'conexao.php';

    $idLivro = $_POST['idLivro'];
    $tituloLivro = $_POST['livro-txt'];
    $autorLivro = $_POST['autor-txt'];
    $sinopseLivro= $_POST['sinopse-livro'];
    $precoLivro = $_POST['preco-livro'];
    $ficha_tecLivro = $_POST['fichaTec'];

    $comando = "UPDATE Livro SET nomeLivro= '$tituloLivro', nomeAutor='$autorLivro', sinopse='$sinopseLivro', preco='$precoLivro', fichaTecnica='$ficha_tecLivro'
    WHERE idLivro = $idLivro";
    $rodou = mysqli_query($conexao, $comando);

    if($rodou){
        echo "deu!";
    } else {
        echo "nao deu.".mysqli_error($conexao);
    }
    
?>