<?php
	//Entrada dos dados
	$nome = $_POST['input__nome'];
	if(isset($POST['input__email'])){
		$email = $_POST['input__email'];
	}
	if (isset($_POST["input__email"]) && !empty($_POST["input__email"])) {
	    $email = $_POST['input__email']; 
	}else{  
	    $email = "Não informado.";
	}
	$telefone = $_POST['input__telefone'];
	$telefonetipo = $_POST['input__telefonetipo'];
	$assunto = $_POST['input__assunto'];
	$mensagem = $_POST['input__mensagem'];
	//Corpo E-mail
	$arquivo = str_replace(array('$assunto', '$nome', '$email', '$telefone', '%telefonetipo', '$mensagem'), array($assunto, $nome, $email, $telefone, $telefonetipo, $mensagem) ,file_get_contents('../mail.php'));
	//Enviar email
	$remetente = "noreply@grupomgservice.com.br";
	$destino = "contato@grupomgservice.com.br";
	$headers  = 'MIME-Version: 1.0'."\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
	$headers .= 'From: Contato Site <noreply@grupomgservice.com.br>';
	$enviaremail = mail($destino, $assunto, $arquivo, $headers, "-f$remetente");
	if($enviaremail){
		$retorno = "Mensagem enviada com sucesso, aguarde nosso contato.";
	} else {
		$retorno = "Ops, houve um erro. Tente novamente mais tarde.";
	}
	echo $retorno;
?>
