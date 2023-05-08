<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

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
if (empty( $messages2 )) {
	
	// sprawdzenie, czy $x i $ye s� liczbami ca�kowitymi
	if (! is_numeric( $amm )) {
		$this->mess-> addError('Kwota nie jest liczb� ca�kowit�');
	}
	
	if (! is_numeric( $ye )) {
		$this->mess-> addError('Lata nie s� liczb� ca�kowit�');
	}	

}
if (!empty ( $messages2 ))
	return false;
else return true;
// 3. wykonaj zadanie je�li wszystko w porz�dku
}



public function process(){
	//global $role;
        
        $this->form->interest = intval($this->form->interest)/100;
        $this->result->years = intval($this->form->ye);
        $this->result->full = intval($this->form->amm);

	$this->msgs->addInfo('Parametry poprawne.');
	//konwersja parametr�w na int
//	$full = intval($amm);
//	$years = intval($ye);
//      $interest = intval($interest)/100;
	//obliczenie ca�ej kwoty do sp�acenia
        while($this->result->years>0){
            $this->result->full +=$this->form->interest*$this->result->full;
            $this->years--;
        }
        //obliczenie kwoty miesi�cznej
        $this->result->monthly = $this->result->full/(12*$this->form->ye);
    
   
}

public function Smart(){
    global $conf;
    $smarty = new Smarty();
    $smarty->assign('conf',$conf);
                    
    $smarty->assign('page_title','Damian Figura');
    $smarty->assign('page_description','Strona z uzyciem biblioteki Smarty');
    $smarty->assign('page_header','Szablon Smarty');
    $smarty->assign('page_footer','Work In Progress');

    //pozosta�e zmienne niekoniecznie musz� istnie�, dlatego sprawdzamy aby nie otrzyma� ostrze�enia
    // $smarty->assign('amm',$this->form->amm);
    // $smarty->assign('ye',$this->form->ye);
    // $smarty->assign('interest',$this->form->interest);
    // $smarty->assign('monthly',$this->result->monthly);
    // $smarty->assign('full',$this->result->full);
    // $smarty->assign('errors',$this->mess);
    $smarty->assign('mess',$this->mess);
    $smarty->assign('form',$this->form);
    $smarty->assign('res',$this->result);
    // 5. Wywo�anie szablonu
    $smarty->display($conf->root_path.'/templates/top.tpl');
}
}
?>
