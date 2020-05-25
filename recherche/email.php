<?php
if(isset($_POST['email'])) {

// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = get_field('contact_form_email','options'); // avant = "simonbouchardpro@gmail.com"; ajouter ici
$email_subject = "contact via wordpress";

function died($error) { // addd
    // your error code can go here
    echo
"Nous sommes désolés, mais des erreurs ont été détectées dans le" .
" formulaire que vous avez envoyé. ";
    echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
    echo $error."<br /><br />";
    echo "Merci de corriger ces erreurs.<br /><br />";
    die();
}

// si la validation des données attendues existe
    if( !isset($_POST['verif'])) {
       died(
'Nous sommes désolés, mais le formulaire que vous avez soumis semble poser' .
' problème.');
   }


$prenom = $_POST['prenom']; // required
$nom = $_POST['nom']; // required
$email = $_POST['email']; // required
$message = $_POST['message']; // required
$verif = $_POST['verif']; // required

$error_message = "";

  if(!isset($_POST['verif']) || $_POST['verif'] != 10) {
      $error_message .=
'Le commentaire que vous avez entré ne semble pas être valide.<br />';
    }

    if(strlen($error_message) > 0) {
          died($error_message);
        }

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
  <?php pll_e('message_was_send'); ?>
</div>
<?php

}
