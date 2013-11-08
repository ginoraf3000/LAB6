<?php
require_once(dirname(__FILE__) . '/config.php');

$token = $_POST['stripeToken'];
$mail = $_REQUEST['email'];
$montant = $_REQUEST['montant'];
$montant =$montant*100;

$customer = Stripe_Customer::create(array(
    'email' => $mail,
    'card' => $token
));

$charge = Stripe_Charge::create(array(
    'customer' => $customer->id,
    'amount' => $montant,
    'currency' => 'cad'
));

echo '<h1>' . $_POST['montant'] . ' ont été correctement débité de votre compte. MERCI!</h1>';
echo '<p><Vous allez être redirigé dans 5 seconde</p>';
header("Refresh: 5;URL=email.php");
?>

