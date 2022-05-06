<!DOCTYPE html>
<html lang="utf-8">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/icone_pagina.svg">
    <link rel="stylesheet" href="styles-recibo.css">
    <link rel="stylesheet" href="responsividade.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Vale</title>
</head>

<body>
<div class="main" id="main">
    <h1 class=" titulo">Vale</h1>
    <div class="row">
        <div class="column-vale">
            <h4 class="label-valor">VALE</h4>
        </div>
        <div class="column-dados-vale">
            <?php
            echo "VALE:     Nº" . $_POST["mumero-recibo"], "  R$ " . $_POST["valor"], "#";
            ?>
        </div>
    </div>
    <div class="row">
        <div class="column-nome">
            <?php
            echo "NOME: " . $_POST["nome"];
            ?>
        </div>
    </div>
    <div class="row">
        <div class="column-valor">
            <?php
            echo "VALOR: " . $_POST["valor"];;
            ?>
        </div>
    </div>
    <div class="row">
        <div class="column-local-data">
            <?php
            echo "LOCAL/DATA: " . $_POST["cidade"], ", ", $_POST["data"];
            ?>
        </div>
    </div>
    <div class="borda-assinatura">
        <p class="assinatura-label">Assinatura</p>
    </div>
    <div class="row">
        <div class="column-dados-empresa">
            <?php
            echo $_POST["dados-empresa"];
            ?>
        </div>
    </div>
    <div class="botao-gerar-recibo">
        <button onclick="imprimir()">
                <span class="material-symbols-outlined">
                    description
                </span>
            Gerar Recibo
        </button>
    </div>
    <script src="funcoes.js"></script>
</body>

</html>