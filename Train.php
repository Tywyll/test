<?php

class Train {

	private $registrationNumber;
	private $merchandise;
	private $enRouteStations = array('Prince', 'Rector', 'Spring', 'Times');
	private $willArriveTo;
	private $justLeft;

	function __construct($registrationNumber) {
		$this->registrationNumber = $registrationNumber;
	}

	public function startTrip($dateAndTime) {
		$this->justLeft = $this->enRouteStations[0];
		$this->willArriveTo = $this->enRouteStations[1];

		//setDateAndTimeInDatabase
	}

	public function finishTrip($dateAndTime) {
		//setDateAndTimeInDatabase
	}

	function setPassedNextStation() {

		$this->willArriveTo = next($this->enRouteStations);
		$this->justLeft = $this->willArriveTo;
	}
	
	public function addStation($name, $beforeName) {
		$cur=current($this->enRouteStations);
		$tmp=array_keys($this->enRouteStations,$beforeName);
		array_splice($this->enRouteStations, ($tmp[0]+1), 0, $name);
		unset($tmp);
		while (current($this->enRouteStations)!=$cur) next($this->enRouteStations);
	}
	
	function getFirstStaion() {
		return $this->enRouteStations[0];
	}
	function getNextStation() {
		return $this->willArriveTo;
	}
	function getLastStation() {
		return end($this->enRouteStations);
	}
}

?>
