<!-- # Créez une fonction qui prend en paramètre un nom de fichier. 
# Doit ouvrir le fichier en mode lecture si le fichier existe.
# Lire son contenu. 
# Puis fermer le fichier. 
# Ensuite, créez un fichier nommé lire_fichier.php et 
# utilisez la fonction lireFichier avec le nom d'un fichier de votre choix. 
# Affichez ensuite le contenu lu dans le terminal. -->


<?php

function write($fichier){
    $handle=fopen($fichier,'r');
    $lenght=filesize($fichier);
    if ($handle===false) {
         echo"impossible d'ouvrir le fichier \n";
    }
    else{
        $content= "texte du fichier : " .fread($handle,$lenght);
        fclose($handle);
        echo $content;  
    }
    
   
}

echo write('lire_fichier.php')
// write('ecrire_dans_fichier.php');

?>