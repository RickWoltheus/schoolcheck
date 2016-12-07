<?php
if ( isset( $_POST['submit_delete']) ) { 
$query_delete = "DELETE FROM $Page WHERE id={$_POST['id_delete']} LIMIT 1";
mysqli_query ($mysqli, $query_delete);
if ($mysqli->query($query_delete) === TRUE) {
echo "deleted";
}else   {
echo "Error: " . $query_delete . "<br>" . $mysqli->error;
}
}
