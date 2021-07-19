<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Open+Sans:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/cabecalho.css"/>
    <link rel="stylesheet" href="css/home.css"/>
    <link rel="stylesheet" href="css/rodape.css"/>
 
</head>
<body>

  <div class="cabecalho"> 
    <a href="index.css">
      <img src="imagens/logo.png" class="logo"/>
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
          <a class="link" href="cadastros/login.html">
            <ion-icon class="usuario-icone" name="person-circle-outline"></ion-icon>
            <p class="usuario-texto">Seja um tributo <br/> <span>ou faça o login</span></p>
          </a>
        </div>
        <div class="carrinho">
          <a class="link" href="sacola/minha-sacola.html">
            <ion-icon class="carrinho-icone" name="bag-handle-outline"></ion-icon>
            <p class="carrinho-texto">Minha<br/><span>sacola</span></p>
          </a>
        </div>
      </div>
  </div>
  <div>
    <div class="propaganda">
      <a href="https://filoseditora.com.br/produto/a-vila-perdida-de-el-dezpizatto/" target="blank">
        <img src="imagens/propaganda.png" alt="">
      </a>
    </div>
    <div class="produtos">
      <?php
      require "php/conexao.php";

        // $conexao = mysqli_connect("localhost", "root", "", "dbturdus");
        $comando = "SELECT * FROM Livro";
        $resultado = mysqli_query($conexao, $comando);
      ?>

      <?php
        while ($linha = mysqli_fetch_assoc($resultado)) {
      ?>
      <div class="livros">
        <div class="livro">
        <a href="php/detalhes_livro.php?idLivro=<?=$linha['idLivro']?>">
          <img class="livro-capa" src="<?=$linha['nomeImagem']?>" alt="IMAGEM">
            <p class="livro-titulo"><?=$linha['nomeLivro']?></p>
            <h5 class="livro-preco"><?=$linha['preco']?></h5>
          </a>
        </div> 
      </div> 
      <?php
        }
      ?>
    </div>
  </div>
    <div class="rodape">
      <img src="imagens/logo.png" class="logo"/>
      <div class="menu">
        <a href="sobre/sobre.html" class="menu-link">Sobre nosso destrito</a>
        <a href="php/venda.php" class="menu-link">Venda conosco</a>
        <a href="https://media4.giphy.com/media/Db7KR3SLgRUVfqKp0V/giphy.gif" class="menu-link">Ajuda</a>
        <a href="https://media4.giphy.com/media/AGp68I6eKt6pREoZYq/giphy.gif" class="menu-link">Pagamento</a>
      </div>
    </div>

  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>