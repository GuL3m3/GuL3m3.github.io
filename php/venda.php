<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda conosco</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Open+Sans:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/detalhes.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/cadastros.css">
</head>
<body>
    <div class="cabecalho"> 
        <a href="../index.html">
          <img src="../imagens/logo.png" class="logo"/>
        </a>
        <!-- <form class="busca" action="#">
            <div class="busca-caixa">
              <input  class="busca-campo" placeholder="O que deseja?"/>
              <button class="busca-botao">
                <ion-icon class="busca-botao-icone" name="search-outline"></ion-icon>
              </button>
            </div>
          </form> -->
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
    
    <div class="formProdutos">
      <div class="tabela">
        <div class="lista-alteracao">
          <h3 class="subtitulo">Alteração</h3>
            <ul>
              <li>
                <a class="link" href="venda.php">Novo produto</a> 
              </li>
              <li>
                <a class="link" href="../cadastros/dashboard.html">Todos os produtos</a> 
              </li>
            </ul>
        </div>
      
        <div class="lista-relatorio">
          <h3 class="subtitulo">Relatórios</h3>
            <ul>
              <li>
                <a class="link" href="https://media1.giphy.com/media/Aausss8uUBIe3bZ3d2/giphy.gif" target="_blank">Relatório 1</a> 
              </li>
              <li>
                <a class="link" href="https://media3.giphy.com/media/4HhnFGRjkSLEKYl9cA/giphy.gif" target="_blank">Relatório 2</a> 
              </li>
              <li>
                <a class="link" href="https://media3.giphy.com/media/IE0K3snjKEar8fghVN/giphy.gif" target="_blank">Relatório 3</a> 
              </li>
            </ul>
        </div>
      </div>
      <div class="formulario-venda">
        <h3 class="titulo">Venda seu livro conosco</h3>
         <form action="cadastro-produtos.php" method="POST"  enctype="multipart/form-data">
          <div class="nomeLivro">
            <label for="nomeLivro">Nome do Livro</label>
            <input class="inputLivro" type="text" name="livro-txt">
          </div>

          <div class="nomeAutor">
            <label for="nomeAutor">Nome do Autor(a)</label>
            <input class ="inputAutor" type="text" name="autor-txt">
          </div>

          <div class="sinopse">
            <label for="sinopse">Sinopse</label>
            <input class = "inputSinopse" type="text" name="sinopse-livro" >
          </div>

          <div class="preco">
            <label for="preco">Preço</label>
            <input class ="inputPreco" type="text" name="preco-livro">
          </div>

          <div class="fichaTec">
            <label for="fichaTec">FichaTécnica</label>
            <input class ="inputFichaTec" type="text" name="fichaTec">
          </div>

          <div class="genero">
            <label for="genero">Gênero</label>
            <select class ="inputGenero" name="genero"> 

              <?php
              require_once 'conexao.php';

              $comando = "SELECT * FROM tblgeneros";
              $resultado = mysqli_query($conexao, $comando);

              ?>
              <?php
              while ($linha = mysqli_fetch_assoc($resultado)) {
              ?>
                <option value="<?=$linha['idGenero']?>">
                  <?=$linha['genero']?>
                </option>
              <?php
              }
              ?>
              <!-- // <option class="genero"> Biografia</option>
              // <option class="genero"> Fantasia e Fantasia Científica</option>
              // <option class="genero"> Ficção Científica</option>
              // <option class="genero"> Horror</option>
              // <option class="genero"> Mistério/Suspense</option>
              // <option class="genero"> Chick lit</option>
              // <option class="genero"> Épico/Aventura</option> -->
              ?>

            </select>
          </div>

          <div class="uplImg">
            <label for="uplImg">Upload de Imagem</label>
            <input class ="input-uplImg" type="file" name="nomeImagem">
          </div>
        
          <div class="botao">
            <button class="cadastrar-venda" type="submit">Cadastrar produto</button>
          </div>
        </form>
      </div>
    </div>

    <div class="rodape">
        <img src="../imagens/logo.png" class="logo"/>
        <div class="menu">
          <a href="../sobre/sobre.html" class="menu-link">Sobre nosso destrito</a>
          <a href="../cadastros/venda.html" class="menu-link">Venda conosco</a>
          <a href="https://media4.giphy.com/media/Db7KR3SLgRUVfqKp0V/giphy.gif" class="menu-link">Ajuda</a>
          <a href="https://media4.giphy.com/media/AGp68I6eKt6pREoZYq/giphy.gif" class="menu-link">Pagamento</a>
        </div>
    </div>
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>