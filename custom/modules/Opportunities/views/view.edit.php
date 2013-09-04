<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



require_once('include/MVC/View/views/view.edit.php'); 

class OpportunitiesViewEdit extends ViewEdit {

 	function OpportunitiesViewEdit(){
 		parent::ViewEdit();
 		$this->useForSubpanel = true;
 	}
 	
	///// @Override
 	function display() {
	
		$this->setProbability();

		////////////// Display the form  
 		parent::display();
		//////////////


		$this->setRequiredFields();

		$this->populatePlannerSeller();
		
		$this->setAgencyPopupFilter();
 	}
	
	function setProbability() {
		global $app_list_strings;

		$json = getJSONobj();
		$prob_array = $json->encode($app_list_strings['sales_probability_dom']);
		$prePopProb = '';
 		if(empty($this->bean->id) && empty($_REQUEST['probability'])) {
		   $prePopProb = 'document.getElementsByName(\'sales_stage\')[0].onchange();';
		}
		
$probability_script=<<<EOQ
	<script>
	prob_array = $prob_array;
	document.getElementsByName('sales_stage')[0].onchange = function() {
			if(typeof(document.getElementsByName('sales_stage')[0].value) != "undefined" && prob_array[document.getElementsByName('sales_stage')[0].value]
			&& typeof(document.getElementsByName('probability')[0]) != "undefined"
			) {
				document.getElementsByName('probability')[0].value = prob_array[document.getElementsByName('sales_stage')[0].value];
				SUGAR.util.callOnChangeListers(document.getElementsByName('probability')[0]);

			} 
		};
	$prePopProb
	</script>
EOQ;
	    
	    $this->ss->assign('PROBABILITY_SCRIPT', $probability_script);  
	}	
	
	function setRequiredFields() {
		/////////////////// Blog
	 	global $mod_strings;
        //JS to make field mendatory 
        $jsscript = <<<EOQ
                   <script>
                       // Change blog_status_c to the field of your module
                       $('#opportunity_stage_c').change(function() {
                            makerequired(); // onchange call function to mark the field required
                       });
                     function makerequired()
                     {
                        var status = $('#opportunity_stage_c').val(); // get current value of the field 
                         if(status == 'Closed_Won'){ // check if it matches the condition: if true,
                                addToValidate('EditView','closedamount_c','float',true,'{$mod_strings['LBL_CLOSEDAMOUNT']}');    // mark field required
                                $('#closedamount_c_label').html('{$mod_strings['LBL_CLOSEDAMOUNT']}: <font color="red">*</font>'); // with red * sign next to label
                            }
                            else{
                                removeFromValidate('EditView','closedamount_c');                        // else remove the validtion applied
                                $('#closedamount_c_label').html('{$mod_strings['LBL_CLOSEDAMOUNT']}: '); // and give the normal label back 
                            }
                    }
                    makerequired(); //Call at onload while editing a Published blog record
                </script>
EOQ;
		echo $jsscript;     //echo the script

	}
	
	
	// This function will output some Javascript to automatically select the Planner & Seller 
	// whenever an Advertiser is selected.
	function populatePlannerSeller() {
		////////////////// Prepopulate Planner & Seller
		// get the admin user. only the admin can use REST. WTF?
		// $admin = new User();
		// $admin->retrieve('1'); // admin id is always '1'.
		
		// get access to the current user's name/password
		global $current_user;
		// echo "<pre>\n";var_dump($current_user);die;
		
		// Add some AJAX to look up the Planner and Seller when the Advertiser/Account changes
		echo <<< JAVASCRIPT
<script type="text/javascript">
	
	function setAccountListener() {
		var aid = document.getElementById('account_id');
		var oldValue = aid.value;
		// set a timer to check account id change every second. no other way 
		// to listen for changes as the account_id is modified programatically
		// through Sugar JS framework.
		var interval = setInterval(function() {
			if (aid.value != oldValue) {
				oldValue = aid.value;
				accountIdOnChange();
			}
		}, 1000);
	}
	
	function accountIdOnChange() {
		var id = document.getElementById('account_id').value;
		if (id == "") return;
		loadXMLDoc('custom/modules/Opportunities/getPrimayPlannerSeller.php?id='+id, setPlannerSeller);
	}
	
	function accountIdOnChangeOld() {
		var id = document.getElementById('account_id').value;
		// loadXMLDoc('service/v4_1/rest.php', setPlannerSeller);
		// alert("id="+id);
		SugarRest.getEntry('Accounts', id, setPlannerSeller); // module, id, callback
	}
	
	function setPlannerSeller(json) {
		var account = JSON && JSON.parse(json) || eval(json);
		// console.log("account: ");console.log(account);
		
		// dig the actual values out of the returned account.
		if (account == null 
			|| account.primaryPlanner == null 
			|| account.primarySeller == null ) {
			// there must have been an error
			return;
		}
		
		var planner = document.getElementById('account_manager_name_c');
		var seller = document.getElementById('primary_ae_c');

		setOption(planner, account.primaryPlanner);
		setOption(seller, account.primarySeller);
	}
	
	function setPlannerSellerOld(json) {
		// alert(json);
		// console.log(json);
		// var account = JSON && JSON.parse(json) || eval(json);
		var account = YAHOO.lang.JSON.parse(json.responseText);
		// console.log("account: ");console.log(account);
		
		// dig the actual values out of the returned account.
		if (account.entry_list == null 
			|| account.entry_list[0].name_value_list.account_manager_name_c == null 
			|| account.entry_list[0].name_value_list.seller1_c == null ) {
			// there must have been an error
			return;
		}
		
		var accPlanner = account.entry_list[0].name_value_list.account_manager_name_c.value;
		// Primary Seller field name on Account is different than on Opportunity
		var accSeller = account.entry_list[0].name_value_list.seller1_c.value; 
		
		var planner = document.getElementById('account_manager_name_c');
		var seller = document.getElementById('primary_ae_c');

		setOption(planner, accPlanner);
		setOption(seller, accSeller);
	}
	
	function setOption(select, value) {
		var options = select.options;
		for (var i = 0; i < options.length; i++) {
			if (options[i].value == value) {
				select.selectedIndex = i;
				return;
			}
		}
	}
	
	function loadXMLDoc(url, func) {
		var req;
		// branch for native XMLHttpRequest object
		if (window.XMLHttpRequest) {
			req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if (req.readyState == 4 && req.status == 200)
					func(req.responseText);
			};
			req.open("GET", url, true);
			req.send(null);
		} else if (window.ActiveXObject) {// branch for IE/Windows ActiveX version
			req = new ActiveXObject("Microsoft.XMLHTTP");
			if (req) {
				req.onreadystatechange = function() {
					if (req.readyState == 4 && req.status == 200)
						func(req.responseText);
				};
				req.open("GET", url, true);
				req.send();
			}
		}
	}


