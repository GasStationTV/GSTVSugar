<?php
// created: 2013-06-18 18:11:58
$viewdefs['Products']['QuickCreate'] = array (
  'templateMeta' => 
  array (
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
    'javascript' => '<script type="text/javascript" src="include/jsolait/init.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="include/JSON.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="include/javascript/jsclass_base.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="include/javascript/jsclass_async.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="modules/Products/EditView.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>',
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      1 => 
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
          'displayParams' => 
          array (
            'required' => true,
          ),
          'customCode' => '<input name="name" id="name" type="text" value="{$fields.name.value}"><input name="product_template_id" id="product_template_id" type="hidden" value="{$fields.product_template_id.value}">&nbsp;<input title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" type="button" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick=\'return get_popup_product();\'>&nbsp;<input tabindex="1" title="{$LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.product_template_id.value = \'\'; this.form.name.value = \'\';" type="button" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">',
          'label' => 'LBL_NAME',
        ),
        1 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_ACCOUNT_NAME',
        ),
        1 => 
        array (
          'name' => 'contact_name',
          'label' => 'LBL_CONTACT_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'quantity',
          'displayParams' => 
          array (
            'size' => 5,
          ),
          'label' => 'LBL_QUANTITY',
        ),
        1 => 
        array (
          'name' => 'date_purchased',
          'label' => 'LBL_DATE_PURCHASED',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'serial_number',
          'label' => 'LBL_SERIAL_NUMBER',
        ),
        1 => 
        array (
          'name' => 'date_support_starts',
          'label' => 'LBL_DATE_SUPPORT_STARTS',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'asset_number',
          'label' => 'LBL_ASSET_NUMBER',
        ),
        1 => 
        array (
          'name' => 'date_support_expires',
          'label' => 'LBL_DATE_SUPPORT_EXPIRES',
        ),
      ),
    ),
    0 => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'currency_id',
          'label' => 'LBL_CURRENCY',
        ),
        1 => NULL,
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'cost_price',
          'label' => 'LBL_COST_PRICE',
        ),
        1 => NULL,
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'list_price',
          'label' => 'LBL_LIST_PRICE',
        ),
        1 => 
        array (
          'name' => 'book_value',
          'label' => 'LBL_BOOK_VALUE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'discount_price',
          'label' => 'LBL_DISCOUNT_PRICE',
        ),
        1 => 
        array (
          'name' => 'book_value_date',
          'label' => 'LBL_BOOK_VALUE_DATE',
        ),
      ),
    ),
    1 => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'website',
          'type' => 'Link',
          'label' => 'LBL_URL',
        ),
        1 => 
        array (
          'name' => 'tax_class',
          'label' => 'LBL_TAX_CLASS',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'manufacturer_id',
          'label' => 'LBL_MANUFACTURER',
        ),
        1 => 
        array (
          'name' => 'weight',
          'label' => 'LBL_WEIGHT',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'mft_part_num',
          'label' => 'LBL_MFT_PART_NUM',
        ),
        1 => 
        array (
          'name' => 'category_id',
          'label' => 'LBL_CATEGORY',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'vendor_part_num',
          'label' => 'LBL_VENDOR_PART_NUM',
        ),
        1 => 
        array (
          'name' => 'type_id',
          'label' => 'LBL_TYPE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'support_name',
          'label' => 'LBL_SUPPORT_NAME',
        ),
        1 => 
        array (
          'name' => 'support_contact',
          'label' => 'LBL_SUPPORT_CONTACT',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'support_description',
          'label' => 'LBL_SUPPORT_DESCRIPTION',
        ),
        1 => 
        array (
          'name' => 'support_term',
          'label' => 'LBL_SUPPORT_TERM',
        ),
      ),
    ),
  ),
);