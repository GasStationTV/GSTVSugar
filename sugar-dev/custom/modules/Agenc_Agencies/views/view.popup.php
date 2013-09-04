<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.popup.php');
 
class Agenc_AgenciesViewPopup extends ViewPopup{
 
	function __construct(){
	  parent::__construct();  
	}   

	function preDisplay(){
	  parent::preDisplay();
	}   

	function display(){
		global $popupMeta;
		parent::display();
		// echo "<pre>\n";print_r($popupMeta);die;
	} 
}   
?>
