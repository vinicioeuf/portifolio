<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
require('conexao.php');
if(isset($_POST['submit'])){
    $con = Conexao::getInstance();
    $tipoProjeto = $_POST['select'];
    $nomeProjeto = $_POST['nome'];
    $emailDoDono = $_POST['email'];
    $descricao = $_POST['detalhes'];

    $inserirNoBanco = "INSERT INTO propostas (tipoprojeto, nomeprojeto, emaildodono, descricao) VALUES ('$tipoProjeto', '$nomeProjeto', '$emailDoDono', '$descricao')";
    $stmt = $con->query($inserirNoBanco);
    header("Location: orcamento.php");
    echo "<script>swal({
        text: 'Solicitação feita! Aguarde uma resposta no seu e-mail.',
        icon: 'success',
    }).then((result) => {
        window.location.href='orcamento.php';
      });</script>"; 
}

?>