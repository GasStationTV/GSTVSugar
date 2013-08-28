<?php
$viewdefs = array (
  'Contacts' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => true,
      'moduleName' => 'Contacts',
      'module' => 'Contacts',
      'default_action' => 'create',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
      ),
      'panels' => 
      array (
        'LNK_NEW_CONTACT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'first_name',
              'customCode' => '{html_options name="Contactssalutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="Contactsfirst_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
            ),
            1 => 'title',
          ),
          1 => 
          array (
            0 => 'last_name',
            1 => 'department',
          ),
          2 => 
          array (
            0 => 'department',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'emp_catagory_c',
              'studio' => 'visible',
              'label' => 'LBL_EMP_CATAGORY',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'advertiser_drop_c',
              'studio' => 'visible',
              'label' => 'LBL_ADVERTISER_DROP',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'con_agency_lnk_c',
              'studio' => 'visible',
              'label' => 'LBL_CON_AGENCY_LNK',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_street',
              'label' => 'LBL_PRIMARY_ADDRESS',
            ),
            1 => 'phone_work',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_state',
              'label' => 'LBL_STATE',
            ),
            1 => 'phone_mobile',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_postalcode',
              'label' => 'LBL_POSTAL_CODE',
            ),
            1 => 'phone_other',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_country',
              'label' => 'LBL_COUNTRY',
            ),
            1 => 'phone_fax',
          ),
          10 => 
          array (
            0 => 'email1',
          ),
          11 => 
          array (
            0 => 'description',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'assistant_phone',
              'comment' => 'Phone number of the assistant of the contact',
              'label' => 'LBL_ASSISTANT_PHONE',
            ),
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
