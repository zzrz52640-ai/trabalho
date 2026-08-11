<?php

//Esse erro me deu canseira e insônia, pois passei 2 dias tentando arrumar ele '-'

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$profissao = $_POST["profissao"];
$salario = $_POST["salario"];
$experiencia = $_POST["experiencia"];

?>

<link rel="stylesheet" href="estilo.css">

<main class="container">

    <h1>Seu cadastro foi realizado com sucesso!</h1>

    <h2>Vamos ver seus dados!</h2>

    <p><strong>Qual seu nome?: </strong> <?php echo $nome; ?></p>

    <p><strong>Qual sua idade?: </strong> <?php echo $idade; ?> anos</p>

    <p><strong>Do que você quer trabalhar: </strong> <?php echo $profissao; ?></p>

    <p><strong>O que pretende receber?: </strong> R$ <?php echo $salario; ?></p>

    <p><strong>Teve alguma experiência anterior? Se sim, o que foi?: </strong> <?php echo $experiencia; ?></p>

    <hr>

    <p>
        Olá, <strong><?php echo $nome; ?></strong>!
        Recebido o seu cadastro, sua profissão agora é:
        <strong><?php echo $profissao; ?></strong>.
        Agradecemos por compartilhar sua experiência:
        <strong><?php echo $experiencia; ?></strong>.
        Obrigado, seu cadastro está seguro e enviado para nosso sistema!
    </p>

    <a href="cadastro.html">
        <button type="button">Voltar ao formulário</button>
    </a>

</main>
