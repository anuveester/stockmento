
<?php
include '../db/db.php';
include "../includes/session.php";
error_reporting(0);
date_default_timezone_set( 'Asia/Kolkata' );

//echo $today = date('Y-m-d');
$thismonththu = date( 'Y-m-d', strtotime( 'last thu of this month' ) );


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
    
                  <form class="validate-form"  method="post" action="./cid.php" role="form" id="">
                    <div class="form-row">
                      <div class="col-xl-6 col-lg-12 mb-6">
                        <label for="validationDefault04">EXPIRY</label>
                        <select class="form-select select2 form-control" name="expiry" id="expiry" required>
                          <option selected disabled value="">Choose...</option>
                          <?php

                          $sqlot = "SELECT DISTINCT stockname FROM lot ORDER BY stockname ASC";
                          $rlot = $conn->query( $sqlot );

                          //if ($result->num_rows > 0) {
                          //output data of each row
                          while ( $row = $rlot->fetch_assoc() ) {
                            ?>
                          <option value="<?php echo $row['id']; ?>"><?php echo $row['symbol']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                      <div class="col-xl-6 col-lg-12 mb-6">
                        <label for="validationDefault04">DATE</label>
                        <select class="form-select select2 form-control" name="date" id="date" required>                   
                              <option value=""> Select Date</option>
                        </select>
                      </div>
                    </div>
                    <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                  </form>
</body>
</html>