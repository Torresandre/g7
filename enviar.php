<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$from = 'De: RoleBIT';
$to = 'g7digital.mkt@gmail.com';
$subject = 'Website';
$human = $_POST['human'];

$body = "De: $name\n Telefone: $phone E-Mail: $email\n ";

if ($_POST['submit']) {
if ($name != '' && $email != '' && $phone != '') {
if ($human == '4') {
if (mail ($to, $subject, $body, $from)) {
echo '<p>Sua mensagem foi enviada!</p>';
} else {
echo '<p>Algo deu errado, volte e tente novamente!</p>';
}
} else if ($_POST['submit'] && $human != '4') {
echo '<p>Voc&ecirc; respondeu ao anti-spam incorretamente!</p>';
}
} else {
echo '<p>Voc&ecirc; precisa responder todas as quest&otilde;es!!</p>';
}
}
?>