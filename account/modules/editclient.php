<?php
    include_once "../config/db.php";
    include_once "script.php";

    // instantiate database
    $database = new Database();
    $db = $database->connect();

    //instantiate user object
    $user = new User($db);

    if(isset($_POST['client'])){
        $post = filter_var_array($_POST,FILTER_SANITIZE_STRING);
        $id                     = $post['id'];
        $user->sender           = $post['name'];
        $user->sender_address   = $post['sender'];
        $user->sender_country   =  $post['country'];
        $user->phone            =  $post['phone'];
        $user->email            =  $post['email'];
        $user->visa             = $post['visa'];
        $user->gender           = $post['gender'];
        $user->amount           = $post['amount'];
        $user->period           = $post['period'];
        $user->agent            = $post['agent'];
        $user->family           = $post['family'];
        $user->member           = $post['member'];
        $user->payment          = $post['payment'];
        $user->status           = $post['status'];
        $user->progress         = $post['progress'];


        $user->editClientsInfo($id); 

         header("location:../home?account=edit");
    }

?>