<?php
/*Explication des get et des set*/ 

/*getNom() = ouvrir la boîte et regarder ce qu’il y a dedans
  ->
  setNom() = mettre un objet dans la boîte*/

Class Personne{#on crée une class qui s'appelle Personne (class représente un plan d'un objet)
    private $nom;#pour stocker le nom des personnes
    private $age;#pour stocker l'age des personnes

    public function setNom($nouveauNom){#1er set (définir setnom  en  nouveauNom)
        $this->nom=$nouveauNom;#this vas représenter l'attribue nom et donc changer ça valeur en nouveauNom
    }

    public function getNom(){#1er get = (récupérer)
        return $this->nom;#sauvegarde la valeurs changer hors fonction(methode)
    }

    public function setAge($nouvelAge){#
        $this->age=$nouvelAge;#le mot $this signifie :👉 "je suis l'age de personne"
    }

    public function getAge(){
        return $this->age;#Renvoie (return) la valeur de l’âge de l’objet.
    }
}
#1er personnage
$personne1 = new Personne;#on crée une nouvelle personne pour luit attribuer des valeurs de personne
$personne1->setNom("WGladys Ako");#
$personne1->setAge(18);#Argument stocker dans 

#2er personnage
$personne2 = new Personne;#on crée une nouvelle personne pour luit attribuer des valeurs de personne
$personne2->setNom("Gwl");
$personne2->setAge(18);

echo "Bonjour je m'appelle : " . $personne1->getNom(). "<br>";#bonjour je m'appelle 
echo "Et j'ai : " . $personne1->getAge(). " ans";

echo "Bonjour je m'appelle : " . $personne2->getNom(). "<br>";#bonjour je m'appelle 
echo "Et j'ai : " . $personne2->getAge(). " ans";
?>
