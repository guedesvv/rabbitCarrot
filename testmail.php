<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="icon" href="imgs/icone_coelhito.png" />
    <link rel="stylesheet" href="css/stilos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rabbit - Receita enviada</title>
<?php

    $nome = $_POST['nome'];
    $soube = $_POST['soube'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $porcao = $_POST['porcao'];
    $tempo = $_POST['tempo'];
    $dificuldade = $_POST['dificuldade'];
    $ds = $_POST['ds'];
    $igredientes = $_POST['igredientes'];
    $passoapasso = $_POST['passoapasso'];

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "contato@rabbitcarrot.com.br";
    $to = "contato@rabbitcarrot.com.br";
    $subject = "Receitinhas fresquinhas";
    $message = "Nome: $nome\n\nComo soube? $soube\n\nTitulo da receita: $titulo\n\nDescricao da receita: $descricao\n\nPorcao da receita: $porcao\n\nTempo de preparo: $tempo\n\nDificuldade de preparo: $dificuldade\n\nDoce ou salgado? $ds\n\nIgredientes da receita: $igredientes\n\nPasso a passo: $passoapasso";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "<img src='imgs/agradecendo.png' class='img-fluid' alt='Responsive image'>
    <a href='index.html'><button type='button' class='btn btn-outline-secondary btn-lg btn-block'>Voltar</button></a>
    ";
    
?>