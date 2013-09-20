<?php 

// if (!defined('sugarEntry')) 
    // define('sugarEntry', true); 

require_once 'include/MVC/Controller/SugarController.php'; 
require_once 'custom/modules/gpop_PreOpportunity/Customgpop_PreOpportunity.php'; 

class Customgpop_PreOpportunityController extends SugarController { 

	function Customgpop_PreOpportunityController() {
		parent::SugarController();
	}

    protected function action_listview() { 
		
		//Instantiate new object of this extended class 
        $this->bean = new Customgpop_PreOpportunity(); 
		parent::action_listview();
    } 

} 
?>