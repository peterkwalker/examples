<?php

// camel case 1st lowercase
	 $myVar1 = 'Hello';
	 $myVar2 = 'How are You';  
	 echo $myVar1.' World '. $myVar2 .'<br />';

// arrays are 0 based
	 $numbers = array(12,45,67);
	 $numbers = [13,65,78];
	 print_r($numbers).'<br />';
	 echo $numbers[1].'<br />';

	// associative arrays
		$ages = array(
			"John" => 15,
			"Bob" => 50,
			"Mary" => 70
		);

	echo $ages['Mary'].'<br />';

	// remove last value
	array_pop($ages);

	// remove first value
	array_shift($ages);

	// total values
	echo count($ages).'<br />';

// for loop
	for ($i = 0;$i < 5;$i++){
		echo $i.'<br />';
	}	

// while loop
	$i = 0;
	while ($i <= 10) {
		echo 'Number'. $i. '<br />';
		$i++;
	}

	// for each loop - arrays

	$numbers = array(12,45,67,98,56);

	foreach ($numbers as $number) {
		echo 'This is Number'. $number. '<br />';
	}

	// for each loop associative

	$ages = array(
			"John" => 15,
			"Bob" => 50,
			"Mary" => 70
		);

	foreach ($ages as $age) {
		echo $age. '<br />';
	}

// for each loop associative incl key

	$ages = array(
			"John" => 15,
			"Bob" => 50,
			"Mary" => 70
		);

	foreach ($ages as $key => $age) {
		echo $key.' is '. $age. ' years old <br />';
	}

?>