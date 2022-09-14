<?php
 include_once "script.php";
 // instantiate database
 $database = new Database();
 $db = $database->connect();

 //instantiate user object
 $user = new User($db);

if(isset($_POST['sb'])){
    $post = filter_var_array($_POST,FILTER_SANITIZE_STRING);
    $user->email = $post['email'];
    $user->password = $post['pwd'];
    $err = '';
    if($user->email){
        if($user->AdminLogin() == 'not found'){
            $err ="<p class='alert alert-danger'>User not found</p>";
        }else if($user->AdminLogin() == 'invalid password'){
            $err ="<p class='alert alert-danger'>Password not correct</p>";
        }else if($user->adminLogin() =="true"){
            header("location:../account/home?account=login");
        }else{
            $err ="<p class='alert alert-danger'>You can't login at this moment.</p>";

        }
    }

}
 
?>