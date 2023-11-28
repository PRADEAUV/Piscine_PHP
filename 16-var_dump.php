<!-- # Créez une fonction nommée 'v' qui prend un paramètre. 
# Cette fonction devrait être réutilisable afin d'abréger l'utilisation 
# de 'var_dump()'. -->
<?php
function v($var){

    return var_dump($var);
}

echo v("hello");
