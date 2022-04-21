<?php 
  $username = 'admin';
  $password = 'admin';
  
  session_start();
  if(isset($_SESSION['user'])){
    header('Location: landing.php');
  }
  elseif($_POST['username'] == $username && $_POST['password'] == $password){
    $_SESSION['user'] = $username;
    header('Location: logic.php');
  }
  else{
    header('Location: index.php'); 
  }
    
    
?>