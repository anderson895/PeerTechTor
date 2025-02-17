<?php
include('../class.php');
    $db = new global_class();

    session_start();
    $admin_id = intval($_SESSION['id']); 

    $session_account = $db->check_account($admin_id);

    

    $report = $db->get_count_report($session_account[0]['id']);
   
