<?php
if(isset($_POST['email'])) {

// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "simonbouchardpro@gmail.com" ; // avant = "simonbouchardpro@gmail.com" ;  get_field('contact_form_email','options');ajouter ici
$email_subject = "contact via wordpress";

$prenom = $_POST['prenom']; // required
$nom = $_POST['nom']; // required
$email = $_POST['email']; // required
$message = $_POST['message']; // required
$verif = $_POST['verif']; // required

$error_message = "";


$email_message = "Détail.\n\n";
$email_message .= "Prenom: ".$prenom."\n";
$email_message .= "Nom: ".$nom."\n";
$email_message .= "Email: ".$email."\n";
$email_message .= "Message: ".$message."\n";

// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- mettez ici votre propre message de succès en html -->
<div class="message_was_send">
messae envoyé
</div>
<?php

}
