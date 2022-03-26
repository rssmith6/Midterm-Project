<?php
require_once('model/database.php');
require_once('model/vehicles_db.php');
require_once('model/make_db.php');
require_once('model/types_db.php');
require_once('model/classes_db.php');




$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);
if(!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW);
    if(!$action) {
        $action = 'vehicles_list';
    }
}

require_once('controllers/vehicles.php');
require_once('controllers/types.php');
require_once('controllers/makes.php');
require_once('controllers/classes.php');

/*$makeID = filter_input(INPUT_POST, 'makeID', FILTER_VALIDATE_INT);
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
    
include("view/vehicles_list.php"); */
?>