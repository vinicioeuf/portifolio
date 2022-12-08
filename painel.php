<?php
    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){// Ele verifica se não há uma sessão com as credenciais email e senha, se não houver ele destrói a sessão.
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
    }
?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<section>
    <div class="logo">
        <img src="tiringa.jpg" alt="" id="logoTiringa">
    </div>
    <table class="tabela" border='2'>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th colspan='4'>Ações</th>
        </tr>
        <tr>
            <td><?php echo "Vinicio";?></td>
            <td><?php echo "vinicio.eufrazio@aluno.ifsertao-pe.edu.br";?></td>
            <td><a href="" style="color: white;">Adicionar</a></td>
            <td><a href="" style="color: white;">Alterar</a></td>
            <td><a href="" style="color: white;">Remover</a></td>
        </tr>
    </table>
    <div class="voltar">
        <a href="index.php"><img src="tiringa2.jpeg" alt="" id="logoTiringa2"></a>
    </div>
</section>