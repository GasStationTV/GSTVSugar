<?php 

require_once 'include/MVC/Controller/SugarController.php'; 
require_once 'custom/modules/Agenc_Agencies/CustomAgenc_Agencies.php'; 

// This class name has to be very specific...
class CustomAgenc_AgenciesController extends SugarController { 

	function __construct() {
		parent::__construct();
	}
	
	protected function handle_action(){
		// echo "handle_action()<br>\n"; die;
		// var_dump($this->bean); echo "<p>\n";
		
        $this->bean = new CustomAgenc_Agencies(); 
		
		// Apparently in handle_action the bean/record is already loaded. Must reload it for custom beans.
		if(!empty($this->record)){
			$this->bean->retrieve($this->record);
			if($this->bean)
				$GLOBALS['FOCUS'] = $this->bean;
		}

		// var_dump($this->bean); echo "<p>\n";
		parent::handle_action();
	}
	

	// public function pre_popup() { 
		// Instantiate new object of this extended class 
        // $this->bean = new CustomAgenc_Agencies(); 
		// return 0;
	// }
	
	
	// protected function action_popup() {
		// parent::action_popup();
	// }
	
	// protected function action_popupview() {
		// parent::action_popupview();
	// }
	
    // protected function action_popup() { 
		// //Instantiate new object of this extended class 
        // $this->bean = new CustomAgenc_Agencies(); 
		// return parent::action_default(); // parent::action_popup() doesn't exist. why is this difference than what we are overriding? 
    // } 

} 
?>