	var SugarRest = function(){};
	SugarRest.server_url = 'service/v4_1/rest.php';
	
	SugarRest.login =  function(name, password, application){
		console.log('Logging In');
		var loginData = [{user_name: name, password: password}, application];
		YAHOO.util.Connect.asyncRequest('POST', SugarRest.server_url, {success:SugarRest.saveSession, failure:null}, SugarRest.getRequestData('login', loginData));
	}
	
	SugarRest.saveSession = function(o){
		var data = YAHOO.lang.JSON.parse(o.responseText);
		SugarRest.session = data['id'];
	}

	SugarRest.getEntry = function(module, id, callback){
		// Don't make REST calls until we log in. If we try, it will reset the user session!
		if (SugarRest.session == null) return;
		var data = {
			session: SugarRest.session, 
			module_name: module, 
			id: id,
			select_fields: ['id', 'name', 'account_manager_name_c', 'seller1_c'],
			link_name_to_fields_array: [],
			track_view: false
		};
		YAHOO.util.Connect.asyncRequest('POST', SugarRest.server_url, {
			success: callback,
			failure: callback
		}, SugarRest.getRequestData('get_entry', data));
	}

	// This utility function  encodes the method_name and data into a post request
	SugarRest.getRequestData = function(method_name, data) {
		var returndata = 'method=' + method_name + '&input_type=json&response_type=json';
		if (data != null) {
			var jstr = YAHOO.lang.JSON.stringify(data);
			// TODO: Should probably URL encode the JSON string in case of special characters
			returndata = returndata + '&rest_data=' + jstr;
		}
		// console.log("returndata: " + returndata);
		return returndata;
	}

	// Login when the page loads so the API is available on request.
	// TODO: Tehnically it would be prudent to set a timeout or check that login succeeded
	// before assuming we can use it, but no time for that right now.
	// SugarRest.login('$current_user->user_name', '$current_user->user_hash', 'Edit Opportunity Form');
	
	setAccountListener();
	
</script>
JAVASCRIPT;
	}	
	
	function setAgencyPopupFilter() {
		// for each of the 3 
		// not easy to use a loop because it references fields like agenc_agencies_id_c, agenc_agencies_id1_c, agenc_agencies_id2_c while the button names are btn_drivingagency1_c, btn_drivingagency2_c, btn_drivingagency3_c
		echo <<< JAVASCRIPT
		<script>
			document.getElementById('btn_drivingagency1_c').onclick = function(){
				var accountId = document.getElementById('account_id');
				open_popup(
					"Agenc_Agencies", 
					600, 
					400, 
					"&advertiserId=" + accountId.value, 
					true, 
					false, 
					{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"agenc_agencies_id_c","name":"drivingagency1_c"}}, 
					"single", 
					true
				);
			}
		</script>
JAVASCRIPT;
		echo <<< JAVASCRIPT
		<script>
			document.getElementById('btn_drivingagency2_c').onclick = function(){
				var accountId = document.getElementById('account_id');
				open_popup(
					"Agenc_Agencies", 
					600, 
					400, 
					"&advertiserId=" + accountId.value, 
					true, 
					false, 
					{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"agenc_agencies_id1_c","name":"drivingagency2_c"}}, 
					"single", 
					true
				);
			}
		</script>
JAVASCRIPT;
		echo <<< JAVASCRIPT
		<script>
			document.getElementById('btn_drivingagency3_c').onclick = function(){
				var accountId = document.getElementById('account_id');
				open_popup(
					"Agenc_Agencies", 
					600, 
					400, 
					"&advertiserId=" + accountId.value, 
					true, 
					false, 
					{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"agenc_agencies_id2_c","name":"drivingagency3_c"}}, 
					"single", 
					true
				);
			}
		</script>
JAVASCRIPT;
	} // setAgencyPopupFilter
	
}
?>