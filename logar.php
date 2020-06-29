<?php

    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

        require 'conexao.php';
        require 'usuario.class.php';

        $u = new usuario();


        $em = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);


        if($u->login($em, $senha)==true){
            if(isset($_SESSION['isUser'])){
                header("Location: login.php");
            }else{
                header("Location: logado.php");
            }
        }else{
            header("Location: login.php");}
        }        
?>