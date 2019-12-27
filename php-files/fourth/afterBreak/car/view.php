<?php
require_once "Prac.php";

$prac = new Prac();
$prac->setFirstName('Arif');

echo $prac->getFirstName();