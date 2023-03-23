<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów
if (isset($_REQUEST ['amm']))
    $amm = $_REQUEST ['amm'];
if (isset($_REQUEST ['y']))
    $y = $_REQUEST ['y'];
if (isset($_REQUEST ['interest']))
    $interest = $_REQUEST ['interest'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($amm) && isset($y) && isset($interest))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$full = intval($amm);
	$years = intval($y);
        $interest = intval($interest)/100;
	
	//obliczenie całej kwoty do spłacenia
        while($years>0){
            $full +=$interest*$full;
            $years--;
        }
        //obliczenie kwoty miesięcznej
        $monthly = $full/(12*$y);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$interest,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';