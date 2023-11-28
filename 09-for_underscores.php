<!-- # Créez une fonction qui affiche un message, par exemple 'Hello'. 
# Utilisez une boucle pour afficher le résultat de cette fonction 10 fois.
# Ajoutez trois underscores avant et après le cinquième message. -->

<?php
function affichageten(){
    for ($i=0; $i <4 ; $i++) { 
        echo "Hello  \n";
    }
    echo "___ \n";
    for ($i=4; $i <5 ; $i++) { 
        echo "Hello  \n";
    }
    echo "___ \n";
    for ($i=6; $i <=10 ; $i++) { 
        echo "Hello  \n";
    }
}

echo affichageten() ;

echo"*****************\n";

function affichageten2(){
    for ($i=0; $i <4 ; $i++) { 
        echo "Hello  \n";
    }
    echo "___ ";
    for ($i=4; $i <5 ; $i++) { 
        echo "Hello  ";
    }
    echo "___\n";
    for ($i=6; $i <=10 ; $i++) { 
        echo "Hello  \n";
    }
}

echo affichageten2();
?>