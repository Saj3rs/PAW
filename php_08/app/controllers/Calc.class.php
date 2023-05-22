<?php namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;
use core\Messages;
class Calc{
// 1. pobranie parametr�w
private $mess;
private $form;
private $result;
private $years=0;
/** 
	 * Konstruktor - inicjalizacja w�a�ciwo�ci
	 */
	public function __construct(){
		//stworzenie potrzebnych obiekt�w
		$this->mess = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();

	}

public function start(){
    $this->getParams();
    if ( $this->validate() ) { // gdy brak b��d�w
	    $this->process();
            
    }
     $this->Smart();
}


public function getParams(){

if (isset($_REQUEST ['amm']))
    $this->form->amm = $_REQUEST ['amm'];
if (isset($_REQUEST ['ye']))
    $this->form->ye = $_REQUEST ['ye'];
if (isset($_REQUEST ['interest']))
    $this->form->interest = $_REQUEST ['interest'];
}
// 2. walidacja parametr�w z przygotowaniem zmiennych dla widoku
public function validate(){
if ( ! (isset($this->form->amm) && isset($this->form->ye) && isset($this->form->interest))) {
	//sytuacja wyst�pi kiedy np. kontroler zostanie wywo�any bezpo�rednio - nie z formularza
	//$messages2 [] = 'B��dne wywo�anie aplikacji. Brak jednego z parametr�w.';
	return false;
}
else{
    if ( $this->form->amm == "") {
        $this->mess-> addError('Nie podano liczby 1');
    }
     if ( $this->form->ye == "") {
        $this->mess-> addError('Nie podano liczby 2');
    }
}

//nie ma sensu walidowa� dalej gdy brak parametr�w
if (!($this->mess->isError())) {

	// sprawdzenie, czy $x i $ye s� liczbami ca�kowitymi
	if (! is_numeric( $this->form->amm )) {
		$this->mess-> addError('Kwota nie jest liczb� ca�kowit�');
	}

	if (! is_numeric( $this->form->ye )) {
		$this->mess-> addError('Lata nie s� liczb� ca�kowit�');
	}	

}
if ($this->mess->isError())
	return false;
else return true;
// 3. wykonaj zadanie je�li wszystko w porz�dku
}



public function process(){
	//global $role;
        $this->result->percent = $this->form->interest;
        $this->form->interest = intval($this->form->interest)/100;
        $this->years = intval($this->form->ye);
        $this->result->full = intval($this->form->amm);

	$this->mess->addInfo('Parametry poprawne.');
	//konwersja parametr�w na int
//	$full = intval($amm);
//	$years = intval($ye);
//      $interest = intval($interest)/100;
	//obliczenie ca�ej kwoty do sp�acenia
        while($this->years>0){
            $this->result->full +=$this->form->interest*$this->result->full;
            $this->years--;
        }
        //obliczenie kwoty miesi�cznej
        $this->result->monthly = $this->result->full/(12*$this->form->ye);
        $this->calcSave();

}

public function calcSave(){
			
		// 1. Walidacja danych formularza (z pobraniem)
		if ($this->validate()) {
			// 2. Zapis danych w bazie
			try {
				
				//2.1 Nowy rekord
				
					//sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
					$count = getDB()->count("obliczenie");
					if ($count <= 9) {
						getDB()->insert("obliczenie", [
							"ammount" => $this->form->amm,
							"years" => $this->form->ye,
							"percent" => $this->result->percent,
							"full" => $this->result->full,
                                                    
						]);
					} else {
                                            $oldestid = getDB()->min("obliczenie","id");
                                            getDB()->delete("obliczenie",["id"=>$oldestid]);
							
                                            //za dużo rekordów
						// Gdy za dużo rekordów to pozostań na stronie
						//getMessages()->addInfo('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
						$this->calcSave(); //pozostań na stronie edycji
						exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
					}
				 
				getMessages()->addInfo('Pomyślnie zapisano rekord');

			} catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
			
			// 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
			$this->Smart();
                        

		} else {
			// 3c. Gdy błąd walidacji to pozostań na stronie
			$this->Smart();
		}		
	}




public function Smart(){
    global $conf;
    getSmarty()->assign('conf',$conf);

    getSmarty()->assign('page_title','Damian Figura');
    getSmarty()->assign('page_description','Strona z uzyciem biblioteki Smarty');
    getSmarty()->assign('page_header','Szablon Smarty');
    getSmarty()->assign('page_footer','Work In Progress');

    
    try{
			$this->records = getDB()->select("obliczenie", [
					"ammount",
					"years",
					"percent",
                                        "full"
				] );
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}	
		
		// 4. wygeneruj widok
		//getSmarty()->assign('searchForm',$this->form); // dane formularza (wyszukiwania w tym wypadku)
		getSmarty()->assign('obliczenia',$this->records);
    
    //pozosta�e zmienne niekoniecznie musz� istnie�, dlatego sprawdzamy aby nie otrzyma� ostrze�enia
    // getSmarty()->assign('amm',$this->form->amm);
    // getSmarty()->assign('ye',$this->form->ye);
    // getSmarty()->assign('interest',$this->form->interest);
    // getSmarty()->assign('monthly',$this->result->monthly);
    // getSmarty()->assign('full',$this->result->full);
    // getSmarty()->assign('errors',$this->mess);
    getSmarty()->assign('mess',$this->mess);
    getSmarty()->assign('form',$this->form);
    getSmarty()->assign('res',$this->result);
    // 5. Wywo�anie szablonu
    getSmarty()->display($conf->root_path.'/app/views/templates/top.tpl');
}
}
?>