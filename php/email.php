<?php
	//Entrada dos dados
	$nome = $_POST['input__nome'];
	if(isset($POST['input__email'])){
		$email = $_POST['input__email'];
	}
	else{
		$email = 'Não informado';
	}
	$telefone = $_POST['input__telefone'];
	$telefonetipo = $_POST['input__telefonetipo'];
	$assunto = $_POST['input__assunto'];
	$mensagem = $_POST['input__mensagem'];
	//Corpo E-mail
	$arquivo = "
	<style type='text/css'>
	body {
	margin:0px;
	font-family:Verdane;
	font-size:12px;
	color: #666666;
	}
	a{
	color: #666666;
	text-decoration: none;
	}
	a:hover {
	color: #FF0000;
	text-decoration: none;
	}
	</style>
	<html>
	    <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
	        <tr>
	          <td>
				<tr>
				    <td width='500'>Nome:$nome</td>
				</tr>
				<tr>
				    <td width='320'>E-mail:<b>$email</b></td>
				</tr>
					<tr>
					    <td width='320'>Telefone:<b>$telefone</b></td>
					</tr>
					<tr>
					    <td width='320'>Tipo do Telefone:<b>$telefonetipo</b></td>
					</tr>
				<tr>
	            <td width='320'>Motivo do Contato:$assunto</td>
	            </tr>
	            <tr>
	              <td width='320'>Mensagem:$mensagem</td>
	            </tr>
	        </td>
	      </tr>  
	      <tr>
	        <td>Este e-mail foi enviado em pelo site: www.grupomgservice.com.br</b></td>
	      </tr>
	    </table>
	</html>
	";
	//Enviar email
	$remetente = "nossoemail";
	$destino = "monteiro@grupomgservice.com.br";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Contato site <$email>';
	$enviaremail = mail($destino, $assunto, $arquivo, $headers, "-f$remetente");
	if($enviaremail){
		$retorno = "Mensagem enviada com sucesso, aguarde nosso contato.";
	} else {
		$retorno = "Ops, houve um erro. Tente novamente mais tarde.";
	}
	echo $retorno;
?>
