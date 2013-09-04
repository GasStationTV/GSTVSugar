<?php 

require_once 'include/MVC/Controller/SugarController.php'; 
require_once 'custom/modules/props_Proposals/CustomProposal.php'; 

// This class name has to be very specific...
class Customprops_ProposalsController extends SugarController { 

	function Customprops_ProposalsController() {
		parent::SugarController();
	}
	
    protected function action_listview() { 
		//Instantiate new object of this extended class 
        $this->bean = new CustomProposal(); 
		parent::action_listview();
    } 

} 
?>