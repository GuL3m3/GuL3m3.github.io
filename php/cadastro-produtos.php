<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>turdus</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Open+Sans:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css"/>
    <link rel="stylesheet" href="../css/cabecalho.css"/>
    <link rel="stylesheet" href="../css/minha-sacola.css"/>
    <link rel="stylesheet" href="../css/rodape.css"/>
</head>
<body>

<?php
require_once 'conexao.php';

require_once '../upload.php';

$tituloLivro = $_POST['livro-txt'];
$autorLivro = $_POST['autor-txt'];
$sinopseLivro = $_POST['sinopse-livro'];
$precoLivro = $_POST['preco-livro'];
$ficha_tecLivro = $_POST['fichaTec'];
$generoLivro = $_POST['genero'];

$img = uploadImagem($_FILES["nomeImagem"]["tmp_name"], $_FILES["nomeImagem"]["name"], "../");

$precoLivro = str_replace(",", ".", $_POST['preco-livro']);

$comando = "insert into Livro(nomeLivro, nomeAutor, sinopse, preco, fichaTecnica, idGenero, nomeImagem) 
            values ('$tituloLivro', '$autorLivro', '$sinopseLivro', $precoLivro, '$ficha_tecLivro', '$generoLivro', '$img')";
$rodou = mysqli_query($conexao, $comando);

if ($rodou){
    echo "show!";
    
} else {
    echo "Erro" . mysqli_error($conexao);
}

?>

<a href="listar.php">Clique para ver todos os produtos cadastrados :)</a>

</body>
</html>
