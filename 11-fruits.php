<!-- # Écrivez une fonction qui prend en paramètre un tableau. 
# Cette fonction doit afficher chaque élement du tableau Suivi d'un saut de ligne. 

# Ensuite, créez un tableau par exemple "$fruits" contenant au moins 5 noms 
# de fruits différents. Utilisez votre fonction avec le tableau "$fruits" 
# pour afficher la liste des fruits." -->

<?php
function affichageTab($tab)
{
    foreach ($tab as $values) {
        echo "=> $values" ."\n" ;

    }
}


$fruits =["pomme","poire","abricot","fraise","cerise"];
echo affichageTab($fruits);

?>