<!DOCTYPE html>
<html lang="utf-8">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/icone_pagina.svg">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="forma-pagamento.css">
    <link rel="stylesheet" href="view-recibo.css">
    <link rel="stylesheet" href="responsividade.css">
    <link rel="stylesheet" href="labels.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Recibo de Prestação de Serviço</title>
</head>

<body>
    <div class="main" id="main">
        <form action="#" class="form" id="form-all" onsubmit="gerarRecibo();return false">
            <h1 class="titulo">Recibo de Prestação de Serviço</h1>

            <div class="row">
                <div class="column-numero-recibo">
                    <h4 class="label-valor">Número (opcional):</h4>
                    <input class="input-numero-recibo" id="numero-recibo" type="number">
                    <p class="help">Número vale</p>
                </div>
                <div class="column-valor">
                    <h4 class="label-valor">Valor:</h4>
                    <input class="input-valor" id="valor-recibo" type="text" required placeholder="00,00" name="Valor">
                    <p class="help">Valor recebido</p>
                </div>
            </div>
            <div class="column-contratante">
                <h4>Nome:</h4>
                <input class="input-contratante" id="contratante" required type="text" placeholder="Ex.: Nome do funcionário">
            </div>
            <div class="row">
                <div class="column-cidade">
                    <h4>Cidade:</h4>
                    <input class="input-cidade" type="text" id="cidade" required>
                </div>
                <div class="column-data">
                    <h4>Data:</h4>
                    <input class="input-data" type="text" id="placeholderSysDate" required maxlength="10">
                    <script>
                        date = new Date();
                        year = date.getFullYear();
                        month = date.getMonth() + 1;
                        day = date.getDate();

                        if (month < 10 || date < 10) {
                            document.getElementById("placeholderSysDate").value = '0' + day + '/0' + month + '/' + year;
                        } else {
                            document.getElementById("placeholderSysDate").value = day + '/' + month + '/' + year;
                        }
                    </script>
                </div>
                <div class="column-prestador-servico">
                    <h4>Dados da Empresa (opcional):</h4>
                    <input class="input-prestador-servico" id="nome-ps" type="text">
                </div>
            </div>
            <div class="column-duas-vias">
                <h4 class="label-duas-vias">Duas vias?</h4>
                <label class="checkbox">
                    <input type="checkbox" name="duasvias" id="duasvias">
                    Sim
                </label>
            </div>
            <div class="botao-gerar-recibo">
                <button type="submit">
                    <span class="material-symbols-outlined">
                        description
                    </span>
                    Gerar Recibo
                </button>
            </div>
        </form>
</body>

</html>