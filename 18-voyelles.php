<!-- # Créez une fonction qui prend en paramètre une chaîne de caractères.
# Cette fonction devrait compter le nombre de voyelles présentes dans la chaîne 
# (en considérant seulement les voyelles 'a', 'e', 'i', 'o', 'u', 'A', 
# 'E', 'I', 'O', 'U'). 
# Utilisez la fonction compterVoyelles avec une chaîne de texte de votre choix. 
# Affichez le nombre de voyelles dans le terminal. -->
<?php
function compterVoyelles($var)
{
    $voyelles=['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $result=0;
    foreach ($voyelles as $voyelle) {
       $result+=substr_count($var,$voyelle);
    }
    
    echo "il y a ". $result ." voyelles dans : $var \n";
}

compterVoyelles("Alors il y a combien de voyelles");

?>