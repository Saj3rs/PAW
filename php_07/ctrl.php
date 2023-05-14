<?php
require_once 'init.php';


//1. pobierz nazwę akcji


//2. wykonanie akcji

switch ($action) {
        default : // 'calcView'  // akcja NIEPUBLICZNA
		include 'check.php'; // KONTROLA
		$ctrl = new app\controllers\Calc();
		$ctrl->Smart ();
	break;
	case 'login': // akcja PUBLICZNA - brak check.php
		$ctrl = new app\controllers\Login();
		$ctrl->doLogin();
	break;
	case 'calcCompute' : // akcja NIEPUBLICZNA
		include 'check.php';  // KONTROLA
		$ctrl = new app\controllers\Calc();
		$ctrl->start ();
	break;
	case 'logout' : // akcja NIEPUBLICZNA
		include 'check.php';  // KONTROLA
		$ctrl = new app\controllers\Login();
		$ctrl->doLogout();
    
	break;
}
