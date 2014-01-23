<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'suporte@weboox.com.br';  

	// prepare message 
	$body = "Você tem uma nova mensagem de seu website :
	
	Name:  $_POST[name]
	Email:  $_POST[email]
	Subject:  $_POST[subject]
	Message:  $_POST[message]";


	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Message from Megabiz', $body, $headers );

}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Obrigado!</title>
</head>
<body>
<p> <img src="img/bullet-checkmark.png" alt="icon" style=" margin-right: 10px;">Obrigado! Nós entraremos em contato com você em breve.</p>
</body>
</html>