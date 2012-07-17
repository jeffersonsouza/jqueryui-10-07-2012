<?php

if(!empty($_POST['nome'])){
	
	mysql_connect('localhost', 'root', 'root') or die(mysql_error()); //rostie2006
	mysql_select_db('jquery') or die(mysql_error());
	
	$nome = htmlspecialchars($_POST['nome'], ENT_QUOTES);
	$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
	$cep = htmlspecialchars($_POST['cep'], ENT_QUOTES);
	
	$query = "insert into clientes (
		nome, email, cep
	) values (
		'$nome', '$email', '$cep'
	)";
	
	$cadastro = mysql_query($query) or die(mysql_error());
	
	if($cadastro){
		echo true;
	} else {
		echo false;
	}
}