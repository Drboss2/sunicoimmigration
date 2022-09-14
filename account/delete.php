<?php 
$d = $user->deleteClient('tracking',$_GET['delete']);
if($d){
  header("location:home?account=delete");
}

?>