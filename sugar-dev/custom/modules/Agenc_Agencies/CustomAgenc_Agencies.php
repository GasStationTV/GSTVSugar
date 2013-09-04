<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once "modules/Agenc_Agencies/Agenc_Agencies.php";
class CustomAgenc_Agencies extends Agenc_Agencies {

	function CustomAgenc_Agencies()
	{
		parent::Agenc_Agencies();
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

		
		// Restrict list view if popup windows has advertiserId set
		if (isset($_REQUEST['advertiserId'])) { 
			// restrict list to only agencies for this advertiser
			if (!empty($where)) $where .= " AND ";
			$advertiserId = $this->db->quoted($_REQUEST['advertiserId']);
			$where .= " ( agenc_agencies_accounts_c.agenc_agenc89eccounts_idb = $advertiserId AND 
				agenc_agencies_accounts_c.deleted = 0 ) ";
		}
		
		$q = parent::create_new_list_query($orderBy, $where, $filter_fields, $params, $show_deleted, $join_type, $return_array, $parentBean, $singleSelect);
		
		// Restrict list view if popup windows has advertiserId set. 
		if (isset($_REQUEST['advertiserId'])) { 
			$q['from'] .= " INNER JOIN agenc_agencies_accounts_c ON  agenc_agencies_accounts_c.agenc_agena415gencies_ida = agenc_agencies.id ";
		}
		// echo "<pre>";var_dump($q);die;
		
		return $q;
		
		// return parent::create_new_list_query($orderBy, $where, $filter_fields, $params, $show_deleted, $join_type, $return_array, $parentBean, $singleSelect);
	}
	
	
   

}

?>
