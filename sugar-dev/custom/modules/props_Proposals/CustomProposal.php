<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once "modules/props_Proposals/props_Proposals.php";


class CustomProposal extends props_Proposals {

	function CustomProposal()
	{
		parent::props_Proposals();
	}

    /**
     * Return the list query used by the list views and export button. Next generation of create_new_list_query function.
     *
     * Override this function to return a custom query.
     *
     * @param string $order_by custom order by clause
     * @param string $where custom where clause
     * @param array $filter Optioanal
     * @param array $params Optional     *
     * @param int $show_deleted Optional, default 0, show deleted records is set to 1.
     * @param string $join_type
     * @param boolean $return_array Optional, default false, response as array
     * @param object $parentbean creating a subquery for this bean.
     * @param boolean $singleSelect Optional, default false.
     * @return String select query string, optionally an array value will be returned if $return_array= true.
     */
	function create_new_list_query($orderBy, $where, $filter_fields, $params, $show_deleted = 0,  $join_type = '', $return_array = false,  SugarBean $parentBean = null, $singleSelect = false) {
	
		global $current_user;
		$plannerSeller = $current_user->check_role_membership('Planners') || $current_user->check_role_membership('Sellers');
		// admins see all, planners/sellers restricted
		if (!is_admin($current_user) && $plannerSeller) { 
			// restrict list to only planners and sellers
			if (!empty($where)) $where .= " AND ";
			$qName = $this->db->quoted($current_user->name);
			// allow planners/sellers to see records they created, regardless
			$qId = $this->db->quoted($current_user->id);
			$where .= " (opportunities_cstm.account_manager_name_c = $qName OR
				opportunities_cstm.planner3_c = $qName OR 
				opportunities_cstm.planner2_c = $qName OR
				opportunities_cstm.planner4_c = $qName OR
				opportunities_cstm.primary_ae_c = $qName OR
				opportunities_cstm.client_ae_c = $qName OR
				opportunities_cstm.account_exec_1_c = $qName OR
				opportunities_cstm.account_exec_2_c = $qName OR
				props_proposals.created_by = $qId
				) ";
		}
		
		$q = parent::create_new_list_query($orderBy, $where, $filter_fields, $params, $show_deleted, $join_type, $return_array, $parentBean, $singleSelect);
		// echo "<pre>";var_dump($q);die;
		$q['from'] .= " INNER JOIN props_proposals_opportunities_c ON  props_proposals_opportunities_c.props_proposals_opportunitiesprops_proposals_ida = props_proposals.id 
			INNER JOIN opportunities_cstm on opportunities_cstm.id_c = props_proposals_opportunities_c.props_proposals_opportunitiesopportunities_idb";
		return $q;
		
		// return parent::create_new_list_query($orderBy, $where, $filter_fields, $params, $show_deleted, $join_type, $return_array, $parentBean, $singleSelect);
	}
	
	
   

}

?>