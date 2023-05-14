<?php namespace app\forms;
class CalcForm {
	public $amm;
	public $ye;
	public $interest;
	public function __construct(){
		$this->amm = null;
		$this->ye = null;
		$this->interest = null;
	}
} 