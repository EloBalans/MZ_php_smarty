<?php

namespace app\Ctrl;

use app\Form\CalcForm;
use app\Result\CalcResult;


class CalcCtrl {

	 
	private $form;   
	private $result; 
	
	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->value = getForm("value");
		$this->form->years = getForm("years");
		$this->form->percent = getForm("percent");
	}
	
	public function validate() {
		
		if (! (isset ( $this->form->value ) && isset ( $this->form->years ) && isset ( $this->form->percent ))) {
			return false; 
		}
		
		
		if ($this->form->value == "") {
			getMessages()->addError('Nie podano wartości');
		}
		if ($this->form->years == "") {
			getMessages()->addError('Nie podano lat');
		}
		
		
		if (! getMessages()->isError()) {
			
			
                    if (! is_numeric ( $this->form->value )) {
                        getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
                    }
			
                    if (! is_numeric ( $this->form->years )) {
                     getMessages()->addError('Lata nie są liczbą liczbą całkowitą');
                    }
                }
		
	return ! getMessages()->isError();
    }
	
	public function process(){

            $this->getparams();
		
		if ($this->validate()) {
				
                    $te_years;
	
                    $this->form->value = floatval($this->form->value);
                    $this->form->years = floatval($this->form->years);
                    getMessages()->addInfo('Parametry poprawne.');
	
                    $te_years = $this->form->years*12;
                    $this->result->result = $this->form->value/$te_years+$this->form->value*$this->form->value*$this->form->percent/$te_years;
                    getMessages()->addInfo('Wykonano obliczenia.');
		}
                        
            $this->genView();
	}
	
	
	
	public function genView(){
            
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		getSmarty()->display('CalcView.tpl');
	}
}
