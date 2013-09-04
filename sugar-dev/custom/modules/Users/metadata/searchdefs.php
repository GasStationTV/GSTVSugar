<?php
$searchdefs ['Users'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'user_name' => 
      array (
        'type' => 'user_name',
        'studio' => 
        array (
          'no_duplicate' => true,
          'editview' => false,
          'detailview' => true,
          'quickcreate' => false,
          'basic_search' => false,
          'advanced_search' => false,
          'wirelesseditview' => false,
          'wirelessdetailview' => true,
          'wirelesslistview' => false,
          'wireless_basic_search' => false,
          'wireless_advanced_search' => false,
          'rollup' => false,
        ),
        'label' => 'LBL_USER_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'user_name',
      ),
      'first_name' => 
      array (
        'type' => 'name',
        'label' => 'LBL_FIRST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'first_name',
      ),
      'last_name' => 
      array (
        'type' => 'name',
        'label' => 'LBL_LAST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'last_name',
      ),
      'employee_type_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_EMPLOYEE_TYPE',
        'width' => '10%',
        'name' => 'employee_type_c',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'user_name',
      3 => 'status',
      4 => 'is_admin',
      5 => 'title',
      6 => 'is_group',
      7 => 'department',
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_street' => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_state' => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_postalcode' => 
      array (
        'name' => 'address_postalcode',
        'label' => 'LBL_POSTAL_CODE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_country' => 
      array (
        'name' => 'address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
