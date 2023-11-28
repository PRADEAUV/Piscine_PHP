<!-- # Écrivez une fonction qui prend en paramètre un tableau de nombres. 
# La fonction doit renvoyer un nouveau tableau contenant les mêmes 
# nombres, mais dans l'ordre inverse. 
# Affichez le tableau original et le tableau inversé dans le terminal -->

<?php
// fonction affichgae d'un tableau de l'exercice 13
function affichageTab($tab)
{
    foreach ($tab as $values) {
        echo "=> $values" ."\n" ;

    }
}

//fonction affichage du tableau inversé
function inverseTableau($tab){
    
     $tab=array_reverse($tab);
     foreach ($tab as $values) {
        echo "=> $values" ."\n" ;
}
}
$tab=["Bonjour","ok","bye"];

// affichage du tableau original
echo affichageTab($tab);


echo"*********************************\n";
// afficahge du tableau inversé
echo inverseTableau($tab);

?>