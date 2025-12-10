<?php
function generateprimes($maxnumber)
{
echo "Prime numbers up to $maxnumber: ";
for($number = 2; $number <= $maxnumber; $number++)
{
$isprime = true;
for($i = 2; $i <= sqrt($number); $i++)
{
if($number % $i == 0)
{
$isprime = false;
break;
}
}
if($isprime)
{
echo $number . " ";
}
}
echo "<br>";
}
function fibonacciseries($numterms)
{
$first = 0;
$second = 1;
echo "Fibonacci series ($numterms terms): ";
for ($i = 0; $i < $numterms; $i++)
{
echo $first . " ";
$next = $first + $second;
$first = $second;
$second = $next;
}
echo "<br>";
}
generateprimes(50);
fibonacciseries(10);
?>