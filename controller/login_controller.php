<?php
  /**
   *
   */
  class ControllerLogin{
    public function login(){
      $controller = new User();
      $controller->email = $_POST['txt_email'];
      $controller->senha = $_POST['txt_senha'];
      if($controller->login()){
       header('location:system.php');
      }else {
        header('location:index.php?erro=1');
      }
    }
  }

 ?>
