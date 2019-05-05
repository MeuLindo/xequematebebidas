<?php


  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $estado = $_POST['estado'];
  $cidade = $_POST['cidade'];
  $message = $_POST['message'];

  $email_from = "contato@xequematebebidas.com.br";

  $email_subject = "Formulário do Site";

  $email_body = "Nome: $name.\n".
                "Email: $visitor_email.\n".
                "Estado: $estado.\n".
                "Cidade: $cidade.\n".
                "Mensagem: $message.\n";

  $to = "contato@xequematebebidas.com.br";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
  header("Location: email-recebido.html")

?>
