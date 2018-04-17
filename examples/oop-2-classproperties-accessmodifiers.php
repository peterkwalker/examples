<?php
	// class
     // properties = attributes
      // methods - functions
        // instantiate

	// class
	class User {

		// properties - use this to get them
		public $id;
		public $username;
		public $email;
		public $password;

		// constructor runs when class instantiated

		  public function __construct($username, $password){
		  // echo 'Constructor Called';
		  		// set username to property
		  	$this->username = $username;
		  	$this->password = $password;
		  }

		// method - function
		  public  function register (){
		  	echo 'Hi '. $this->username. '<br />';
		  }

		// method - function with properties
		  public function login(){
		   	$this->auth_user();
		  }

		public function auth_user(){
		//	echo $this->username. ' is authenticated';

		}  

		  // destructor eg close database

		  public function __destruct(){
		   //	echo 'Destructor Called';
		  }

}



// instantiate the class
	$User = new User('Peter', '1234');
// call the method - function
	$User->register();

// call the method - function
	$User->login();
 echo $User->username .' the name';




?>