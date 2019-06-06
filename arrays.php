<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = [
    "Steak BBQ",
    "Biriyani",
    "Ice Cream",
    "Gulfi"
];

/*
Print every array element in a new line.
*/

echo "$food[0]<br>";
echo "$food[1]<br>";
echo "$food[2]<br>";
echo "$food[3]";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>";
echo "<li>".$food[0]."</li>";
echo "<li>".$food[1]."</li>";
echo "<li>".$food[2]."</li>";
echo "<li>".$food[3]."</li>";
echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$steak_bbq = ["Starter"]; 

$biriyani = ["Main Course"]; 

$ice_cream = ["Desert"]; 

$gulfi = ["Desert"]; 

$food_assoc = [
    $steak_bbq,
    $biriyani,
    $ice_cream,
    $gulfi
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo "Sreak BBQ | ". $food_assoc[0][0]. "<br>";
echo "Biriyani | ". $food_assoc[1][0]. "<br>";
echo "Ice Cream | ". $food_assoc[2][0]. "<br>";
echo "Gulfi | ". $food_assoc[3][0];

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/ 

$steak_bbq = [
   "Starter", 
   "England"
]; 

$biriyani = [
   "Main Course", 
   "Persia"
]; 

$ice_cream = [
   "Desert", 
   "China"
]; 

$gulfi = [
   "Desert", 
   "India"
]; 

$food_assoc = [
    $steak_bbq,
    $biriyani,
    $ice_cream,
    $gulfi
];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo "Sreak BBQ | ". $food_assoc[0][0]. " | ". $food_assoc[0][1]. "<br>";
echo "Biriyani | ". $food_assoc[1][0]. " | ". $food_assoc[1][1]. "<br>";
echo "Ice Cream | ". $food_assoc[2][0]. " | ". $food_assoc[2][1]. "<br>";
echo "Gulfi | ". $food_assoc[3][0]. " | ". $food_assoc[3][1];

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/ 

?>

<html>
<style>
	table,th,td {
		border: 1px solid black;
		text-align: center;
	}
</style>
<table>
	<tr>
		<th>food</th>
		<th>type</th>
		<th>origin</th>
	</tr>
	<tr>
		<td><?php echo 'Steak BBQ' ?></td>
		<td><?php echo $food_assoc[0][0] ?></td>
		<td><?php echo $food_assoc[0][1] ?></td>
		<?php next($food_assoc)?>
	</tr>
	<tr>
		<td><?php echo 'Biriyani' ?></td>
		<td><?php echo $food_assoc[1][0] ?> </td>
		<td><?php echo $food_assoc[1][1] ?></td>
		<?php next($food_assoc)?>
	</tr>
	<tr>
		<td><?php echo 'Ice Cream' ?></td>
		<td><?php echo $food_assoc[2][0] ?> </td>
		<td><?php echo $food_assoc[2][1] ?></td>
		<?php next($food_assoc)?>
	</tr>
	<tr>
		<td><?php echo 'Gulfi' ?></td>
		<td><?php echo $food_assoc[3][0] ?> </td>
		<td><?php echo $food_assoc[3][1] ?></td>
	</tr>
</table>
</html>