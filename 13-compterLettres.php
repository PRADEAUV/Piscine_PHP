<!-- # Créez une fonction qui prend en paramètre une lettre 
# Et une chaîne de caractères. La fonction doit retourner le nombre d'occurrences 
# De la lettre dans la chaîne, sans distinction de casse. 
# Utilisez la fonction avec une lettre et une chaîne de texte de votre choix. 
# Affichez le résultat dans le terminal. -->
<?php

function compterlettres($l,$var)
{
    $longeur=strlen($var); // nombre pour l'itération de la boucle
    $result=0;
    $min=strtolower("$var");// on passe tout la chaîne en minuscule 

    for ($i=0; $i < $longeur; $i++) { 
        if ($l===substr($min, $i, 1)) // on compare $l à chaque lettre de 0 à la dernière lettre de $min
        {
            $result++; // si égalité ajoute +1 à résult
        }
        else {
             $result; // si pas d'égalité résut ne change pas
        }
    }
    return "Le nombre d'occurences de $l est $result dans $var \n"; // fin de la boucle return le nombre d'occcurences
}
echo compterlettres("i","VIrginie");

?>




