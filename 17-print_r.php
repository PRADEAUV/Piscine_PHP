<!-- # Créez une fonction nommée 'r' qui prend un paramètre. 
# Cette fonction devrait être réutilisable afin d'abréger l'utilisation 
# de 'print_r()'. -->

<?php
function r($var){
    return print_r($var);
}
echo r([1,2,3]);

?>