    
<?php

require_once 'init.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
    default:
        $ctrl = new app\Ctrl\CalcCtrl();
        $ctrl->genView();
        break;
     case 'calcProcess':
        $ctrl = new app\Ctrl\CalcCtrl();
        $ctrl->process();
        break;
}