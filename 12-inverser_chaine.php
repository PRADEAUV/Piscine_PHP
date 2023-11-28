<!-- # Écrivez une fonction qui prend en paramètre une chaîne 
# de caractères et retourne cette chaîne inversée. 
 
# Utilisez la fonction avec une chaîne de texte de votre choix. 
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php

// #la fonction strrev existe déjà 
//echo strrev("hello");

function inverser($var){

    $result=""; // variable du résultat de la fonction, vide au début
    $longeur=strlen($var); // longueur de la chaîne
    for ($i = $longeur; $i>=0; $i--) {
        $result .= substr($var, $i, 1); // on part de la fin de la chaine et on retourne la lettre  avec i on décrémente à chaque fois pour avoir la dernière, l'avant dernière.....
    }
    return $result." \n";
}

echo inverser("hello");
?>