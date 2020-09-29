<?php
require_once './Ville.class.php';

$nantes = new Ville;
$nantes->setDepartement("Loire-Atlantique");
$nantes->setNom("Nantes");
echo $nantes."\n";

$valence = new Ville;
$valence->setDepartement("Drôme");
$valence->setNom("Valence");
echo $valence."\n";