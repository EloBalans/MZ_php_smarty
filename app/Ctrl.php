  
<?php

require_once dirname (__FILE__).'/../config.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
    default:
        include_once $conf->root_path.'/app/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->genView();
        break;
     case 'calcProcess':
        include_once $conf->root_path.'/app/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->process();
        break;
}