<?php
// KONTROLER strony kalkulatora
//require_once $conf->root_path.'/config.php';
require_once dirname(__FILE__).'/../config.php';
////załaduj Smarty
//require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.
require_once $conf->root_path.'/app/Calc.class.php';

$ctrl = new Calc();
$ctrl->start();

