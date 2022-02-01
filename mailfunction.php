<?php

/**** Código elaborado por leandroip.com. ****/

function sharedf_autoload($className)
{
    $filename = 'phpmailer/class.' . strtolower($className) . '.php';
    if (is_readable($filename)) {
        require $filename;
    } else {
        // Error Generation Code Here
        echo "Class not founded: " . $className;
        die();
    }
}
spl_autoload_register("sharedf_autoload");

//Essas configurações normalmente ficam num arquivo de configuração
$sendHtmlEmail_config = [
    "mail_from" => "fale@seuSiteAqui.com",
    "mail_host" => "mail.seuSiteAqui.com",
    "mail_user" => "fale@seuSiteAqui.com",
    "mail_pass" => "sua senha",
    "mail_port" => 465
];

function sendHtmlEmail(
    $to_ar, //Um array de emails para enviar com copias
    $subject, //Assunto da mensagem
    $msgHtml, //Conteúdo em HTML
    $msgPlain, //Conteúdo em texto normal
    $attach = [], //Anexos
    $configs //Configurações do servidor de emails
) {
    $mail = new PHPMailer;
    //$mail->Timeout  =  10;
    $mail->CharSet = 'UTF-8';

    //$mail->SMTPDebug = 3;  //Ativar saida de erros (escreve erros na saida)

    $mail->isSMTP();
    $mail->Host = $configs["mail_host"];
    $mail->SMTPAuth = true;
    $mail->Username = $configs["mail_user"];
    $mail->Password = $configs["mail_pass"];
    $mail->SMTPSecure = 'ssl';
    //$mail->SMTPSecure = 'tls';
    $mail->Port = $configs["mail_port"];

    $mail->setFrom($configs["mail_from"], $configs["mail_from"]);
    foreach ($to_ar as $v) {
        $mail->addAddress($v);
    }
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $msgHtml;
    $mail->AltBody = $msgPlain;

    if (count($attach) > 0) {
        foreach ($attach as $v) {
            $mail->AddAttachment($v);
        }
    }

    if (!$mail->send()) {
        //Acao extra caso ocorra um erro, salve no seu arquivo de log.
        //Descomente a seguir se estiver tendo problemas, ou salve para o log
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        //echo 'Message has been sent';
        return true;
    }
    return false;
}
