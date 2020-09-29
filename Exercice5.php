<?php
require_once './Form.class.php';

$form = new Form("POST", "#", "Formulaire de test");
$form->setText("Zone de texte libre 1");
$form->setText('Zone de texte libre 2');
$form->setSubmit('Envoyer le formulaire');
echo $form->getForm();