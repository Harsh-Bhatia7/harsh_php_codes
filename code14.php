<?php
$year = 2014;
echo "$year is " . (($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0)) ? "a leap year." : "not a leap year.") . "<br><br>";
echo "Code executed by Harsh Bhatia(0221BCA121)";
?>