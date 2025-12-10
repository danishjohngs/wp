<?php
function removeduplicates($array)
{
$result=array_values(array_unique($array));
return $result;
}
$sortlist=[1,1,2,2,3,3,4,4,5,5,6,6];
$uniquelist=removeduplicates($sortlist);
echo"ORIGINAL LIST:";
print_r($sortlist);
echo"<br> uniquelist:";
print_r($uniquelist);
?>