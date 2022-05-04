<html>

<head>
    <title>Meu site PHP</title>
</head>

<body>
    <h3>
        <form action="index.php" method="post">
            Valor 1: <input type="number" name="valor1" required><br>
            Valor 2: <input type="number" name="valor2" required><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        echo "Resultado: " . $_POST["valor1"] + $_POST["valor2"];
        ?>
    </h3>
</body>

</html>