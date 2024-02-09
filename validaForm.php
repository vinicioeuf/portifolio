<?php
require('conexao.php');
$con = Conexao::getInstance();
if(isset($_POST['submit'])){
    $tipoProjeto = $_POST['select'];
    $nomeProjeto = $_POST['nome'];
    $emailDoDono = $_POST['email'];
    $descricao = $_POST['detalhes'];

    $inserirNoBanco = "INSERT INTO propostas (tipoProjeto, nomeProjeto, emailDoDono, descricao) VALUES ('$tipoProjeto', '$nomeProjeto', '$emailDoDono', '$descricao')";
    $stmt = $con->query($inserirNoBanco);
    echo "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
  <div class='toast-header'>
    <img src='...' class='rounded me-2' alt='...'>
    <strong class='me-auto'>Bootstrap</strong>
    <small>11 mins ago</small>
    <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
  </div>
  <div class='toast-body'>
    Proposta enviada!
  </div>
</div>"; 
}

?>