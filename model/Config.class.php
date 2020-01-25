<?php 

Class Config{

	//INFORMÃÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "loja";
	const SITE_NOME = "Loja do Freitas - PHP 7 e Mysqli";
	const SITE_EMAIL_ADM = "lojavirtualfreitas@gmail.com";


	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "lojafreitas",
		  BD_PREFIX = "";


	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "lojavirtualfreitas@gmail.com";
	const EMAIL_NOME = "Contato Loja Freitas";
	const EMAIL_SENHA = "lojadofreitas";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "lojavirtualfreitas@gmail.com";



}
 ?>

