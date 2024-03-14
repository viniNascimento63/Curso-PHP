<?php
require_once('vendor/autoload.php');

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "templates/", // pasta para templates
    "cache_dir"     => "cache/", // pasta cache
    "debug"         => false, // set to false to improve the speed
);

Tpl::configure($config);

// Add PathReplace plugin (necessary to load the CSS with path replace)
// Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );

// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign("name", "Obi Wan Kenoby");

// assign a variable
$tpl->assign('php_version', PHP_VERSION);

// assign an array
$tpl->assign("week", array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"));

// draw the template
$html = $tpl->draw("index", true); // Já é esperado extensão html, logo não precisa escrever ".html"
// O comando "true" é necessário para não seja dado um echo do conteúdo na tela, apenas o retorno.

/* ################################################################ */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number:
// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
// - 587 for SMTP+STARTTLS
$mail->Port = 465;

//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'email_origem@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'senha_do_email';

//Set who the message is to be sent from
//Note that with gmail you can only use your account address (same as `Username`)
//or predefined aliases that you have configured within your account.
//Do not use user-submitted addresses in here
$mail->setFrom('email_origem@gmail.com', 'Bob-Esponja');

//Set an alternative reply-to address
//This is a good place to put user-submitted addresses
$mail->addReplyTo('email_de_reply@gmail.com');

//Set who the message is to be sent to
$mail->addAddress('email_destino.com', 'Nome-do-remetente');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('templates/index.html'), __DIR__);
$mail->msgHTML($html);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
