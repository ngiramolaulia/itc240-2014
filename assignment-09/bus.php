<?php
class Tester {
	public $passed = 0;
	public $failed = 0;
	
	function test($a, $b) {
		if ($a == $b) {
			$this->passed = $this->passed + 1;
			return true;
		} else {
			echo "FAIL: expected $a, got $b<br>";
			$this->failed = $this->failed + 1;
		}
	}
}

class Bus {
	public $armed = false;//starts out as false; TURNS TRUE ONCE THE BUS HAS PASSED 50mph <<bomb
	public $exploded = false;//starts out as false;IS SET TO TRUE IF THE BOMB IS ARMED AND THE BUS GOES LESS THAN 50mph
	public $currentSpeed = 20;//bus starts out at 20mph
	
	function setSpeed($speed) {
		$this->currentSpeed = $speed;
		//return true; I was testing things
		
		if($speed >= 50) {
			$this->armed = true;
		}
		if($speed < 50) {
			$this->exploded = true;
		}
	}
	
	function getSpeed() {
		return $this->currentSpeed;
	}
	
	function trigger() {
		$this->exploded = true;
	}
}