<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// $admUser = $_SESSION['email']; // Pega o email do adm logado no momento, a fim de saber quem aprovou ou recusou a solicitação do usuário
//Load Composer's autoloader
require 'vendor/autoload.php';
require('conexao.php');
if(isset($_POST['submit'])){
    $con = Conexao::getInstance();
    $tipoProjeto = $_POST['select'];
    $nomeProjeto = $_POST['nome'];
    $emailDoDono = $_POST['email'];
    $descricao = $_POST['detalhes'];
    $valor = 0;
    switch ($tipoProjeto) {
        case 'Web: E-commerce':
            $valor = 4325.75;
            break;
        case 'Web: Blog':
            $valor = 2475.76;
            break;
        case 'Web: Controle de estoque':
            $valor = 3245.34;
            break;
        case 'Web: Outro':
            $valor = 2000;
            break;
        case 'Aplicativo: Android':
            $valor = 8000;
            break;
        case 'Aplicativo: IOS':
            $valor = 10000;
            break;
        case 'Aplicativo: Android e IOS':
            $valor = 20000;
            break;
        case 'Aplicativo: Outro':
            $valor = 6000;
            break;
        default:
            # code...
            break;
    }
    $inserirNoBanco = "INSERT INTO propostas (tipoprojeto, nomeprojeto, emaildodono, descricao, valor) VALUES ('$tipoProjeto', '$nomeProjeto', '$emailDoDono', '$descricao', '$valor')";
    $stmt = $con->query($inserirNoBanco);
    try {

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'vinicio.eufrazio@aluno.ifsertao-pe.edu.br';  // Remetente           
        $mail->Password   = 'vj5u3ct6';                              
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
        $mail->Port       = 465;                              
    
        $mail->setFrom('vinicio.eufrazio@aluno.ifsertao-pe.edu.br', 'LabMaker IFSalgueiro');// Remetente
        $mail->addAddress($email, $nomeProjeto); //Email de quem fez a solicitação
        $mail->addReplyTo('vinicio.eufrazio@aluno.ifsertao-pe.edu.br', 'Information');
        
        $mail->isHTML(true);        
        
        date_default_timezone_set('America/Sao_Paulo');
            
        $agora = date('d/m/Y H:i'); 
        $mail->Subject = "Orçamento $nome";
        $mail->Body    = "Nome do projeto: $nome\nDescrição do projeto: $descricao\nValor aproximado: R$$valor\nEm breve retornaremos para acertarmos detalhes da proposta!";
        $mail->AltBody = 'Valor e detalhes';
    // pegar email logado da sessao e enviar junto com email pra mostrar quem aprovou ou negou a soliciataçao
        
        $mail->send();
        echo 'Obrigado!!!!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    echo "<script>swal({
        text: 'Solicitação feita! O valor foi enviado no seu e-mail!.',
        icon: 'success',
    }).then((result) => {
        window.location.href='orcamento.php';
      });</script>"; 
}

   


?>