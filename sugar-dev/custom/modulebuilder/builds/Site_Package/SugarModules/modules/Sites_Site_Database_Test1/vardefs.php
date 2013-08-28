<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Professional Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-professional-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2009 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
$dictionary['Sites_Site_Database_Test1'] = array(
	'table'=>'sites_site_database_test1',
	'audited'=>true,
	'fields'=>array (
  'site_status' => 
  array (
    'required' => '1',
    'name' => 'site_status',
    'vname' => 'LBL_SITE_STATUS',
    'type' => 'enum',
    'massupdate' => '1',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'site_status_list',
    'studio' => 'visible',
  ),
  'install_date' => 
  array (
    'required' => false,
    'name' => 'install_date',
    'vname' => 'LBL_INSTALL_DATE',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
  ),
  'deinstall_date' => 
  array (
    'required' => false,
    'name' => 'deinstall_date',
    'vname' => 'LBL_DEINSTALL_DATE',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
  ),
  'dma_rank' => 
  array (
    'required' => false,
    'name' => 'dma_rank',
    'vname' => 'LBL_DMA_RANK',
    'type' => 'int',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '11',
    'disable_num_format' => '',
  ),
  'county' => 
  array (
    'required' => false,
    'name' => 'county',
    'vname' => 'LBL_COUNTY',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'station_num' => 
  array (
    'required' => false,
    'name' => 'station_num',
    'vname' => 'LBL_STATION_NUM',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '10',
  ),
  'retailer_id_num2' => 
  array (
    'required' => false,
    'name' => 'retailer_id_num2',
    'vname' => 'LBL_RETAILER_ID_NUM2',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '10',
  ),
  'additech_id' => 
  array (
    'required' => false,
    'name' => 'additech_id',
    'vname' => 'LBL_ADDITECH_ID',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '6',
  ),
  'address_city' => 
  array (
    'required' => false,
    'name' => 'address_city',
    'vname' => 'LBL_ADDRESS_CITY',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => 100,
  ),
  'address_state' => 
  array (
    'required' => false,
    'name' => 'address_state',
    'vname' => 'LBL_ADDRESS_STATE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => 100,
  ),
  'address_postalcode' => 
  array (
    'required' => false,
    'name' => 'address_postalcode',
    'vname' => 'LBL_ADDRESS_POSTALCODE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => 20,
  ),
  'address_country' => 
  array (
    'required' => false,
    'name' => 'address_country',
    'vname' => 'LBL_ADDRESS_COUNTRY',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => 100,
  ),
  'address' => 
  array (
    'required' => false,
    'name' => 'address',
    'vname' => 'LBL_ADDRESS',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'impressions' => 
  array (
    'required' => false,
    'name' => 'impressions',
    'vname' => 'LBL_IMPRESSIONS',
    'type' => 'float',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '10',
    'precision' => '0',
  ),
  'quoted_volume' => 
  array (
    'required' => false,
    'name' => 'quoted_volume',
    'vname' => 'LBL_QUOTED_VOLUME',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'quoted_transactions' => 
  array (
    'required' => false,
    'name' => 'quoted_transactions',
    'vname' => 'LBL_QUOTED_TRANSACTIONS',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'population_density' => 
  array (
    'required' => false,
    'name' => 'population_density',
    'vname' => 'LBL_POPULATION_DENSITY',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'average_household_income' => 
  array (
    'required' => false,
    'name' => 'average_household_income',
    'vname' => 'LBL_AVERAGE_HOUSEHOLD_INCOME',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'restaurant_brand' => 
  array (
    'required' => false,
    'name' => 'restaurant_brand',
    'vname' => 'LBL_RESTAURANT_BRAND',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'volume_1209' => 
  array (
    'required' => false,
    'name' => 'volume_1209',
    'vname' => 'LBL_VOLUME_1209',
    'type' => 'float',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '18',
    'precision' => '0',
  ),
  'volume_1109' => 
  array (
    'required' => false,
    'name' => 'volume_1109',
    'vname' => 'LBL_VOLUME_1109',
    'type' => 'float',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '18',
    'precision' => '0',
  ),
  'volume_1009' => 
  array (
    'required' => false,
    'name' => 'volume_1009',
    'vname' => 'LBL_VOLUME_1009',
    'type' => 'float',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '18',
    'precision' => '0',
  ),
  'cstore_type' => 
  array (
    'required' => false,
    'name' => 'cstore_type',
    'vname' => 'LBL_CSTORE_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Undetermined',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'cstore_type_list',
    'studio' => 'visible',
  ),
  'twentyfour_seven' => 
  array (
    'required' => false,
    'name' => 'twentyfour_seven',
    'vname' => 'LBL_TWENTYFOUR_SEVEN',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Undetermined',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'twentyfour_seven_list',
    'studio' => 'visible',
  ),
  'cstore_tv' => 
  array (
    'required' => false,
    'name' => 'cstore_tv',
    'vname' => 'LBL_CSTORE_TV',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'No',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'cstore_tv_list',
    'studio' => 'visible',
  ),
  'hero_site' => 
  array (
    'required' => false,
    'name' => 'hero_site',
    'vname' => 'LBL_HERO_SITE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'No',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'hero_site_list',
    'studio' => 'visible',
  ),
  'hero_site_relevance' => 
  array (
    'required' => false,
    'name' => 'hero_site_relevance',
    'vname' => 'LBL_HERO_SITE_RELEVANCE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'N/A',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'hero_site_relevance_list',
    'studio' => 'visible',
  ),
  'volume_0909' => 
  array (
    'required' => false,
    'name' => 'volume_0909',
    'vname' => 'LBL_VOLUME_0909',
    'type' => 'float',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '18',
    'precision' => '0',
  ),
  'volume_0809' => 
  array (
    'required' => false,
    'name' => 'volume_0809',
    'vname' => 'LBL_VOLUME_0809',
    'type' => 'float',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '18',
    'precision' => '0',
  ),
  'volume_0709' => 
  array (
    'required' => false,
    'name' => 'volume_0709',
    'vname' => 'LBL_VOLUME_0709',
    'type' => 'float',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '18',
    'precision' => '0',
  ),
  'site_tele_num' => 
  array (
    'required' => false,
    'name' => 'site_tele_num',
    'vname' => 'LBL_SITE_TELE_NUM',
    'type' => 'phone',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
    'dbType' => 'varchar',
  ),
  'hardware_brand' => 
  array (
    'required' => false,
    'name' => 'hardware_brand',
    'vname' => 'LBL_HARDWARE_BRAND',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'GSTV Pump-top',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'hardware_brand_list',
    'studio' => 'visible',
  ),
  'market_text' => 
  array (
    'required' => false,
    'name' => 'market_text',
    'vname' => 'LBL_MARKET_TEXT',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'dma_name_text' => 
  array (
    'required' => false,
    'name' => 'dma_name_text',
    'vname' => 'LBL_DMA_NAME_TEXT',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'retailer_text' => 
  array (
    'required' => false,
    'name' => 'retailer_text',
    'vname' => 'LBL_RETAILER_TEXT',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'brand_text' => 
  array (
    'required' => false,
    'name' => 'brand_text',
    'vname' => 'LBL_BRAND_TEXT',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'restrictions' => 
  array (
    'required' => false,
    'name' => 'restrictions',
    'vname' => 'LBL_RESTRICTIONS',
    'type' => 'multienum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'restrictions_list',
    'studio' => 'visible',
    'isMultiSelect' => true,
  ),
  'characteristics' => 
  array (
    'required' => false,
    'name' => 'characteristics',
    'vname' => 'LBL_CHARACTERISTICS',
    'type' => 'multienum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'characteristics_list',
    'studio' => 'visible',
    'isMultiSelect' => true,
  ),
  'store_manager' => 
  array (
    'required' => false,
    'name' => 'store_manager',
    'vname' => 'LBL_STORE_MANAGER',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'district_manager' => 
  array (
    'required' => false,
    'name' => 'district_manager',
    'vname' => 'LBL_DISTRICT_MANAGER',
    'type' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'studio' => 'visible',
  ),
  'legislative_citation' => 
  array (
    'required' => false,
    'name' => 'legislative_citation',
    'vname' => 'LBL_LEGISLATIVE_CITATION',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'No',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'legislative_citation_list',
    'studio' => 'visible',
  ),
  'legislative_citation_desc' => 
  array (
    'required' => false,
    'name' => 'legislative_citation_desc',
    'vname' => 'LBL_LEGISLATIVE_CITATION_DESC',
    'type' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'studio' => 'visible',
  ),
  'monday_open' => 
  array (
    'required' => false,
    'name' => 'monday_open',
    'vname' => 'LBL_MONDAY_OPEN',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'monday_close' => 
  array (
    'required' => false,
    'name' => 'monday_close',
    'vname' => 'LBL_MONDAY_CLOSE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'tuesday_open' => 
  array (
    'required' => false,
    'name' => 'tuesday_open',
    'vname' => 'LBL_TUESDAY_OPEN',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'tuesday_close' => 
  array (
    'required' => false,
    'name' => 'tuesday_close',
    'vname' => 'LBL_TUESDAY_CLOSE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'wednesday_open' => 
  array (
    'required' => false,
    'name' => 'wednesday_open',
    'vname' => 'LBL_WEDNESDAY_OPEN',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'wednesday_close' => 
  array (
    'required' => false,
    'name' => 'wednesday_close',
    'vname' => 'LBL_WEDNESDAY_CLOSE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'thursday_open' => 
  array (
    'required' => false,
    'name' => 'thursday_open',
    'vname' => 'LBL_THURSDAY_OPEN',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'thursday_close' => 
  array (
    'required' => false,
    'name' => 'thursday_close',
    'vname' => 'LBL_THURSDAY_CLOSE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'friday_open' => 
  array (
    'required' => false,
    'name' => 'friday_open',
    'vname' => 'LBL_FRIDAY_OPEN',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'friday_close' => 
  array (
    'required' => false,
    'name' => 'friday_close',
    'vname' => 'LBL_FRIDAY_CLOSE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'saturday_open' => 
  array (
    'required' => false,
    'name' => 'saturday_open',
    'vname' => 'LBL_SATURDAY_OPEN',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'saturday_close' => 
  array (
    'required' => false,
    'name' => 'saturday_close',
    'vname' => 'LBL_SATURDAY_CLOSE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'sunday_open' => 
  array (
    'required' => false,
    'name' => 'sunday_open',
    'vname' => 'LBL_SUNDAY_OPEN',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'sunday_close' => 
  array (
    'required' => false,
    'name' => 'sunday_close',
    'vname' => 'LBL_SUNDAY_CLOSE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'initial_site_serial_profile' => 
  array (
    'required' => false,
    'name' => 'initial_site_serial_profile',
    'vname' => 'LBL_INITIAL_SITE_SERIAL_PROFILE',
    'type' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'studio' => 'visible',
  ),
  'installed_kit_number' => 
  array (
    'required' => false,
    'name' => 'installed_kit_number',
    'vname' => 'LBL_INSTALLED_KIT_NUMBER',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'connection_type' => 
  array (
    'required' => false,
    'name' => 'connection_type',
    'vname' => 'LBL_CONNECTION_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Undetermined',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'connection_type_list',
    'studio' => 'visible',
  ),
  'vandal_kit' => 
  array (
    'required' => false,
    'name' => 'vandal_kit',
    'vname' => 'LBL_VANDAL_KIT',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Undetermined',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'vandal_kit_list',
    'studio' => 'visible',
  ),
  'tx_type' => 
  array (
    'required' => false,
    'name' => 'tx_type',
    'vname' => 'LBL_TX_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'tx_type_list',
    'studio' => 'visible',
  ),
  'dual_tx_site' => 
  array (
    'required' => false,
    'name' => 'dual_tx_site',
    'vname' => 'LBL_DUAL_TX_SITE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'No',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'dual_tx_site_list',
    'studio' => 'visible',
  ),
  'pumps_power_night' => 
  array (
    'required' => false,
    'name' => 'pumps_power_night',
    'vname' => 'LBL_PUMPS_POWER_NIGHT',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Yes',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'pumps_power_night_list',
    'studio' => 'visible',
  ),
  'ladder_on_site' => 
  array (
    'required' => false,
    'name' => 'ladder_on_site',
    'vname' => 'LBL_LADDER_ON_SITE',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'ladder_on_site_list',
    'studio' => 'visible',
  ),
  'ladder_type' => 
  array (
    'required' => false,
    'name' => 'ladder_type',
    'vname' => 'LBL_LADDER_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'ladder_type_list',
    'studio' => 'visible',
  ),
  'accessable_without_key' => 
  array (
    'required' => false,
    'name' => 'accessable_without_key',
    'vname' => 'LBL_ACCESSABLE_WITHOUT_KEY',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'accessable_without_key_list',
    'studio' => 'visible',
  ),
  'cabinet_vert_pos' => 
  array (
    'required' => false,
    'name' => 'cabinet_vert_pos',
    'vname' => 'LBL_CABINET_VERT_POS',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'cabinet_vert_pos_list',
    'studio' => 'visible',
  ),
  'cabinet_location' => 
  array (
    'required' => false,
    'name' => 'cabinet_location',
    'vname' => 'LBL_CABINET_LOCATION',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'cabinet_location_list',
    'studio' => 'visible',
  ),
  'cabinet_type' => 
  array (
    'required' => false,
    'name' => 'cabinet_type',
    'vname' => 'LBL_CABINET_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'cabinet_type_list',
    'studio' => 'visible',
  ),
  'modem_location' => 
  array (
    'required' => false,
    'name' => 'modem_location',
    'vname' => 'LBL_MODEM_LOCATION',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'modem_location_list',
    'studio' => 'visible',
  ),
  'technical_characteristics' => 
  array (
    'required' => false,
    'name' => 'technical_characteristics',
    'vname' => 'LBL_TECHNICAL_CHARACTERISTICS',
    'type' => 'multienum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'technical_characteristics_list',
    'studio' => 'visible',
    'isMultiSelect' => true,
  ),
  'antenna_extension_number' => 
  array (
    'required' => false,
    'name' => 'antenna_extension_number',
    'vname' => 'LBL_ANTENNA_EXTENSION_NUMBER',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'antenna_extension_number_list',
    'studio' => 'visible',
  ),
  'player_type' => 
  array (
    'required' => false,
    'name' => 'player_type',
    'vname' => 'LBL_PLAYER_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'player_type_list',
    'studio' => 'visible',
  ),
  'gateway_ip' => 
  array (
    'required' => false,
    'name' => 'gateway_ip',
    'vname' => 'LBL_GATEWAY_IP',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '16',
  ),
  'player1_ip' => 
  array (
    'required' => false,
    'name' => 'player1_ip',
    'vname' => 'LBL_PLAYER1_IP',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '16',
  ),
  'tx1_ip' => 
  array (
    'required' => false,
    'name' => 'tx1_ip',
    'vname' => 'LBL_TX1_IP',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '16',
  ),
  'tx2_ip' => 
  array (
    'required' => false,
    'name' => 'tx2_ip',
    'vname' => 'LBL_TX2_IP',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '16',
  ),
  'pdu_ip' => 
  array (
    'required' => false,
    'name' => 'pdu_ip',
    'vname' => 'LBL_PDU_IP',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '16',
  ),
  'pdu_type' => 
  array (
    'required' => false,
    'name' => 'pdu_type',
    'vname' => 'LBL_PDU_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'pdu_type_list',
    'studio' => 'visible',
  ),
  'jbm_serial' => 
  array (
    'required' => false,
    'name' => 'jbm_serial',
    'vname' => 'LBL_JBM_SERIAL',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '25',
  ),
  'avo_firmware' => 
  array (
    'required' => false,
    'name' => 'avo_firmware',
    'vname' => 'LBL_AVO_FIRMWARE',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => 100,
    'options' => 'avo_firmware_list',
    'studio' => 'visible',
  ),
),
	'relationships'=>array (
),
	'optimistic_lock'=>true,
);
require_once('include/SugarObjects/VardefManager.php');
VardefManager::createVardef('Sites_Site_Database_Test1','Sites_Site_Database_Test1', array('basic','team_security','assignable','file'));