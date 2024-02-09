<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<a href="adm.php" type="button" class="btn btn-primary">Voltar</a>
<?php
require('conexao.php');
// include_once 'userDao.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// $admUser = $_SESSION['email']; // Pega o email do adm logado no momento, a fim de saber quem aprovou ou recusou a solicitação do usuário
//Load Composer's autoloader
require 'vendor/autoload.php';

$con = Conexao::getInstance();

// if(!isset($_POST['id'])) exit;

// $id = addslashes($_POST['id']);// Pega o id do solicitante no arquivo adm.php dentro do input hidden
// $resultado = addslashes($_POST['resultado']);

$sql = "SELECT id, nomeProjeto, emailDoDono FROM propostas WHERE id = '$id'";//Seleciona os campos id, email e nome onde o id do usuário for igual ao solicitante, na tabela equips

$stmt = $con->query($sql);
$mail = new PHPMailer(true); 
$dadosSolicitacao = $stmt->fetch(PDO::FETCH_ASSOC);


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
        $mail->addAddress($dadosSolicitacao['email'], $dadosSolicitacao['nome']); //Email de quem fez a solicitação
        $mail->addReplyTo('vinicio.eufrazio@aluno.ifsertao-pe.edu.br', 'Information');
        
        $mail->isHTML(true);        
        
        if(isset($_POST['Aprovar'])){

            $sql3 = "UPDATE equips SET estado = 1 WHERE id='$resultado'"; //O campo "estado" da tabela recebe o valor 1, significando que a soliciação foi APROVADA
            date_default_timezone_set('America/Sao_Paulo');
            
            $agora = date('d/m/Y H:i'); 
            $mail->Subject = 'Solicitacao LabMaker IFSalgueiro';
            $mail->Body    = "Sua solicitaçao foi Aprovada! Lembre-se de comparecer ao campus no horário selecionado. Email respondido por: <b>$admUser</b> respondido ás $agora";
            $mail->AltBody = 'sua solicitaçao foi Aprovada!';

        }else{
            $sql3 = "UPDATE equips SET estado = 2 WHERE id ='$resultado'";//O campo "estado" da tabela recebe o valor 2, significando que a soliciação foi NEGADA
            $agora = date('d/m/Y H:i'); 
            date_default_timezone_set('America/Sao_Paulo'); 
            $mail->Subject = 'Solicitacao LabMaker IFSalgueiro';
            $mail->Body    = "Sua solicitaçao foi Negada! Verifique se você descreveu de forma coerente o motivo que deseja usar a sala do LabMaker. Email respondido por: <b>$admUser</b> respondido ás $agora";
            $mail->AltBody = 'sua solicitaçao foi Negada!';
        }
// pegar email logado da sessao e enviar junto com email pra mostrar quem aprovou ou negou a soliciataçao
        
        $stmt2 = $con->query($sql3);
        $mail->send();
        echo 'Obrigado!!!!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    echo "email: {$dadosSolicitacao['email']}";

    

?>





