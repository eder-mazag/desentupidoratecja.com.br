<?php 

/*

* Formulário padrão de site

* Ajustar conforme necessidade

*/

ob_start();

// Verificação de spam

if(!empty($_POST) || isset($_POST)){

	// criar input com o name 'emailText' para a validação do spam (opcional) e também atribuir o type="hidden"

	$emailSpam = $_POST["emailText"];

	if(!empty($emailSpam)){

		$spam=true;

	}	

}else{

	$spam=true;

}

if (preg_match( "/bcc:|cc:|multipart|\[url|Content-Type:/i", implode($_POST)) || preg_match_all("/<a|http:/i", implode($_POST), $out) > 3) {

	$spam=true;  

}

if(@$spam != true){

	// Defina Timezone para São Paulo

	date_default_timezone_set("America/Sao_Paulo");

	// Ajustar conforme o tipo de formulário que você construiu

	$Name = $_POST["name"];

	$Phone = $_POST["phone"];

	//$DataEnvio = @date("d/m/y - h:i:s A");

	$ip = $_SERVER["REMOTE_ADDR"];

	$AssuntoEmail = "Contato do Site ".$_SERVER['HTTP_HOST']."  ".$DataEnvio."";



	// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

	require("phpmailer/class.phpmailer.php");

	 

	// Inicia a classe PHPMailer

	$mail = new PHPMailer();

	 

	// Define os dados do servidor e tipo de conexão

	$mail->IsSMTP(); // Define que a mensagem será SMTP

	$mail->CharSet = 'UTF-8'; // Charset da mensagem

	$mail->Host = "mail.mazag.com.br"; // Endereço do servidor SMTP

	$mail->SMTPSecure = "tls"; // conexão segura com TLS

	$mail->SMTPAuth = false; // Colocar true para fazer a autenticação

	$mail->Port  = '587';

	$mail->Username = 'form@barbieriwetzker.adv.br'; // Usuário do servidor SMTP

	$mail->Password = 'Q,d8dWkPS31J'; // Senha da caixa postal utilizada

 

	// Define o remetente

	$EmailEmpresa = "eder@mazag.com.br"; // Seu e-mail

	$mail->From = $Phone; // email solicitante

	$mail->Sender = "eder@mazag.com.br"; // Seu e-mail

	$mail->FromName = $Name; // nome solicitante

	 

	// Define os destinatário(s)

	$mail->AddAddress($EmailEmpresa);

	// $mail->AddCC('mazag.vitor@gmail.com'); // Copia

	$mail->AddBCC('forms.mazag@gmail.com'); // Cópia Oculta
	
	// $mail->AddBCC('gustavo.mazag@gmail.com'); // Cópia Oculta

	 

	// Define os dados técnicos da Mensagem

	$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

	 

	// Define a mensagem (Texto e Assunto)

	// ajustar conforme as variaveis que você atribuiu acima

	$Corpo = "<b>Nome: </b>".$Name."<br>";

	$Corpo .= "<b>Celular: </b>".$Phone."<br>";

	$mail->Subject = $AssuntoEmail; // Assunto da mensagem

	$mail->Body = $Corpo;



	// Define os anexos (opcional)

	//$mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );

	//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo

	 

	// Envia o e-mail

	$enviado = $mail->Send();

	 

	if ($enviado) {

		// se foi enviado redireciona para a pagina

		// header ("Location: ../obrigado.php");

		echo('<script>window.location.replace("../obrigado.php");</script>');

	} else {

		// caso ao contrario ele exibe o erro

		echo "Não foi possível enviar o e-mail.";

		echo "Informações do erro: " . $mail->ErrorInfo;

	}

}	

?>