<!-- # Créez une fonction qui prend en paramètre un tableau de nombres. 
# La fonction doit parcourir le tableau pour trouver et renvoyer la valeur maximale.
# Utilisez la fonction avec un tableau de nombres de votre choix. 
# Affichez la valeur maximale dans le terminal. -->

<?php
//la fonction max() existe déjà et renvoie la valeur max d'un tableau
// création d'une fonction :

function maxTab($tab){
    $max=0;
    foreach ($tab as  $value) {
               if ($value>$max) { 
                $max=$value;   // pour chaque valeur du tableau on la compare à $max si supérieure actualisation de la valeur $max
               }
    }
    return  $max ;
}


$tab=[1,20,15,315,60];
echo maxTab($tab);





?>