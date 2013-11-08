<?php
require_once('./stripe/lib/Stripe.php');

$stripe = array(
    "secret_key"      => "sk_test_AHWrKWvy2WAqkkc3X5xbFrjM",
    "publishable_key" => "pk_test_Em9f2ujTpSxWfMuvfOyt5i60"
);

Stripe::setApiKey($stripe['secret_key']);
?>

