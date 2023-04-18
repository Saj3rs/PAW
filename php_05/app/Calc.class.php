<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class Calc{
// 1. pobranie parametr¢w
private $mess;
private $form;
private $result;

/** 
	 * Konstruktor - inicjalizacja wˆa˜ciwo˜ci
	 */
	public function __construct(){
		//stworzenie potrzebnych obiekt¢w
		$this->mess = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
        
	}

public function start(){
    $this->getParams();
    if ( $this->validate() ) { // gdy brak bˆ©d¢w
	    $this->process();
    }
}


public function getParams(){

if (isset($_REQUEST ['amm']))
    $this->form->amm = $_REQUEST ['amm'];
if (isset($_REQUEST ['ye']))
    $this->form->ye = $_REQUEST ['ye'];
if (isset($_REQUEST ['interest']))
    $this->form->interest = $_REQUEST ['interest'];
}
// 2. walidacja parametr¢w z przygotowaniem zmiennych dla widoku
public function validate(){
// sprawdzenie, czy parametry zostaˆy przekazane
if ( ! (isset($this->form->amm) && isset($this->form->ye) && isset($this->form->interest))) {
	//sytuacja wyst¥pi kiedy np. kontroler zostanie wywoˆany bezpo˜rednio - nie z formularza
	//$messages2 [] = 'Bˆ©dne wywoˆanie aplikacji. Brak jednego z parametr¢w.';
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

//nie ma sensu walidowa† dalej gdy brak parametr¢w
if (empty( $messages2 )) {
	
	// sprawdzenie, czy $x i $ye s¥ liczbami caˆkowitymi
	if (! is_numeric( $amm )) {
		$this->mess-> addError('Kwota nie jest liczb¥ caˆkowit¥');
	}
	
	if (! is_numeric( $ye )) {
		$this->mess-> addError('Lata nie s¥ liczb¥ caˆkowit¥');
	}	

}
if (!empty ( $messages2 ))
	return false;
else return true;
// 3. wykonaj zadanie je˜li wszystko w porz¥dku
}



public function process(&$amm,&$ye,&$interest,&$monthly,&$full,&$messages2){
	global $role;
    
	//konwersja parametr¢w na int
	$full = intval($amm);
	$years = intval($ye);
        $interest = intval($interest)/100;
	/*if($full>10000&&$role!='admin'){
		$messages2 [] = 'Tylko administrator mo¾e oblicza† dla kwot wi©kszych od 10000 !';
		return false;
	}*/
	//obliczenie caˆej kwoty do spˆacenia
        while($years>0){
            $full +=$interest*$full;
            $years--;
        }
        //obliczenie kwoty miesi©cznej
        $monthly = $full/(12*$ye);
}




//pobierz parametry i wykonaj zadanie je˜li wszystko w porz¥dku



public function Smart(){
        
    $smarty = new Smarty();

    $smarty->assign('app_url',_APP_URL);
    $smarty->assign('root_path',_ROOT_PATH);
    $smarty->assign('page_title','Damian Figura');
    $smarty->assign('page_description','Strona z uzyciem biblioteki Smarty');
    $smarty->assign('page_header','Szablon Smarty');
    $smarty->assign('page_footer','Work In Progress');

    //pozostaˆe zmienne niekoniecznie musz¥ istnie†, dlatego sprawdzamy aby nie otrzyma† ostrze¾enia
    // $smarty->assign('amm',$this->form->amm);
    // $smarty->assign('ye',$this->form->ye);
    // $smarty->assign('interest',$this->form->interest);
    // $smarty->assign('monthly',$this->result->monthly);
    // $smarty->assign('full',$this->result->full);
    // $smarty->assign('errors',$this->mess);
    $smarty->assign('mess',$this->mess);
    $smarty->assign('form',$this->form);
    $smarty->assign('res',$this->result);
    // 5. Wywoˆanie szablonu
    $smarty->display(_ROOT_PATH.'/templates/top.tpl');
}
}
?>
