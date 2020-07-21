<?php
$baseURI=(url('/'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=$baseURI?>/css/reset.css">
    <link rel="stylesheet" href="<?=$baseURI?>/css/style.css">
    <title>Pokédex</title>
</head>
<body>

    <header>
       <nav class= navbar>
            <div class="wrapper">
                <a class="title" href="<?=route('main-list')?>">Pokédex</a>
            </div>
            <div class="wrapper">
                <a class="" href="<?=route('main-list')?>">Liste</a>
                <a class="" href="<?= route('type-list') ?>">Type</a>
            </div>
       </nav>
    </header>

    <main>
