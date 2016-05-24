<?php

$name_array = array('Bred', 'Bob', 'Mike', 'Michelle');
$name_string = implode(', ', $name_array );
echo $name_string;

echo '<br/>';

$car_string = 'toyota, ford, nissan, dodge, kia, mazda';
$car_array = explode(',', $car_string);

print_r($car_array);

echo ucwords('hello world<br/>');
echo strtolower('HELLO WORLD<br/>');

sort($car_array);
print_r($car_array);

?>
