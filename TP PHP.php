<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP en PHP</title>
</head>
<body>

<?php

$module_name = "Web Secure Programming";
$enseignant_name = "Amamou";
$Totalnb_etudiants = 35;
$noteValidation = 10;

echo "<h2>Voici toutes les informations</h2>";
echo "Le nom du module est : " . $module_name . "<br>";
echo "Notre enseignant est Mr : " . $enseignant_name . "<br>";
echo "Le nombre total d'étudiants est : " . $Totalnb_etudiants . "<br>";
echo "La note minimale de validation est : " . $noteValidation . "<br>";

$etudiants = ["Malak", "Hadil", "Mariyem", "Salma"];
$notes = [12, 8, 15, 9];

echo "<h2>La liste des étudiants et leurs notes</h2>";
for ($i = 0; $i < count($etudiants); $i++) {
    echo ($i + 1) . ". " . $etudiants[$i] . " : " . $notes[$i] . "/20 <br>";
}

$etudiants[] = "Yasser";
$notes[] = 14;

unset($etudiants[1]); 
unset($notes[1]);

$etudiants = array_values($etudiants);
$notes = array_values($notes);

$moyenne = array_sum($notes) / count($notes);
$noteMax = max($notes);
$noteMin = min($notes);

echo "<h2>Informations</h2>";
echo "La note moyenne est : " . round($moyenne, 2) . "<br>";
echo "La note maximale est : " . $noteMax . "<br>";
echo "La note minimale est : " . $noteMin . "<br>";

echo "<h2>Validation</h2>";

$valides = 0;
$nonValides = 0;

foreach ($etudiants as $index => $nom) {
    echo $nom . " a obtenu " . $notes[$index] . "/20 ";

    if ($notes[$index] >= $noteValidation) {
        echo " Validé<br>";
        $valides++;
    } else {
        echo " Non validé<br>";
        $nonValides++;
    }
}

echo "<br>Nombre d'étudiants validés : " . $valides . "<br>";
echo "Nombre d'étudiants non validés : " . $nonValides . "<br>";

function calculerMoyenne($notes) {
    return array_sum($notes) / count($notes);
}

function estValide($note, $noteValidation) {
    return $note >= $noteValidation;
}

function messageNote($note) {
    if ($note >= 16) {
        return "Excellent";
    } elseif ($note >= 12) {
        return "Très bien";
    } elseif ($note >= 10) {
        return "Validé";
    } else {
        return "Non validé";
    }
}

echo "<h2>Résultat final avec fonctions</h2>";

foreach ($etudiants as $index => $nom) {
    echo $nom . " : " . $notes[$index] . "/20 - ";
    echo messageNote($notes[$index]) . "<br>";
}
?>

</body>
</html>
