<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'suporte@weboox.com.br';  

	// prepare message 
	$body = "Você tem nova solicitação se inscrever a partir de seu site :
	

	Email:  $_POST[email]";


	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Assinar notícias Weboox', $body, $headers );

}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Obrigado!</title>
</head>
<body>
<p><strong>Bem-vindo a Weboox!!!</strong></p>
</body>
</html>