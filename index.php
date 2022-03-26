<?php
require('model/database.php');
require('model/carlist_db.php');


$makeID = filter_input(INPUT_POST, 'makeID', FILTER_VALIDATE_INT);
if(!$makeID) {
    $makeID = filter_input(INPUT_GET, 'makeID', FILTER_VALIDATE_INT);
}
$typeID = filter_input(INPUT_POST, 'typeID', FILTER_VALIDATE_INT);
if(!$typeID) {
    $typeID = filter_input(INPUT_GET, 'typeID', FILTER_VALIDATE_INT);
}
$classID = filter_input(INPUT_POST, 'classID', FILTER_VALIDATE_INT);
if(!$classID) {
    $classID = filter_input(INPUT_GET, 'classID', FILTER_VALIDATE_INT);
}



$makes = get_makes();
$types = get_types();
$classes = get_classes();

if($makeID) {
    $vehicles = get_cars_by_make($makeID);
} else if($typeID) {
    $vehicles = get_cars_by_type($typeID);
} else if($classID) {
    $vehicles = get_cars_by_class($classID);
} else
    $vehicles = get_cars_by_make($makeID);
    
include('view/vehicleslist.php');
?>

