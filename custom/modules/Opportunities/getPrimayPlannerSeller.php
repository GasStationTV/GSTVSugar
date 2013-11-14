<?php
chdir('../../..'); # rest to root of SugarCRM so all requires work.
define('sugarEntry', true); # prevent complaints about valid entry points.
include_once ('include/MVC/preDispatch.php');
require_once('include/entryPoint.php');
require_once('include/MVC/SugarApplication.php');

$id = $_GET['id'];
$acc = new Account();
$acc->retrieve($id);
$ret = array(
	'primaryPlanner' => isset($acc->account_manager_name_c) ? $acc->account_manager_name_c : '',
	'primarySeller'  => isset($acc->seller1_c) ? $acc->seller1_c : ''
);
$json = json_encode($ret);
echo $json;
// echo "<pre>$id\n$acc->id\n";var_dump($acc);
?>