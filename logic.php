<?php
    if(isset($_POST)){
       $email = $_POST['email'];
       $senha = $_POST['senha'];
       print_r($email);
       print_r($senha);
    }
?>