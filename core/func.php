<?php
function getForm($param_name){
	return isset($_REQUEST [$param_name]) ? $_REQUEST [$param_name] : null;
}
