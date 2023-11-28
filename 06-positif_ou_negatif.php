<!-- # Écrire une fonction qui prend un nombre en paramètre
# et return "positif" si le nombre est positif, ou bien "négatif" si le nombre
# est negatif ou "nul" si le nombre est null.
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->
<?php
function positifNegatif($nb1){

    if ($nb1===null) {
        return " nul \n";
    }
    elseif ($nb1>=0) {
        return "Le nombre $nb1 est positf \n";
    }
    else {
        return "Le nombre $nb1 est négatif \n";
    }



}




echo positifNegatif(-15);
echo positifNegatif(0);
echo positifNegatif(15);
echo positifNegatif(null);

?>