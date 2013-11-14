<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
if(class_exists('add_code')) return; // for some reason there is a floating 'include' out there trying
// to include this more than once and generating the error PHP Fatal error:  Cannot redeclare class add_code 

class add_code {

	const CODE_PREFIX = "OP";
	const CODE_SUFFIX = "";
	const CODE_SEPARATOR = "-";
	const CODE_FIELD = "tracking_number_c";
	const CUSTOM_TABLE = "opportunities_cstm";
	const ADD_DATE = "";
	const DATE_FORMAT = "";
	const ZERO_PADDING = 5; //minimum amount of characters desired for the number. ie 4 = 0001, 3 = 001
	const FIRST_NUM = "00001"; //default to start with.

	function add_code(&$bean, $event, $arguments)
	{
	    require_once('log4php/LoggerManager.php');

		//pattern to detect valid code, designed to detect non padded numbering too.
		$pattern = "/^" . self::CODE_PREFIX . (self::ADD_DATE?"[0-9]{2}":"") . self::CODE_SEPARATOR . "([0-9]+)" . self::CODE_SUFFIX . "$/";

	    $GLOBALS['log']->debug("add_code function fired after save.");

		if(!preg_match($pattern, $bean->fetched_row[self::CODE_FIELD])) {

			$db =  DBManagerFactory::getInstance();
			$query = "select " . self::CODE_FIELD . " from " . self::CUSTOM_TABLE .
					 " where (" . self::CODE_FIELD . " <> '' or " . self::CODE_FIELD . " is not null) order by right(" . self::CODE_FIELD . ", 4) desc limit 1";

			$result = $db->query($query, true, 'Error selecting most recent ' . self::CODE_FIELD . ' CODE');

			if ($row=$db->fetchByAssoc($result)) {
				$last_code = $row[self::CODE_FIELD];
			} else {
				//no codes exist, generate default - PREFIX CURRENT_YEAR SEPARATOR FIRST_NUM
				$last_code = self::CODE_PREFIX . (self::ADD_DATE?date(self::DATE_FORMAT):"") . self::CODE_SEPARATOR . self::FIRST_NUM . self::SUFFIX;
			}

			$GLOBALS['log']->debug("Last Code: " . $last_code);

			preg_match($pattern, $last_code, $matches);
			$num=$matches[1];
			$num++;
			$pads = self::ZERO_PADDING - strlen($num);
			$new_code = self::CODE_PREFIX . (self::ADD_DATE?date(self::DATE_FORMAT):"") . self::CODE_SEPARATOR;

			//preform the lead padding
			for($i=0; $i < $pads; $i++) {
				$new_code .= "0";
			}

			$new_code .= $num . self::CODE_SUFFIX ;

			$GLOBALS['log']->debug("New Code: " . $last_code);

			//write to database
			$query = "INSERT INTO " . self::CUSTOM_TABLE . " (id_c, " . self::CODE_FIELD . ") VALUES ('$bean->id', '$new_code') ON DUPLICATE KEY UPDATE " . self::CODE_FIELD . "='$new_code'";
			$result = $db->query($query, true, 'Error adding ' . self::CODE_PREFIX . ' code');
		} else {
			$GLOBALS['log']->debug("Code Exists...Exiting " . $bean->fetched_row[" . self::CODE_FIELD . "]);
		}
	}
}

?>