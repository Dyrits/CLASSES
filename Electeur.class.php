<?php
class Electeur extends Personne {
    private $bureau_de_vote;
    private $vote;

    /**
     * Electeur constructor.
     * @param $nom
     * @param $prenom
     * @param $bureau_de_vote
     */
    public function __construct($nom, $prenom, $bureau_de_vote) {
        parent::__construct($nom, $prenom);
        $this->bureau_de_vote = $bureau_de_vote;
        $this->vote = false;
    }

    public function aVote() {
        $this->vote = true;
    }
}