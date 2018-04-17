<?php 

// constants
define('NAME', 'Peter');
echo NAME.'<br />';

$birthYear = 1974;

$today = date('F j, Y');
$thisYear = date('Y');


$myAge = ($thisYear - $birthYear);
echo $myAge.'<br />';

// arrays
$cars = array('BMW','Mercedes','Jaguar');

// associative arrays
$handlebar = array(
	'name' 			  => 'Handlebar' ,
	'creep_factor'	  => 'High',
	'avg_growth_days' => 15 
);

// multi dimensional arrays
$carsNew = array(
					array(
						'make' 	=> 'BMW' ,
						'model'	=> '520',
						'price' => 15 

					),
					array(
						'make' 	=> 'Mercedes' ,
						'model'	=> 'E Class',
						'price' => 30 

					),
					array(
						'make' 	=> 'Jaguar' ,
						'model'	=> 'F Type',
						'price' => 50 

					)
);


// modulus
$a = 7;
$b = 19;
$c = ($a % $b);



?>

<!-- arrays -->
<ul>
<li><?php echo $cars[0];?></li>
<li><?php echo $cars[1];?></li>
<li><?php echo $cars[2];?></li>
</ul>

<!-- associative arrays -->
<?php echo $handlebar['name'];?><br />
<?php echo $handlebar['creep_factor'];?><br />
<?php echo $handlebar['avg_growth_days'];?><br />

<!-- multi dimensional arrays -->
<?php echo $carsNew[1]['make'];?><br>
<?php echo $carsNew[1]['model'];?><br>
<?php echo $carsNew[1]['price'];?><br>

<!-- Modulus -->

<?php echo "$c";?><br /?>

<?php
// while loop
$startingNumber = 10;
while($startingNumber <=20 ){
	echo $startingNumber.'<br>';
	$startingNumber++;
}

// for loop   set the variable, set the max, add 1
for ($a=0; $a <= 20; $a++) { 
	echo $a.'<br />';
}

// for each loop of the carsNew array
foreach ($carsNew as $row) {
	echo $row['make'].'<br />';
}

// do while loop
$i = 1;
do {
echo 'Number '. $i .'<br />';
$i++;
} while ( $i <= 10);


// sort function - sort ASC - rsort DESC
$dinner = array("Meat", "Potatoes", "Fish");
sort($dinner);
foreach ($dinner as $ingredient) {
	echo strtoupper($ingredient).'<br />';
}

// sha1
$password = 'Password';
echo 'Before: '.$password.'<br />';

$password = sha1($password);
echo 'After: '.$password.'<br />';

// custom functions

function myCustomFunction(){
  echo 'Hi There';
}

$myCustomFunction = false;

if($myCustomFunction){
myCustomFunction();
} else {
	echo 'See ya';
}

// function with argument
    function hangTen($location, $street){
    	echo 'Were surfing in '.$location.' '.$street.'<br />';
    }

hangTen('Manchester','Hallbridge Gardens');

function addNumbers($val1, $val2){
    $val3 = $val1 + $val2;
    echo $val1.'+'.$val2.'='.$val3;
}

$a = 20;
$b = 30;
addNumbers($a,$b);
?>