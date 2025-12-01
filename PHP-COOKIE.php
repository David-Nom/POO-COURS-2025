<?php
#1)setcookie 3 argument c’est le nom du cookie (la clé)./valeurs du nom du cookie/temps d'éxpiration
setcookie("nom", "Glad Dev", time()+3600); #1heur avent expiration

#2)
#on cherche le cookie qui s’appelle "nom".
#isset(...) : vérifie si quelque chose existe et n’est pas null
if(isset($_COOKIE["nom"])){ $_COOKIE ; #tableau spécial qui contient tous les cookies envoyés par le navigateur vers PHP.
    $nom=$_COOKIE["nom"]; /*Si le cookie existe, on exécute ce bloc :
                            On crée une variable $nom.

                            On lui donne la valeur du cookie "nom".

                            Donc si le cookie contient "Glad Dev", alors :
👉                         $nom vaudra "Glad Dev".*/
#3)afficher la valeur du coockie
    echo "Bonjour, ". $nom;
}else{
    echo "Cookie non defini";
}
#1) crée un cookie qui s’appelle "nom", qui contient "Glad Dev", valable pendant 1 heure.
#2) écrit le code sans le changer
?>


