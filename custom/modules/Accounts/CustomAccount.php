<?php
require_once "modules/Accounts/Account.php";
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CustomAccount extends Account {

	function CustomAccount()
	{
		parent::Account();
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
			$where .= " (account_manager_name_c = $qName OR
				planner2_c = $qName OR 
				planner3_c = $qName OR
				planner4_c = $qName OR
				seller1_c = $qName OR
				seller2_c = $qName OR
				seller3_c = $qName OR
				seller4_c = $qName OR
				accounts.created_by = $qId
				) ";
		}
		
		// $q = parent::create_new_list_query($orderBy, $where, $filter_fields, $params, $show_deleted, $join_type, 0, $parentBean, $singleSelect);
		// var_dump($q);die;
		return parent::create_new_list_query($orderBy, $where, $filter_fields, $params, $show_deleted, $join_type, $return_array, $parentBean, $singleSelect);
	}
	
}

?>