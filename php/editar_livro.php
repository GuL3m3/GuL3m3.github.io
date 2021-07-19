<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Open+Sans:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/detalhes.css">
    <link rel="stylesheet" href="../css/rodape.css">
</head>
<body>
    <div class="cabecalho"> 
        <a href="../index.html">
            <img src="../imagens/logo.png" class="logo"/>
        </a>
        <form class="busca">
          <div class="busca-caixa">
            <input  class="busca-campo" placeholder="O que deseja?"/>
            <button class="busca-botao">
              <ion-icon class="busca-botao-icone" name="search-outline"></ion-icon>
            </button>
          </div>
        </form>
        <div class="direita">
            <div class="usuario">
              <a class="link" href="../cadastros/login.html">
                <ion-icon class="usuario-icone" name="person-circle-outline"></ion-icon>
                <p class="usuario-texto">Seja um tributo <br/> <span>ou faça o login</span></p>
              </a>
            </div>
            <div class="carrinho">
              <a class="link" href="../sacola/minha-sacola.html">
                <ion-icon class="carrinho-icone" name="bag-handle-outline"></ion-icon>
                <p class="carrinho-texto">Minha<br/><span>sacola</span></p>
              </a>
            </div>
          </div>
      </div>
    </div>

    <?php
        require_once 'conexao.php';

        $id_livro = $_GET['idLivro'];
        $comando = "SELECT * FROM Livro WHERE idLivro = $id_livro";
        $resultado = mysqli_query($conexao, $comando);
        $linha = mysqli_fetch_assoc($resultado);
    ?>

    <div class="formulario-venda">
      <h3 class="titulo">Editar</h3>
        <form action="alterar_produto.php" method="POST"  enctype="multipart/form-data">
          <!-- <input type="hidden" name="idLivro" value="<?=$linha['idLivro']?>"> -->
          <div class="nomeLivro">
            <label for="nomeLivro">Nome do Livro</label>
            <input type="hidden" name="idLivro" value="<?=$linha['idLivro']?>">
            <input class="inputLivro" type="text" name="livro-txt" value="<?=$linha['nomeLivro']?>">
          </div>

          <div class="nomeAutor">
            <label for="nomeAutor">Nome do Autor(a)</label>
            <input class ="inputAutor" type="text" name="autor-txt" value="<?=$linha['nomeAutor']?>">
          </div>

          <div class="sinopse">
            <label for="sinopse">Sinopse</label>
            <input class = "inputSinopse" type="text" name="sinopse-livro" value="<?=$linha['sinopse']?>">
          </div>

          <div class="preco">
            <label for="preco">Preço</label>
            <input class ="inputPreco" type="text" name="preco-livro" value="<?=$linha['preco']?>">
          </div>

          <div class="fichaTec">
            <label for="fichaTec">FichaTécnica</label>
            <input class ="inputFichaTec" type="text" name="fichaTec" value="<?=$linha['fichaTecnica']?>">
          </div>

          <div class="uplImg">
            <label for="uplImg">Upload de Imagem</label>
            <input class ="input-uplImg" type="file" name="nomeImagem" value="<?=$linha['nomeImagem']?>">
          </div>
        
          <div class="botao">
            <button class="cadastrar-venda" type="submit">Cadastrar produto</button>
          </div>
        </form>
    </div>

    <div class="rodape">
      <img src="../imagens/logo.png" class="logo"/>
      <div class="menu">
        <a href="../sobre/sobre.html" class="menu-link">Sobre nosso destrito</a>
        <a href="../php/venda.php" class="menu-link">Venda conosco</a>
        <a href="https://media4.giphy.com/media/Db7KR3SLgRUVfqKp0V/giphy.gif" class="menu-link">Ajuda</a>
        <a href="https://media4.giphy.com/media/AGp68I6eKt6pREoZYq/giphy.gif" class="menu-link">Pagamento</a>
      </div>
    </div>
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>