<?php
require_once 'init.php';


//1. pobierz nazwę akcji


//2. wykonanie akcji

switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\Calc();
                $ctrl->Smart ();
	break;
	case 'calcCompute' :
		// załaduj definicję kontrolera
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\Calc();
		$ctrl->start ();
	break;
}
