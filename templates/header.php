<?php
include_once("helpers/url.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog codar</title>
    <!--estilos do prjeto-->
    <link rel="stylesheet" href="<?=$BASE_URL?>/css/styles.css">
    <!--googlefonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

</head>
<body>
    <header>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar">
    </a>
    <nav>
        <li><a href="<?= $BASE_URL?>">home</a></li>
        <li><a href="#">Categorias</a></li>
        <li><a href="#">sobre</a></li>
        <li><a href="<?= $BASE_URL?>/contato.php">Contatos</a></li>
    </nav>

    </header>