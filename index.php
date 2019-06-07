<?php
     session_start();
     if( !isset( $_SESSION['user'] ) ) {
               $_SESSION['user'] = 0;
     }
     if( isset( $_SESSION['user'] ) ) {
          if ($_GET['path']=='sel' ){
               include 'sel.php';
          }
          elseif ($_GET['path']=='kagerulle' ){
               include 'kagerulle.php';
          }
/*          elseif ($_GET['path']=='logout' ){
               session_unset();
               session_destroy();
               include 'loginform.php';
          }*/
          else{
               include 'sc-server.php';
          }
     }

