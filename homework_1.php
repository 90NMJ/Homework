<!DOCTYPE html>
<html>
<head>
<title>homework_1</title>
</head>
<body>
    <form action="" method="get">
			<label for="number">Enter a parameter:</label>
			<input type="text" name="number" />
			<br />
			<input type="submit" value="Test" />
		</form>
    <?php
    error_reporting(E_ERROR); 
	$number=$_GET['number'];  
	
	function is_prime($number) {
            if($number==1 || $number==0) {return (FALSE);}
			for($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    return (FALSE);
                } 
            }
            return (TRUE);
        }   
 if(is_numeric($number))
 { 
        if (! ($number>=0 && $number<=19999))
           	echo '<div style="color: red;">The parameter is not within the range [0,19999]</div>';
	    else if (is_prime($number)) 
			echo 'The number  '.$number.' is prime!';
        else 
			echo '<div style="color:blue">The number  '.$number.' is NOT prime!</div>';
 }
  else {echo '<div style="color: red;">The parameter is not a number!</div>';} 
 ?>
</body>
</html>