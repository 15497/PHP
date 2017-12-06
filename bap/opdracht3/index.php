<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 3</title>
</head>
<body>



<?php

$voornaam = "Nick";
$achternaam = "Hordijk";
$leeftijd = 26;
$kleur = "zwart";
$hobby = "gamen & golf";

echo 'Hallo mijn naam is ' . $voornaam . ' ' . $achternaam . ' en ik ben ' . $leeftijd . ' jaar oud(ik sta al met 1 voet in het graf) <br />';

echo "mijn hobbies zijn $hobby en ik draag al de kleur $kleur<br />";



if ($leeftijd >= 25) {
    echo 'Je ben oud.';
} else {
    echo 'Je bent jong';
}





?>
</body>
</html>