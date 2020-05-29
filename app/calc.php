<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/libs/Smarty.class.php';


function getParams(&$form){
	$form['value'] = isset($_REQUEST['value']) ? $_REQUEST['value'] : null;
	$form['years'] = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$form['intrest'] = isset($_REQUEST['intrest']) ? $_REQUEST['intrest'] : null;	
}

function validate(&$form,$infos,&$messages){	
	
	if ( ! (isset($form['value']) && isset($form['years']) && isset($form['intrest']) ))	return false;
	
	$infos [] = 'Przekazano parametry.';

	if ( $form['value'] == "") $messages [] = 'Nie podano liczby 1';
	if ( $form['years'] == "") $messages [] = 'Nie podano liczby 2';
	
	if ( count($messages)==0 ) {
		if (! is_numeric( $form['value'] )) $messages [] = 'Pierwsza wartość nie jest liczbą';
		if (! is_numeric( $form['years'] )) $messages [] = 'Druga wartość nie jest liczbą';
	}
	
	if (count($messages)>0) return false;
	else return true;
}

function process(&$form,&$infos,&$messages,&$result){
	$te_years;
	
	$form['value'] = floatval($form['value']);
	$form['years'] = floatval($form['years']);
	
	$te_years = $form['years']*12;
	$result = $form['value']/$te_years+$form['value']*$form['intrest']/$te_years;
	
}

$form = null;
$infos = array();
$messages = array();
$result = null;

getParams($form);
if ( validate($form,$infos,$messages) ){
	process($form,$infos,$messages,$result);
}
$smarty = new Smarty();
$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc_view.html');