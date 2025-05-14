<?php
$error = "";
$mostrarResultado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST['precio_original']) && isset($_POST['descuento']) &&
        is_numeric($_POST['precio_original']) && is_numeric($_POST['descuento'])
    ) {
        $precio_original = floatval($_POST['precio_original']);
        $descuento = floatval($_POST['descuento']);

        if ($precio_original > 0 && $descuento >= 0) {
            $precio_final = $precio_original - ($precio_original * ($descuento / 100));
            $mostrarResultado = true;
        } else {
            $error = "Por favor, introduce valores numéricos positivos. El precio debe ser mayor que 0 y el descuento no puede ser negativo.";
        }
    } else {
        $error = "Por favor, completa todos los campos con valores numéricos válidos.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumito Calculator</title>
    <link rel="stylesheet" href="../../css/sumito.css">
</head>

<body>
    <header>
        <section id="logoSection">
            <a href="index.php"><img src="../../img/sumito.png" alt="Logo de Sumito" id="logo"></a>
            <h1>Sumito Calculator</h1>
        </section>
        <nav>
            <a href="../../index.html">KalypsoDev</a>
            <a href="../../pages/mi-historia.html">Mi historia</a>
            <a href="../../pages/mi-cv.html">Mi CV</a>
            <a href="../../pages/contacto.html">Contacto</a>
        </nav>
    </header>
    <main>
        <section id="hero">
            <img src="../../img/sumitoCalculator.png" alt="Sumito Calculator">
            <section id="welcome">
                <h2>Conoce a Sumito: tu cómplice de descuentos 🛍️
                </h2>
                <p><strong>Sumito</strong> no es cualquier calculadora: es tu aliado ideal para cuando vas de compras.
                    Diseñado para
                    ayudarte a calcular rápidamente el precio final después de aplicar un descuento,
                    <strong>Sumito</strong> te muestra
                    de forma clara y sencilla tres cosas: el precio original, el porcentaje de descuento y el precio
                    final que vas a pagar
                </p>
                <p>Con su diseño amigable y colorido, <strong>Sumito</strong> hace que sacar cuentas sea tan fácil como
                    divertido.
                    Perfecto para ahorrar tiempo, dinero… ¡y dolores de cabeza!</p>
                <p><strong>Sumito</strong>: para comprar con cabeza y corazón 💸❤️</p>
            </section>

        </section>
        <section id="calculator">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <section class="form_section">
                    <label for="precio_original">Precio Original del Producto (€): </label>
                    <input type="number" id="precio_original" name="precio_original" required>
                </section>
                <section class="form_section">
                    <label for="descuento">Descuento (%): </label>
                    <input type="number" id="descuento" name="descuento" required>
                </section>
                <section id="buttons_container">
                    <button type="submit">Calcular Precio Final</button>
                    <button type="reset">Limpiar datos</button>
                </section>
            </form>
        </section>
        <?php if ($mostrarResultado): ?>
            <section id="result">
                <table>
                    <tr>
                        <th>Concepto</th>
                        <th>Valor</th>
                    </tr>
                    <tr>
                        <td>Precio Original del Producto</td>
                        <td><?php echo number_format($precio_original, 2); ?>€</td>
                    </tr>
                    <tr>
                        <td>Descuento aplicado</td>
                        <td><?php echo number_format($descuento, 2); ?>%</td>
                    </tr>
                    <tr id="precio_final">
                        <td>Precio Final</td>
                        <td><?php echo number_format($precio_final, 2); ?>€</td>
                    </tr>
                </table>
            </section>
        <?php elseif (!empty($error)): ?>
            <section id="error">
                <p><?php echo $error; ?></p>
            </section>
        <?php endif; ?>


    </main>
    <footer>
        <p>Copyright © 2025 KalypsoDev - All rights reserved</p>
    </footer>
</body>

</html>