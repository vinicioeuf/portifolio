<?php
session_start();
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $telefone = $_POST['telefone'];
        $endereco = $_POST['address'];
        $where = $_POST['op'];

        $select = $_POST['estado'];
        $message = $_POST['message'];
        $file = $_POST['arquivo'];
        if($email == 'vinicio.eufrazio@aluno.ifsertao-pe.edu.br' && $senha == '123'){
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            
            header("Location: painel.php");
        }else{
            echo "Inválidos, sessão destruida";
            unset($_SESSION['email']);
            unset($_SESSION['senha']);

            
            
        }

    }

?>