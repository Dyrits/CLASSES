<?php
abstract class Personne {
    protected $nom;
    protected $prenom;

    /**
     * Personne constructor.
     * @param $nom
     * @param $prenom
     */
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}