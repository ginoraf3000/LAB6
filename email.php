<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>E-mail</title>
    <link type="text/css" media="screen" href="style.css" rel="stylesheet">
</head>

<body>
<div class="div-titre">
    <ul>
        <li><a href="#home">Acceil</a></li>
        <li><a href="#news">Nouvelles</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">À propos</a></li>
        <li><a href="#home">Acceil 2</a></li>
        <li><a href="#news">Nouvelles 2</a></li>
        <li><a href="#contact">Contact 2</a></li>
        <li><a href="#about">À propos 2</a></li>
    </ul>
    <h1>Laissez nous votre nom, votre adresse e-mail et un petit commentaire.</h1>

    <h2>Nous allons le lire!</h2>
    <hr/>
    <img src="bienvenue-1.jpg">
</div>
<div class="div-form">
    <form method="post" action="verifie.php">
        Nom :<br><span class="tab"><input type="text" name="nom"></span><br>
        Adresse e-mail :<br><span class="tab"><input type="text" name="email"></span><br>
        Un petit commentaire :<br>
        <span class="tab"><textarea name="Comm" cols="40" rows="3"></textarea></span>
        <hr/>
        <span class="tab"><input type="submit" value="Envoyer" name="Envoyer"></span>
    </form>
</div>
<div class="div-titre">
    <h1>Ou pourquoi pas un petit don avec ça?</h1>
</div>
<div class="div-form">
    <?php require_once('./config.php'); ?>

    <form action="charge.php" method="post">
        Adresse e-mail :<br><span class="tab"><input type="text" name="email"></span><br>
        Montant du don ($ canadien) :<br><span class="tab"><input type="text" name="montant"></span><br>
        <br>
        <span class="tab"><script
                src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
                data-key="pk_test_Em9f2ujTpSxWfMuvfOyt5i60"
                data-name="Un produit incroyable"
                data-description="Payer ce que vous voulez!"
                data-currency="cad"
                data-image="mario.png">
            </script></span>
    </form>
</div>
</body>
</html>