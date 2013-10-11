<html>
<head>
    <meta charset="utf-8" />
    <title>Résultat</title>
    <link type="text/css" href="style.css" rel="stylesheet">
</head>

<body>
<?php
$erreur="";
if (isset($_REQUEST['Envoyer']))
{
    //Vérification du nom
    $nom = $_REQUEST["nom"];

    function VerifiNom($var)
    {
        $Syntaxe = '/^[[:upper:]][[:digit:]]{2}[[:alnum:]]{0,10}$/';
        if(preg_match($Syntaxe,$var))
            return true;
        else
            return false;
    }

    if(!VerifiNom($nom))
        $erreur = "<p>Votre nom n'est pas valide. Voici un exemple :<br>A75auTr3s</p>
                    <h4>Indice, il vous faut :</h4>
                    <ol>
                        <li>1 lettre majuscule</li>
                        <li>2 chiffres</li>
                        <li>Et un maximum de 10 caractères alphanumériques</li>
                    </ol> ";

    //Vérification de l'adresse e-mail
    $mail = $_REQUEST['email'];

    function VerifiMail($var)
    {
        $Syntaxe='/^[[:alnum:]]*@[[:alnum:]]*\.[[:alnum:]]*$/';
        if(preg_match($Syntaxe,$var))
            return true;
        else
            return false;
    }

    if(!VerifiMail($mail))
        $erreur = "<p>Votre adresse e-mail n'est pas valide. Veuillez vérifier de nouveau. ";


}

if($erreur != "")
    echo $erreur;
else
{
    if(!mail($mail,"[RE][RE][FW]IMPORTANT: À LIRE (no virus)",$_REQUEST["Comm"]))
    {
        echo "Le message n'as pa pu être envoyé";
    }
    else
    {
        echo "Message Envoyé!";
    }


}
?>

</body>
</html>