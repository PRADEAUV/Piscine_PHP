<!-- # Écrire une fonction qui prend deux nombres en paramètre
# et retourne le plus grand des deux.
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php
function nbPlusGrand($nb1,$nb2){ 
    if ($nb1>$nb2) {
        return "Le nombre le plus grand est $nb1 \n";
    }
    else {
        return "Le nombre le plus grand est $nb2 \n";
    }
}
echo nbPlusGrand(10,25);
echo nbPlusGrand(45,1);

// version ternaire

function nbPlusGrand2($nb1,$nb2){ 
return ($nb1>$nb2) ? "Le nombre le plus grand est $nb1 \n": "Le nombre le plus grand est $nb2 \n" ;
}

echo nbPlusGrand2(10,25);
echo nbPlusGrand2(45,1);


?>