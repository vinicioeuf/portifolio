<?php
    session_start();
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
            <td><?php echo $_SESSION['email'];?></td>
            <td><a href="">Adicionar</a></td>
            <td><a href="">Ver</a></td>
            <td><a href="">Alterar</a></td>
            <td><a href="">Remover</a></td>
        </tr>
    </table>
    <div class="voltar">
        <a href="index.php"><img src="tiringa2.jpeg" alt="" id="logoTiringa2"></a>
    </div>
</section>