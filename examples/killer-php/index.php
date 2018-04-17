<?php 
class Laptops {
	public $make = 'Dell';
	public $screenSize = 18;
	public $wifi = 'Yes';

	public function showDetails(){

		echo 'make '.$this->make.' screen size '.$this->screenSize.' wifi '.$this->wifi;
	}



}




$details = new Laptops;
$details->make = 'Toshiba';
echo $details->showDetails();

?>