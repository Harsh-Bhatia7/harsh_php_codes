<?php
	function selfMultiply(&$number){
		$number *= $number;
		return $number;
	}
	
	$mynum = 5;
	echo "The number is: " . $mynum;
	echo "<br>";
	selfMultiply($mynum);
	echo "Number after multiplication: " . $mynum;
	echo "<br><br>";
    echo "Code executed by Harsh Bhatia(0221BCA121)";
?>