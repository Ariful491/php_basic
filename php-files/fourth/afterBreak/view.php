<?php
require_once "Prac.php";

$prac = new Prac;

$prac ->first_name="Ariful";

$prac->hello()->register()->email();
