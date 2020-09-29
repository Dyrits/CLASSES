<?php
class Ville {
    private $nom;
    private $departement;
    private static $nomLePlusLong = "";

    /**
     * Ville constructor.
     * @param $nom
     * @param $departement
     */
    public function __construct($nom, $departement) {
        $this->nom = $nom;
        $this->departement = $departement;
        if(strlen($nom)>strlen(static::$nomLePlusLong)) static::$nomLePlusLong = $nom;
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement) {
        $this->departement = $departement;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function __toString() {
        return "La ville $this->nom est dans le département $this->departement";
    }
}