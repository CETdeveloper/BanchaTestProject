<?php
/**
 * Hello Controller
 *
 */
class HellosController extends AppController {

/**
 * return for a specific time and a specific name a greeting
 *
 * @banchaRemotable
 */
	public function getGreeting($timestamp,$firstname) {
		// ignore Judas
		if(strtolower($firstname)=="judas") {
			// Bancha will form the appropriete response
			return false;
		}

		// look for the day time
		$hour = date("H",$timestamp);
		if($hour<12) {
			$msg = "Good morning, ".$firstname."!";
		} elseif($hour>19) {
			$msg = "Good evening, ".$firstname."!";
		} else {
			$msg = "Hallo ".$firstname."!";
		}
		
		// return in extjs format
		// alternatively returning simply the message
		// would result in the same response
		return array(
			'success' => true,
			'data' => $msg,
		);
	}
	
}
