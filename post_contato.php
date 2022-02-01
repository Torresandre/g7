<?php

/**** Código elaborado por leandroip.com. ****/

require_once 'mailfunction.php';

$webSiteEmail = "g7digital.mkt@gmail.com";

$result = 0;
if (isset($_POST["nome"])) {

  //Dados do formulário
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $phone = $_POST["telefone"];
  $messageHTML = str_replace("\n", "<br/>", $_POST["mensagem"]);

  //A versão HTML do email
/****************************************************** */
  $msgHtml = <<<HTML
  <div style="font-family:  'Bookman Old Style'">
    <div
        style="padding:20px; text-align:center;background-color:#122232;color:white;font-size:20px">
        <h1  style="color:#f2f2f2">
        <p> Olá $nome! Bom ter você por aqui! Somos a G7Digital. Tudo bem?</p>
        </h1>
    </div>
    <div style="padding:15px">
        
        <p>  Eu vimos que você se inscreveu para receber o nosso E-book Manual do Empreendedor Visionário.
Então basta clicar no link para o baixar!</p>

          <p>Toque na estrelinha no topo para favoritar essa mensagem e garantir que vai receber os próximos e-mails. </p>

            <p>Você acabou de dar um passo muito importante e queremos te parabenizar por isso. Você demonstrou muita força de vontade e agora tem todo nosso apoio para impulsionar a sua jornada empreendedora.</p>

          <p>Atenciosamente: Gabriel e Gabriele Mendes. </p>

          <p>G7Digital</p>
        
        <div style="margin-left:10px">
        $messageHTML
        
   
  </div>
HTML; //Este fechamento de heredoc não deve ser identado
  //Mantenha sempre na coluna 0, mesmo se for colocado dentro de uma função.

  //A versão texto da mensagem      
/****************************************************** */
  $msgPlain = <<<TXT
  Olá $nome ! Bom ter você por aqui! Somos a G7Digital. Tudo bem?
  Eu vimos que você se inscreveu para receber o nosso E-book Manual do Empreendedor Visionário.
  Então basta clicar no link para o baixar!
  
  Toque na estrelinha no topo para favoritar essa mensagem e garantir que vai receber os próximos e-mails. 
  
  Você acabou de dar um passo muito importante e queremos te parabenizar por isso. Você demonstrou muita força de vontade e agora tem todo nosso apoio para impulsionar a sua jornada empreendedora.
  
  Atenciosamente: Gabriel e Gabriele Mendes. 
  
  G7Digital
TXT;
/****************************************************** */

  //Enviar para o cliente e também para mim
  //coloque aqui o email que quiser receber o contato
  //Neste caso, estou usando $webSiteEmail, pois checo ele diariamente
  //se for algo do tipo noreply, mude o $webSiteEmail para algumemailseu@seusite.com.br
  $to_ar = array($webSiteEmail, $email);
  $subject = "Contato no Site";
  $from_name = $_POST["email"];

  if (sendHtmlEmail($to_ar, $subject, $msgHtml, $msgPlain, ["ManualdoEmpreendedorVisionario.pdf"], $sendHtmlEmail_config)) {
    $result = 1;
  }
}

?>

<div class="alert <?php echo ($result == 1) ? "alert-success" : "alert-danger"; ?>">
  <h3><?php echo ($result == 1) ? "Sucesso!" : "Erro"; ?></h3>
  <?php if ($result == 1) { ?>
    <p>

      Legal, sua mensagem foi enviada.

    </p>
    <p>
      Por favor confira no seu email também. 
      Caso não tenha recebido entre em contato com 
      <?php echo $webSiteEmail; ?>
    </p>
  <?php } ?>
  <br />
  <br />
</div>

