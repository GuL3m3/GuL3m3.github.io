
<?php

function uploadImagem($imagem_temp_name, $name_imagem, $path)
{
    $extensao = 	strtolower(substr($name_imagem,-4));
	$novo_nome = 	md5(time()).$extensao;
	$diretorio = 	"imagens/capasUpload/";

	move_uploaded_file($imagem_temp_name ,$path.$diretorio.$novo_nome);

	return $diretorio.$novo_nome;
}

