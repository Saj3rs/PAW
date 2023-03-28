<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów
function getParams(&$amm,&$y,&$interest){
if (isset($_REQUEST ['amm']))
    $amm = $_REQUEST ['amm'];
if (isset($_REQUEST ['y']))
    $y = $_REQUEST ['y'];
if (isset($_REQUEST ['interest']))
    $interest = $_REQUEST ['interest'];
}
// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$amm,&$y,&$interest,&$messages){
// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($amm) && isset($y) && isset($interest))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
	return false;
}
else{
    if ( $amm == "") {
	$messages [] = 'Nie podano liczby 1';
    }
     if ( $y == "") {
	$messages [] = 'Nie podano liczby 2';
    }
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $amm )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Lata nie są liczbą całkowitą';
	}	

}
if (!empty ( $messages ))
	return false;
else return true;
// 3. wykonaj zadanie jeśli wszystko w porządku
}



function process(&$amm,&$y,&$interest,&$monthly,&$full,&$messages){
	global $role;

	//konwersja parametrów na int
	$full = intval($amm);
	$years = intval($y);
        $interest = intval($interest)/100;
	if($full>10000&&$role!='admin'){
		$messages [] = 'Tylko administrator może obliczać dla kwot większych od 10000 !';
		return false;
	}
	//obliczenie całej kwoty do spłacenia
        while($years>0){
            $full +=$interest*$full;
            $years--;
        }
        //obliczenie kwoty miesięcznej
        $monthly = $full/(12*$y);
}

$amm = null;
$y = null;
$interest = null;
$full = null;
$monthly = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($amm,$y,$interest);
if ( validate($amm,$y,$interest,$messages) ) { // gdy brak błędów
	process($amm,$y,$interest,$monthly,$full,$messages);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';
// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$interest,$result)
//   będą dostępne w dołączonym skrypcie
