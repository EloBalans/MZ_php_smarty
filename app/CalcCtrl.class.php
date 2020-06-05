<?php

require_once $conf->root_path.'/libs/Smarty.class.php';
require_once $conf->root_path.'/libs/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';


class CalcCtrl {

	private $msgs;   
	private $form;   
	private $result; 
	
	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->value = isset($_REQUEST ['value']) ? $_REQUEST ['value'] : null;
		$this->form->years = isset($_REQUEST ['years']) ? $_REQUEST ['years'] : null;
		$this->form->percent = isset($_REQUEST ['percent']) ? $_REQUEST ['percent'] : null;
	}
	
	public function validate() {
		
		if (! (isset ( $this->form->value ) && isset ( $this->form->years ) && isset ( $this->form->percent ))) {
			return false; 
		}
		
		
		if ($this->form->value == "") {
			$this->msgs->addError('Nie podano wartości');
		}
		if ($this->form->years == "") {
			$this->msgs->addError('Nie podano lat');
		}
		
		
		if (! $this->msgs->isError()) {
			
			
                    if (! is_numeric ( $this->form->value )) {
                        $this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
                    }
			
                    if (! is_numeric ( $this->form->years )) {
                     $this->msgs->addError('Lata nie są liczbą liczbą całkowitą');
                    }
                }
		
	return ! $this->msgs->isError();
    }
	
	public function process(){

            $this->getparams();
		
		if ($this->validate()) {
				
                    $te_years;
	
                    $this->form->value = floatval($this->form->value);
                    $this->form->years = floatval($this->form->years);
                    $this->msgs->addInfo('Parametry poprawne.');
	
                    $te_years = $this->form->years*12;
                    $this->result->result = $this->form->value/$te_years+$this->form->value*$this->form->value*$this->form->percent/$te_years;
                    $this->msgs->addInfo('Wykonano obliczenia.');
		}
                        
            $this->genView();
	}
	
	
	
	public function genView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
			
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}
