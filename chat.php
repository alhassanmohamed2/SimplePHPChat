<?php 
include 'database/datasys.php';
$get_msg = new DataQuery();
 $msg_array = $get_msg->select('test','chat','msg');

 for ($i = 0; $i < count($msg_array); $i++) {
  for ($j = 0; $j < count($msg_array[$i]); $j++) {
      echo '
 <div class="card">
      <div class="card-body">'.
      $msg_array[$i][$j]  .' 
      </div>
  </div>
 ';
  }

}