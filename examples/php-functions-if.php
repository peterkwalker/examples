<?php

// function is a block of code that can be repeated through app

	function greet(){
		echo 'Hello <br />';

	}

	// call the function
	greet();

// function with params and default name value
	function greet1($greeting, $name='John'){
		echo strtoupper($greeting.' '. $name.'<br />');
	}
	greet1('Welcome');


// conditions
	$num = 10;
	$num2 = 50;

	if ($num == 50){
		echo 'Correct';
    } elseif($num == 50) {
    	echo 'Correct';
    } else {
    	echo 'Incorrect';
    }


?>