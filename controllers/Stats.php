<?php
/**
 * class for work with air passengers
 */
Class Stats{
	/**
	 * show table with air passengers who satisfy the input conditions
	 * @param  string $string string with input conditions
	 * @return string template with passenger's information
	 */
	static public function 	show_statistics($string){
		include("dbconnect.php");
		$conditionDate = 1;
		$conditionAge = "";
		$revstring = strrev($string);
		$parameters = explode(";", $revstring);

		if(count($parameters) == 2){
			$DateString = '';
			$AgeString = '';
			foreach ($parameters as $value) {
				$isDate = strripos ( $value , 'date' );
				$isAge = strripos ( $value , 'age' );

				if($isDate !== false){
					$DateString = $value;
				}

				if($isAge !== false){
					$AgeString = $value;
				}
			}

			
			$conditionDate = self::getDate($DateString);
			$conditionAge = self::getAge($AgeString);
		}

		$sql = "SELECT planes.name as name, 
			planes.flight_date as date, 
			(SELECT 
				AVG(age) 
				FROM passengers 
				WHERE sex = 'f' AND 
				plane_id = planes.id " . $conditionAge . ") as fem_avg,
			(SELECT 
				AVG(age) 
				FROM passengers 
				WHERE sex = 'm' AND 
				plane_id = planes.id " . $conditionAge . ") as mel_avg 
			FROM planes WHERE " .  $conditionDate;

		$results = array();

		foreach ($dbh->query($sql) as $row) {
		   $results[] =$row;
		}

		include("./templates/planes.php");
	}

	/**
	 * get prepared Date data to mysql request
	 * @param  string $dateString part of input request with date data
	 * @return string   part of condition for final  request
	 */
	static private function getDate($dateString)
	{
		$signArray = array('<', '>');
		$romanArray = array(
			"I" => 1,
			"II" => 2,
			"III" => 3,
			"IV" => 4,
			"V" => 5,
			"VI" => 6,
			"VII" => 7,
			"VIII" => 8,
			"IX" => 9,
			"X" => 10,
			"XI" => 11,
			"XII" => 12
		);
		$sign = substr($dateString, 4, 1);
		if (!in_array($sign, $signArray)) {
			echo 'incorrect input data';
			return true;
		}
		$dateString = substr($dateString, 5);
		$dateArray = explode('.', $dateString);
		if (count($dateArray) != 3) {
			return '';
		}
		if (isset($romanArray[$dateArray[1]]) && $romanArray[$dateArray[1]] > 0 ) {
			$dateArray[1] = $romanArray[$dateArray[1]];

			return "planes.flight_date " . $sign . " '" . intval($dateArray[2]) . "." . $dateArray[1] . "." . intval($dateArray[0]) . "'";
		}
		return '';
	}

	/**
	 * get prepared Age data to mysql request
	 * @param  string $ageString part of input request with date data
	 * @return string   part of condition for final  request
	 */
	static private function getAge($ageString)
	{
		$signArray = array('<', '>');
		$sign = substr($ageString, 3, 1);
		if (!in_array($sign, $signArray)) {
			return '';
		}
		$ageValue = intval(substr($ageString, 4));
		
		if ($ageValue > 0) { 
			return " AND age " . $sign . " " . $ageValue;
		}
		
		return '';
	}
}