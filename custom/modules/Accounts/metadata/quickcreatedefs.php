<?php
// created: 2013-06-18 18:11:58
$viewdefs['Accounts']['QuickCreate'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'SAVE',
        1 => 'CANCEL',
      ),
    ),
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'modules/Accounts/Account.js',
      ),
    ),
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_NAME',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'phone_office',
          'label' => 'LBL_PHONE_OFFICE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'segment_c',
          'label' => 'LBL_SEGMENT',
        ),
        1 => 
        array (
          'name' => 'phone_alternate',
          'label' => 'LBL_PHONE_ALT',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'focus_account_c',
          'label' => 'LBL_FOCUS_ACCOUNT',
        ),
        1 => NULL,
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'website',
          'label' => 'LBL_WEBSITE',
        ),
        1 => 
        array (
          'name' => 'phone_fax',
          'label' => 'LBL_FAX',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_MEMBER_OF',
        ),
        1 => 
        array (
          'name' => 'dma_c',
          'label' => 'LBL_DMA',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'category_c',
          'label' => 'LBL_CATEGORY',
        ),
        1 => 
        array (
          'name' => 'subcategory_c',
          'label' => 'LBL_SUBCATEGORY',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
        1 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_TEAM',
        ),
      ),
    ),
  ),
);