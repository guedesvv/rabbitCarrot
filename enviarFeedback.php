<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="icon" href="imgs/icone_coelhito.png" />
    <link rel="stylesheet" href="css/stilos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rabbit - Feedback Enviado</title>
<?php

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $oQueAchou = $_POST['oQueAchou'];
    $sugestao = $_POST['sugestao'];

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "contato@rabbitcarrot.com.br";
    $to = "contato@rabbitcarrot.com.br";
    $subject = "Feedback recebido";
    $message = "E-mail: $email\n\nNome? $nome\n\nO que achou?: $oQueAchou\n\nSugestao: $sugestao";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "<img src='imgs/agradecendoFeedback.png' class='img-fluid' alt='Responsive image'>
    <a href='index.html'><button type='button' class='btn btn-outline-secondary btn-lg btn-block'>Voltar</button></a>
    ";
    
?>