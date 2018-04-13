<?php header ('Content-type: text/html; charset=UTF-8');

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$tudo = "Nome: " . $nome . "<br>" . "<br>" . "E-mail: " . $email . "<br>" . "<br>" . "Mensagem: " . $mensagem ;

$emailenviar = "ricardoccofg@gmail.com";
$destino = $emailenviar;
$assunto = "Contato Portfolio";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Ricardo-Lima<naoresponda>';

$enviaremail = mail($destino, $assunto, $tudo, $headers);
  if($enviaremail){ 
        echo "<script> alert('Mensagem enviada com sucesso!');</script>";
        echo "<script>javascript:window.location= 'index.html';</script>";
  } else {
        echo "<script> alert('Falha ao enviar o email, tente novamente!');</script>";  
        echo "<script>javascript:window.location='index.html';</script>";
  }
?>