<?php 

// if (!defined('sugarEntry')) 
    // define('sugarEntry', true); 

require_once 'include/MVC/Controller/SugarController.php'; 
require_once 'custom/modules/Opportunities/CustomOpportunity.php'; 

class CustomOpportunitiesController extends SugarController { 

	function CustomOpportunitiesController() {
		parent::SugarController();
	}

    protected function action_listview() { 
		
		//Instantiate new object of this extended class 
        $this->bean = new CustomOpportunity(); 
		// var_dump($this->bean);

		// $this->view_object_map['bean'] = $this->bean;
        // $this->view = 'list'; 
        // $GLOBALS['view'] = $this->view; 

		parent::action_listview();
    } 

} 
?>