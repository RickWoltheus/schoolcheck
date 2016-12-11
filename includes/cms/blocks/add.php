<?php
if ( isset( $_POST['submit_what_to_upload'] ) ) { 

foreach ($result_keys as $oneItem) {
       foreach ($oneItem as $key => $value){
         if ($key != "id") {
           ${'new_' . $key} = $_POST[$key];
           $colomn_name = ${'new_' . $key};
         }
      }
    }
    
  $result_insert = mysql_insert_array($mysqli, $Page_was, $result_keys, $_POST, "submit_what_to_upload");
  }
  function mysql_insert_array($mysqli, $table, $result_keys, $data, $exclude = array()) {
    
    if( !is_array($exclude) ) $exclude = array($exclude);
  array_push($exclude, "id");
    $fields = $values = array();
    var_dump($exclude);
    foreach( array_keys($data) as $key ) {
            if( !in_array($key, $exclude) ) {
                $fields[] = "`$key`";
                $values[] = "'" .$data[$key]. "'";
            }
        }
        $fields = implode(",", $fields);
        $values = implode(",", $values);
        $sql_insert = "INSERT INTO `$table` ($fields) VALUES ($values)";
        if ($mysqli->query($sql_insert) === TRUE) {
            echo "Record updated successfully";
          
        } else {
            echo "Error updating record: " . $mysqli->error;    
        }
      }

  
  
  //     $fields = $values = array();
  //     if( !is_array($exclude) ) $exclude = array($exclude);
  //     foreach( array_keys($data) as $key ) {
  //         if( !in_array($key, $exclude) ) {
  //             $fields[] = "`$key`";
  //             $values[] = "'" . mysql_real_escape_string($data[$key]) . "'";
  //         }
  //     }
  //     $fields = implode(",", $fields);
  //     $values = implode(",", $values);
  //   }
      
// $result_insert = mysql_insert_array("artists", $_POST, "submit");
// // Results
// if( $result_insert['mysql_error'] ) {
//     echo "Query Failed: " . $result_insert['mysql_error'];
// } else {
//     echo "Query Succeeded! <br />";
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
// }
// 




// 
// foreach ($result_keys as $oneItem) {
//     foreach ($oneItem as $key => $value){
//       echo "<tr><td><label></td></tr><tr><td>".$key."</label><input type='text' name=".$key." placeholder=".$key."></td></tr>";
// }
// }
// echo "<input type='submit' name='submit_what_to_upload' value='submit'>";
// if ( isset( $_POST['submit_what_to_upload'] ) ) { 
//   
//   foreach ($result_keys as $oneItem) {
//       foreach ($oneItem as $key => $value){
//         ${'new_' . $key} = $_POST[$key];
//         $colomn_name = ${'new_' . $key};
//         
//         if (!empty($colomn_name)) {
//         $sql_add = "INSERT $Page SET $key='$colomn_name'";
//         
//         if ($mysqli->query($sql_add) === TRUE) {
//             echo "Record updated successfully";
//         } else {
//             echo "Error updating record ".$colomn_name." at ".$key.": " . $mysqli->error;
//             var_dump($key);
//             var_dump($colomn_name);
//         }
//         }
//   }
//   }
// }
