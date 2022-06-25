<?php
    require '../login_gubugwayang/stripe-php-8.5.0/stripe-php-8.5.0/init.php';

    $publishableKey="pk_test_51L6vV1DN5mknzFoWBWxSD8JcAw0XeCyEmmYnvW7RRBpzcVMjQvLPtcZTeXsvxtTdWpe7LYx3pjNqJqElqUbE49Os00LYoP1rmN";
    $secretKey="sk_test_51L6vV1DN5mknzFoWf20UpQHy5ZuIRR9Cox3Kj08jDOVG8kARXsRNUSq06qEJRbcauEintMUoAyf7L0Wlt14YW41m00jKyVBgAj";

    \Stripe\Stripe::setApiKey($secretKey);
?>