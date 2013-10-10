<?php 

require_once 'include/MVC/Controller/SugarController.php'; 
require_once 'custom/modules/Accounts/CustomAccount.php'; 

// s? no s? SugarCRM is SO inconsistent!
class CustomAccountsController extends SugarController { 

	function CustomAccountsController() {
		parent::SugarController();
	}

    protected function action_listview() { 
		
		//Instantiate new object of this extended class 
//        $this->bean = new CustomAccount(); 
        $this->bean = new Account(); 
		parent::action_listview();
    } 

} 
?>
