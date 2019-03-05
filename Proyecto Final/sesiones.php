<?php

  //Open the session
  session_start();

  if (isset($_SESSION["user"]) && $_SESSION["user"]=="admin") {
    
   header("Location: ./pag_admin/principal_admin.php");
  } 
  elseif (isset($_SESSION["user"]) && $_SESSION["user"]!="admin"){
   header("Location: ./pag_usuario/principal_user.php");
  }
  
  else {
    session_destroy();
    header("Location: login.php");
  }
?>
