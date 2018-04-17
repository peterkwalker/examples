<?php
	// class
     // properties = attributes
      // methods - functions
        // instantiate

	// class
	class User {

		// constructor runs when class instantiated

		  public function __construct(){
		  // echo 'Constructor Called';
		  }

		// method - function
		  public  function register (){
		  	echo 'Hi <br />';
		  }

		// method - function with properties
		  public function login($username, $password){
		  	echo $username. ' is now logged in'. $password;
		  }

		  // destructor eg close database

		  public function __destruct(){
		   //	echo 'Destructor Called';
		  }

}

// instantiate the class
	$User = new User;
// call the method - function
	$User->register();

// call the method - function
	$User->login('Peter', '12345');





?>