<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';
// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów
function getParams(&$amm,&$ye,&$interest){
if (isset($_REQUEST ['amm']))
    $amm = $_REQUEST ['amm'];
if (isset($_REQUEST ['ye']))
    $ye = $_REQUEST ['ye'];
if (isset($_REQUEST ['interest']))
    $interest = $_REQUEST ['interest'];
}
// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$amm,&$ye,&$interest,&$messages2){
// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($amm) && isset($ye) && isset($interest))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	//$messages2 [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
	return false;
}
else{
    if ( $amm == "") {
	$messages2 [] = 'Nie podano liczby 1';
    }
     if ( $ye == "") {
	$messages2 [] = 'Nie podano liczby 2';
    }
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages2 )) {
	
	// sprawdzenie, czy $x i $ye są liczbami całkowitymi
	if (! is_numeric( $amm )) {
		$messages2 [] = 'Kwota nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $ye )) {
		$messages2 [] = 'Lata nie są liczbą całkowitą';
	}	

}
if (!empty ( $messages2 ))
	return false;
else return true;
// 3. wykonaj zadanie jeśli wszystko w porządku
}



function process(&$amm,&$ye,&$interest,&$monthly,&$full,&$messages2){
	global $role;

	//konwersja parametrów na int
	$full = intval($amm);
	$years = intval($ye);
        $interest = intval($interest)/100;
	/*if($full>10000&&$role!='admin'){
		$messages2 [] = 'Tylko administrator może obliczać dla kwot większych od 10000 !';
		return false;
	}*/
	//obliczenie całej kwoty do spłacenia
        while($years>0){
            $full +=$interest*$full;
            $years--;
        }
        //obliczenie kwoty miesięcznej
        $monthly = $full/(12*$ye);
}

$amm = null;
$ye = null;
$interest = null;
$full = null;
$monthly = null;
$messages2 = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($amm,$ye,$interest);
if ( validate($amm,$ye,$interest,$messages2) ) { // gdy brak błędów
	process($amm,$ye,$interest,$monthly,$full,$messages2);
}

$page_title = 'Damian Figura';
$page_description = 'Strona z uzyciem biblioteki Smarty';
$page_header = 'Szablon Smarty';
$page_footer = 'Work In Progress';

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title',$page_description);
$smarty->assign('page_description',$page_description);
$smarty->assign('page_header',$page_header);
$smarty->assign('page_footer',$page_footer);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('amm',$amm);
$smarty->assign('ye',$ye);
$smarty->assign('interest',$interest);
$smarty->assign('monthly',$monthly);
$smarty->assign('full',$full);
$smarty->assign('messages2',$messages2);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/templates/top.tpl');
?>