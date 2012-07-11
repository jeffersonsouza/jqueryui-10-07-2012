<?php
header('Content-Type: text/html; charset=utf-8');

$xml = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?cep=" . $_GET['cep']);

if($xml->resultado == 1){
	$endereco = "<h4>Endereço</h4>";
	$endereco .= "<p>" . $xml->tipo_logradouro . ' ' . $xml->logradouro . "</p>";
	$endereco .= "<p>" . $xml->bairro . ' - ' . $xml->cidade . ' - ' . $xml->uf . "</p>";
	$endereco .= "<p>CEP.:" . $_GET['cep'] . "</p>";
	
	echo $endereco;
} else {
	echo 'O cep informado não está cadastrado em nossa base';
}