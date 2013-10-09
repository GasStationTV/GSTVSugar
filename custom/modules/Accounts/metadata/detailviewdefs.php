<?php
$viewdefs ['Accounts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'useTabs' => true,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_MEMBER_OF',
          ),
          1 => 
          array (
            'name' => 'focus_account_c',
            'label' => 'LBL_FOCUS_ACCOUNT',
          ),
        ),
        2 => 
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
        3 => 
        array (
          0 => '',
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'dma_c',
            'label' => 'LBL_DMA',
          ),
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
            'displayParams' => 
            array (
              'link_target' => '_blank',
            ),
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'label' => 'LBL_SHIPPING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
            ),
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'account_manager_name_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_MANAGER_NAME',
          ),
          1 => 
          array (
            'name' => 'seller1_c',
            'studio' => 'visible',
            'label' => 'LBL_SELLER1',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'planner2_c',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER2',
          ),
          1 => 
          array (
            'name' => 'seller2_c',
            'studio' => 'visible',
            'label' => 'LBL_SELLER2',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'planner3_c',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER3',
          ),
          1 => 
          array (
            'name' => 'seller3_c',
            'studio' => 'visible',
            'label' => 'LBL_SELLER3',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'planner4_c',
            'studio' => 'visible',
            'label' => 'LBL_PLANNER4',
          ),
          1 => 
          array (
            'name' => 'seller4_c',
            'studio' => 'visible',
            'label' => 'LBL_SELLER4',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_11_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_11_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_12_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_12_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_9_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_9_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_10_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_10_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_13_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_13_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_14_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_14_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_3_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_3_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_4_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_4_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_5_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_5_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_6_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_6_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_7_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_7_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'agenc_agencies_accounts_8_name',
            'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_8_FROM_AGENC_AGENCIES_TITLE',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 'team_name',
        ),
      ),
    ),
  ),
);
?>
