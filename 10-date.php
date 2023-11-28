<!-- # Créez une fonction qui affiche un message qui return la date du jours
# (d/m/y) Puis affichez le résultat suivi d'un saut de ligne. -->

<?php
function dateJour(){
    return "Date du jour : ".date("d/m/y"). "\n";
}

echo dateJour();
?>