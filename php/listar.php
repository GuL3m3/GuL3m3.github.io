<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard do ADM</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Open+Sans:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css"/>
    <link rel="stylesheet" href="../css/cabecalho.css"/>
    <link rel="stylesheet" href="../css/minha-sacola.css"/>
    <link rel="stylesheet" href="../css/rodape.css"/>
</head>
<body>
    <div class="cabecalho"> 
        <a href="../index.php">
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

    <div class="main">
        <div class="tabela">
            <div class="lista-alteracao">
              <h3 class="subtitulo">Alteração</h3>
                <ul>
                  <li>
                    <a class="link" href="venda.php">Novo produto</a> 
                  </li>
                  <li>
                    <a class="link" href="listar.php">Todos os produtos</a> 
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
        
            <div class="menu">
                <h3 class="titulo">Livros Cadastrados</h3>

                <?php
                require_once 'conexao.php';

                $comando = "SELECT * FROM Livro";
                $resultado = mysqli_query($conexao, $comando);
                ?>
                <div class="produto">
                    <div class="cima">
                        <h4 class="sub-titulo-livro">Livros</h4>
                        <h4 class="sub-titulo">Estoque</h4>
                        <h4 class="sub-titulo">Remover</h4>
                        <h4 class="sub-titulo">Preço</h4>
                    </div>
                        <?php
                            while ($linha = mysqli_fetch_assoc($resultado)) {
                        ?>
                    <div class="livro">
                        <a href="detalhes_livro.php?idLivro=<?=$linha['idLivro']?>">
                          <img class="imgBox" alt="Imagem" src="<?=$linha['nomeImagem']?>">
                        </a>

                        <div class="descricao">
                            <h5 class="nome">
                                <?=$linha['nomeLivro']?>
                            </h5>
                            <p class="estoque">
                                <?=$linha['nomeAutor']?>
                            </p>
                            <p class="capa">
                                <?=$linha['fichaTecnica']?>
                            </p>
                        </div>
                        
                        <div class="quantidade">
                            <p class="estoque">40</p>
                        </div>
                        <div class="lixeira">
                            <a href="excluir_livro.php?idLivro=<?=$linha['idLivro']?>">
                                <ion-icon class="icone-lixo" name="trash"></ion-icon>
                            </a>
                        </div>
                        <div class="preco">
                            <h3><?=$linha['preco']?></h3>
                        </div>
                        
                        <div class="editar">
                            <a href="editar_livro.php?idLivro=<?=$linha['idLivro']?>">
                                <!-- <ion-icon class="icone-editar" name="hammer"></ion-icon> -->
                                <ion-icon class="icone-editar" name="create-outline"></ion-icon>
                            </a>
                        </div>
                        
                    </div>
                    <?php    
                        }
                        ?>
                </div>
            </div>  
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


