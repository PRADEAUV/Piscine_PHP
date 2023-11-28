<!-- # Écrivez une fonction qui prend en paramètre un texte et un nom de fichier. 
# La fonction doit ouvrir le fichier en mode écriture. 
# Ecrire le texte dans le fichier.
# Puis fermer le fichier. 
# Ensuite, créez un fichier nommé ecrire_dans_fichier.php et 
# utilisez la fonction ecrireDansFichier avec un texte de votre choix. 
# Vérifiez ensuite le fichier pour vous assurer que le texte a été correctement 
# écrit. -->

<?php
function output($var,$fichier){
    $handle=fopen($fichier,'a+');
    fwrite($handle,$var);
    fclose($handle);  
}

output("j'ai écrit dans mon fichier","ecrire_dans_fichier.php");
?>