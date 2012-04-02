<?php
$arr = range(20, 1000, 37);

function find_3_prime()
{
require 'is_prime.php';
global $arr;
$count = 0;
	foreach( $arr as $value )
    {
        if(is_prime( $value ))
		{$count++;}
	    if ($count == 3)
		{
		echo "$value </br>" ;
		break;
		}
    }
}	
function check_exists()
{
    global $arr;
	if(in_array("146",$arr))
	echo "The number 146 exist in the array </br>";
	else 
	echo "The number 146 does not exist in the array  </br>";

	if(in_array("284",$arr))
	echo "The number 284 exist in the array </br>";
	else 
	echo "The number 284 does not exist in the array </br>";

 	if(in_array("871",$arr))
	echo "The number 871 exist in the array </br>";
	else 
	echo "The number 871 does not exist in the array </br>";
}


find_3_prime();
check_exists();

?> 