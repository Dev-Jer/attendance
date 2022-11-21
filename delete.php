<?php
require_once 'auth_check.php';
require_once 'db/conn.php';
if(!$_GET['id']){
    //echo 'error';
    include 'includes/errormessage.php';
    header("Location: viewrecords.php");
}else{
    $id = $_GET['id'];

    $result = $crud->deleteAttendee($id);

    if($result){
        header("Location: viewrecords.php");
    }else{
        //echo 'error';
        include 'includes/errormessage.php';
    }
}
?>