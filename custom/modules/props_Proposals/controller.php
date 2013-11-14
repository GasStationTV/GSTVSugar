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
	
	function action_save() {
		parent::action_save();
		$fields = $this->bean;
		// echo "<pre>";print_r($fields); die;
		// copy the values
		$proposalAmount = $this->bean->proposalamount;
		$salesStage = $this->bean->salesstage_c;
		$primaryPlanner = $this->bean->planner1_c;
		$proposalStatus = $this->bean->proposal_status_c;
		$flightStartDate = $this->bean->flightstartdate;
		$flightEndDate = $this->bean->flightenddate;

		if ($this->bean->load_relationship('props_proposals_opportunities')) {
			$related = $this->bean->props_proposals_opportunities->getBeans();
			$opportunity = array_shift($related); // should only be one related opportunity
			// echo "<pre>";print_r($opportunity); die;
			// paste the values
			// omg why do the field names have to be so different?
			$opportunity->proj_amount_c = $proposalAmount;
			$opportunity->sales_stage = $salesStage;
			$opportunity->account_manager_name = $primaryPlanner;
			$opportunity->opportunity_stage_c = $proposalStatus;
			$opportunity->flight_start_date_c = $flightStartDate;
			$opportunity->flight_end_date_c = $flightEndDate;
			
			$opportunity->save(false);
		}
		
	}

} 
?>