<?php
$host = 'localhost:3310   ';
$dbname = "stockngl_sm";
$dbuname = "stockngl_smu";
$dbpwd = "Pratap@3213";


// Create connection
$conn = new mysqli( $host, $dbuname, $dbpwd, $dbname );


// Check connection
//if ( $conn->connect_error ) {
//  die( "Connection failed: " . $conn->connect_error );
//} else {
//  echo "Success </br>";
//}


$chf = "SELECT * FROM event where SYMBOL='infy' ORDER BY id ASC";
$pchf = $conn->query( $chf );

$num = mysqli_num_rows($pchf);
    echo "number of rows: $num</br></br>";

while ( $row = $pchf->fetch_assoc() ) {
  $event_id = $row[ 'id' ];
  $event_S = $row[ 'SYMBOL' ];
    echo "$event_id - $event_S</br>";
}


?>