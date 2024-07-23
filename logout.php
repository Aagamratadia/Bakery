<?php
   session_start();
 session_destroy();
   session_unset();    
  unset($_SESSION['cart']);     
   echo 'You have cleaned session111';
   echo "hi";
   echo $_SESSION['cart'] ;
   header('Refresh: 2; URL = index.html');
   echo "hi";
?>