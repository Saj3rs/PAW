<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;

class Login{
	private $form;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new LoginForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
            getMessages()->addInfo('getparams');
            	$this->form->login = getFromRequest('login');
		$this->form->pass = getFromRequest('pass');
	}
	
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			
		}
			
			// nie ma sensu walidować dalej, gdy brak parametrów
		if (! getMessages()->isError ()) {
			
			// sprawdzenie, czy potrzebne wartości zostały przekazane
			if ($this->form->login == "") {
				getMessages()->addError ( 'Nie podano loginu' );
			}
			if ($this->form->pass == "") {
				getMessages()->addError ( 'Nie podano hasła' );
			}
		}

		//nie ma sensu walidować dalej, gdy brak wartości
		if ( !getMessages()->isError() ) {
		
			// sprawdzenie, czy dane logowania poprawne
			// (takie informacje najczęściej przechowuje się w bazie danych)
			if ($this->form->login == "admin" && $this->form->pass == "admin") {
				if (session_status() == PHP_SESSION_NONE) {
					session_start();
				}
				$user = new User($this->form->login, 'admin');
				addRole($user->role);

				// zapis wartości do sesji
				//$_SESSION['user_login'] = $user->login;
				//$_SESSION['user_role'] = $user->role;
				// LUB można zapisać or razu cały obiekt, ale trzeba go zserializować
				$_SESSION['user'] = serialize($user);				
			} else if ($this->form->login == "user" && $this->form->pass == "user") {
				if (session_status() == PHP_SESSION_NONE) {
                                    getMessages()->addInfo('header');
					session_start();
				}
				$user = new User($this->form->login, 'user');
				// zapis wartości do sesji
				//$_SESSION['user_login'] = $user->login;
				//$_SESSION['user_role'] = $user->role;
				// LUB całego obiekt, po serializacji
				$_SESSION['user'] = serialize($user);
				addRole($user->role);

                                
			} else {
				getMessages()->addError('Niepoprawny login lub hasło');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	public function action_doLogin(){

		$this->getParams();
		//getMessages()->addInfo($this->form->login); //to dziala
		//getMessages()->addInfo($this->form->pass);
                
                //TA OPCJA NIE PRZECHODZI
		if ($this->validate()){
			//zalogowany => przekieruj na stronę główną, gdzie uruchomiona zostanie domyślna akcja
                    // problem z przekazem
				getMessages()->addInfo('header');
                    
			header("Location: ".getConf()->app_url."/");
                               
		} else {
			//niezalogowany => wyświetl stronę logowania
                    getMessages()->addInfo('validate fail');
			$this->Smart(); 
		}
		
	}
	
	public function action_doLogout(){
		// 1. zakończenie sesji
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		session_destroy();
		
		// 2. wyświetl stronę logowania z informacją
		getMessages()->addInfo('Poprawnie wylogowano z systemu');

		$this->Smart();		 
	}
	
	public function Smart(){
		
		getSmarty()->assign('page_title','Strona logowania');
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('LoginView.tpl');		
	}
}