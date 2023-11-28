<!-- # Écrire une fonction qui prend une chaîne de caractères en paramètre
# et retourne "vide" si la chaîne est vide sinon "non vide",
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php
function estVide($chaine){
    if (empty($chaine)){
        return "Vide \n";
    }
    else {
        return "Non vide \n";
    }
}

echo estVide("");
echo estVide("mot");

// version ternaire
function estvide2($var){
    return (empty($var)) ?  "Vide \n" :  "Non vide \n";
}
echo estVide2("");
echo estVide2("mot");

?>