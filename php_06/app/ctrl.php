<?php
require_once dirname (__FILE__).'/../config.php';

//1. pobierz nazwę akcji

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

//2. wykonanie akcji
switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
		include_once $conf->root_path.'/app/Calc.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new Calc();
		$ctrl->Smart ();
	break;
	case 'calcCompute' :
		// załaduj definicję kontrolera
		include_once $conf->root_path.'/app/Calc.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new Calc();
		$ctrl->start ();
	break;
}
