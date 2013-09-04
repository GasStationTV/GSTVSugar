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

	$manifest = array (
		 'acceptable_sugar_versions' => 
		  array (
	     	
		  ),
		  'acceptable_sugar_flavors' =>
		  array(
		  	'PRO'
		  ),
		  'readme'=>'',
		  'key'=>'Sites',
		  'author' => 'Ryan',
		  'description' => 'Database with all site information.',
		  'icon' => '',
		  'is_uninstallable' => true,
		  'name' => 'Site_Package',
		  'published_date' => '2009-11-24 15:23:20',
		  'type' => 'module',
		  'version' => '1259076200',
		  'remove_tables' => 'prompt',
		  );
$installdefs = array (
  'id' => 'Site_Package',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'Sites_Site_Module',
      'class' => 'Sites_Site_Module',
      'path' => 'modules/Sites_Site_Module/Sites_Site_Module.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'Sites_Site_Database_Test1',
      'class' => 'Sites_Site_Database_Test1',
      'path' => 'modules/Sites_Site_Database_Test1/Sites_Site_Database_Test1.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/Cases.php',
      'to_module' => 'Cases',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/Sites_Sites.php',
      'to_module' => 'Sites_Sites',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sites_sites_casesMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Sites_Site_Module',
      'to' => 'modules/Sites_Site_Module',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Sites_Site_Database_Test1',
      'to' => 'modules/Sites_Site_Database_Test1',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Sites_Sites.php',
      'to_module' => 'Sites_Sites',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/Cases.php',
      'to_module' => 'Cases',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/Sites_Sites.php',
      'to_module' => 'Sites_Sites',
    ),
  ),
);