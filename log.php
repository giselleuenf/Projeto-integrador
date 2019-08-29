<?php
	$conn = mysql_connect("127.0.0.1", "root", "") or die ("Nao foi possivel conectar!");
	mysql_select_db("pj") or die ("Tabela nao encontrada!");

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$com = $_POST["comentario"];
	$data = date("d/m/Y H:i");
    echo $data;
	$inserir = mysql_query("INSERT INTO cadastro (nome, email, Comentario, data, visivel) VALUES ('$nome', '$email', '$com', '$data','N')") or die (mysql_error());

	 header('Location: Noticias.php'); 
?>