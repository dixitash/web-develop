<?php
// An array that represents a possible record set returned from a database
/*$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'last_name','id');
echo "<pre>";
print_r($last_names);
echo "</pre>";
?>*/


// chunk function array
$name=array("ashish"=>"23","ratan"=>"23","sumit"=>"23","ash"=>"23","raman"=>"23");
echo "<pre>";
print_r(array_chunk($name,5,true));
echo "</pre>";
?>

