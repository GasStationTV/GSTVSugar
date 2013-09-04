<?PHP
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN props_Proposals
 */


class props_Proposals_sugar extends Basic {
	var $new_schema = true;
	var $module_dir = 'props_Proposals';
	var $object_name = 'props_Proposals';
	var $table_name = 'props_proposals';
	var $importable = false;
		var $id;
		var $name;
		var $date_entered;
		var $date_modified;
		var $modified_user_id;
		var $modified_by_name;
		var $created_by;
		var $created_by_name;
		var $description;
		var $deleted;
		var $created_by_link;
		var $modified_user_link;
		var $team_id;
		var $team_set_id;
		var $team_count;
		var $team_name;
		var $team_link;
		var $team_count_link;
		var $teams;
		var $assigned_user_id;
		var $assigned_user_name;
		var $assigned_user_link;
		var $proposalneededby;
		var $proposalamount;
		var $currency_id;
		var $flightstartdate;
		var $flightenddate;
		var $spotlength1;
		var $spotlength2;
		var $dayparting;
		var $sovfrequency;
		var $component_items;
		var $additional_program_details;
		var $add_value_bonus;
		var $targetdemo;
		var $gstv_dmas;
		var $add_dma_details;
		var $client_prov_loc;
		var $need_cli_loc_list;
		var $mile_rad_1;
		var $mile_rad_2;
		var $excel_sheet;
		var $visual_maps;
		var $matched_loc;
		var $gstv_vs_client;
		var $mapping;
		var $add_map_details;
		var $client_vs_gstv;
		var $media_kit;
		var $logos_needed;
		var $sales_ppt;
		var $existing_case_study;
		var $additional_research_infomation;
		var $subcategory;
		var $sales_videos_needed;
		var $advertiser_achieve;
		var $research;
			function props_Proposals_sugar(){	
		parent::Basic();
	}
	
	function bean_implements($interface){
		switch($interface){
			case 'ACL': return true;
		}
		return false;
}
		
}
?>