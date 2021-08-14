<?php 
include 'database/datasys.php';
$delete_chat = new DataQuery();


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    
    $delete_chat->delete('flsk','chat');

}
