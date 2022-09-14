<?php
 include_once "config.php";
 include_once "script.php";

//instantiate database object
$database = new Database();
$db = $database->connect();

//instantiate user object
$user = new User($db);

if(isset($_POST['submit'])){
    $post = filter_var_array($_POST,FILTER_SANITIZE_STRING);
    $user->fullname =     $post['fullname'];
    $user->email    =     $post['email'];
    $user->password =     $post['password'];

    $pass2          =     $post['password2'];

    $date = new DateTime();
    $user->date = $date->format("Y-m-d H-m-s");

    if(!filter_var($user->email,FILTER_VALIDATE_EMAIL)){
        $error = "<p class='alert alert-danger'>invalid email address<p>";
    }elseif($user->password != $pass2){
        $error = "<p class='alert alert-danger'>password not match</p>";
    }elseif($user->emailExist($user->email)){
        $error  = "<p class='alert alert-danger'>email already exist</p>";
    }else{
       if($user->createAccount()){
                $user->SendMail($user->email);
                //$user->SendMail($user->email,$user->email,$password);
             header("location:http://localhost/coin/login?success");
        }
    }
    
}


?>