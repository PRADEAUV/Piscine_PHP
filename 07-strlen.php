<!-- # Écrire une fonction qui prend une chaîne de caractères en paramètre
# et retourne "longue" si la longueur de la chaîne est supérieure à 10,
# sinon "courte".
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->


<?php
function longue($var){
    $resultat=iconv_strlen($var);
    if ( $resultat>10){
        return "longue \n";
    }
    else {
        return "Courte \n";
    }
}




echo longue("ok");
echo longue("kkkkkkkkkkkkkkkkkkkkkkkk");
// version ternaire
function longue2($var){
    $resultat=iconv_strlen($var);
    return ($resultat>10) ? " Chaîne longue \n" : " Chaîne courte \n";
}

echo longue2("ok");
echo longue2("kkkkkkkkkkkkkkkkkkkkkkkk");


?>