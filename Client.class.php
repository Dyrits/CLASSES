<?php
class Client extends Personne {
    private $adresse;

    /**
     * @param mixed $adresse
     */
    public function setCoord($adresse) {
        $this->adresse = $adresse;
    }

    public function __toString() {
        return "Prénom : ".$this->prenom."\n"."Nom : ".$this->nom."\n"."Adresse : ".$this->adresse;
    }
}