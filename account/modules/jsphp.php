<?php
    include_once "../config/db.php";
    include_once "script.php";

    // instantiate database
    $database = new Database();
    $db = $database->connect();

    //instantiate user object
    $user = new User($db);

    if(isset($_POST['set'])){
        $post                  = filter_var_array($_POST,FILTER_SANITIZE_STRING);
        $user->id              = $post['id'];
        $user->details         = $post['sadd'];
        $user->tracking_number = $post['track'];
        $user->other_details   = 'empty';
        $user->delivery_country = $post['location'];

        echo $user->addShippingHistory();
        exit();
    }

    if(isset($_POST['del'])){
        $post = filter_var_array($_POST,FILTER_SANITIZE_STRING);
        $user->id  = $post['id'];
       
       echo $user->deleteClient('shipping_history',$user->id);

       exit();
    }

    if(isset($_POST['edit'])){ // get single shipping history data
        $post = filter_var_array($_POST,FILTER_SANITIZE_STRING);
        $user->id  = $post['id'];
       
       echo json_encode($user->singleClient('shipping_history',$user->id));

       
       exit();
    }
    
    if(isset($_POST['editForms'])){ // edit shipping history data
        $post = filter_var_array($_POST,FILTER_SANITIZE_STRING);
        $user->id  = $post['id'];
        $user->details = $post['real'];

       
       echo $user->editShippingDetails($user->id);

       exit();
    }


    


?>