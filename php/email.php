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
	$destino = "contato@grupomgservice.com.br";
	$arquivo = isset($_FILES["input__cv"]) ? $_FILES["input__cv"] : FALSE;
	//Com anexo
	if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){
		$fp = fopen($_FILES["input__cv"]["tmp_name"],"rb");
		$anexo = fread($fp,filesize($_FILES["input__cv"]["tmp_name"]));
		$anexo = base64_encode($anexo);
		fclose($fp);
		$anexo = chunk_split($anexo);
		$boundary = "XYZ-" . date("dmYis") . "-ZYX";
		$body = "--$boundary\n";
		$body .= "Content-Transfer-Encoding: 8bits\n";
		$body .= "Content-Type: text/html; charset=\"ISO-8859-1\"\n\n"; //plain
		$body .= str_replace(array('$assunto', '$nome', '$email', '$telefone', '%telefonetipo', '$mensagem'), array($assunto, $nome, $email, $telefone, $telefonetipo, $mensagem) ,file_get_contents('../mail.html'));
		$body .= "--$boundary\n";
		$body .= "Content-Type: ".$arquivo["type"]."\n";
		$body .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";
		$body .= "Content-Transfer-Encoding: base64\n\n";
		$body .= "$anexo\n";
		$body .= "--$boundary--\r\n";
		$headers = "MIME-Version: 1.0\n";
		$headers .= "From: \"$nome\" <$email>\r\n";
		$headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
		$headers .= "$boundary\n";
	}
	//Sem anexo
	else{
		$body = str_replace(array('$assunto', '$nome', '$email', '$telefone', '%telefonetipo', '$mensagem'), array($assunto, $nome, $email, $telefone, $telefonetipo, $mensagem) ,file_get_contents('../mail.html'));
		//Enviar email
		$headers  = 'MIME-Version: 1.0'."\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
		$headers .= "From: \"$nome\" <$email>\r\n";
	}
	if(mail($destino, $assunto, $body, $headers)){
		$retorno = "Mensagem enviada com sucesso, aguarde nosso contato.";
	} else {
		$retorno = "Ops, houve um erro. Tente novamente mais tarde.";
	}
	echo $retorno;
?>
