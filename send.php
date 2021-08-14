<?php 
include 'database/datasys.php';
$insert_msg = new DataQuery(/*Host, username, password*/);


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    
    $msg = '"'. $_POST['msg'].'"';
    $insert_msg->insert('test','chat','msg',$msg);
    

}
