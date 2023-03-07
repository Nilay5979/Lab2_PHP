<?php
// Define a function to update the user's name
function update_name($name) {
    $new_name = $name . "Patel";
    return $new_name;
}

// Print a variable created in Display.php
if (isset($_GET['name'])) {
    echo "Welcome, " . $_GET['name'] . "!<br>";
}

// Include Form.php and Display.php
include_once('form.php');
include_once('display.php');
    echo "<br>";

// Define an array
$colors = array("Red", "Green", "Blue", "Yellow", "Purple", "Orange", "White", "Black");
$number=1;
    
    echo "<b>Using foreach loop to print the colors which are available in the array: </b><br>";
    echo "<br>";
    
// Use a foreach loop to print all the items in the array
foreach ($colors as $color) {
    //used str_repeat to use &nbsp for the 8 times to make it looks good.
    echo str_repeat('&nbsp;',8).$color ." color is number ".$number." in the given array list.". "<br>";
    echo "<br>";
    $number++;
}

?>
