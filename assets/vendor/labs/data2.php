<?php
include 'koneksi.php';
$table = array();
$table['cols'] = array(
    //Labels for the chart, these represent the column titles
    array('id' => '', 'label' => 'Topping', 'type' => 'string'),
    array('id' => '', 'label' => 'Slices', 'type' => 'number')
    ); 

$qry = "SELECT topping, slices FROM pizza";
 
$result = mysqli_query($koneksi,$qry);


$rows = array();
while($row = mysqli_fetch_array($result)){
    $temp = array();
     
    //Values
    $temp[] = array('v' => (string) $row['topping']);
    $temp[] = array('v' => (float) $row['slices']); 
    $rows[] = array('c' => $temp);
    }
    $table['rows'] = $rows;
    $jsonTable = json_encode($table, true);
    //echo '<pre>';
echo $jsonTable;
//echo '</pre>';
?>