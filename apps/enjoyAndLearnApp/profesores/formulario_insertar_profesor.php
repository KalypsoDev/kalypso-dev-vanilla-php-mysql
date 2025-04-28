<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para añadir profesor</title>
    <link rel="stylesheet" href="../../../css/enjoyLearnSchool.css">
</head>

<body>
    <header>
        <section id="logoSection">
            <a href="http://localhost/kalypso-dev-vanilla-php-mysql/apps/enjoyAndLearnApp/"><img
                    src="../../../img/enjoyAndLearnLanguageSchoolLogo.png" alt="Logo de KalypsoDev" id="logo"></a>
            <h1>Enjoy And Learn Language School</h1>
        </section>
        <nav>
            <a href="../../../pages/miHistoria.php">Mi historia</a>
            <a href="../../../pages/miCV.php">Mi CV</a>
            <a href="../../../pages/contacto.php">Contacto</a>
        </nav>
    </header>
    <main>
        <h2>Base de datos: añadir nuevo profesor</h2>
        <section id="formSection">
            <img src="../../../img/teachers.png" alt="Profesores">
            <form action="insertar_profesor.php" method="post">
                <fieldset>
                    <legend>Nuevo profesor</legend>
                    <p>
                        <label for="nombre">Nombre del profesor:</label>
                        <input type="text" placeholder="Nombre del profesor" id="nombre" name="nombre" required>
                    </p>
                    <p>
                        <label for="especialidad">Especialidad del profesor:</label>
                        <input type="text" placeholder="Especialidad del profesor" id="especialidad" name="especialidad"
                            required>
                    </p>
                    <p>
                        <label for="email">Email del profesor:</label>
                        <input type="email" id="email" name="email" placeholder="Email del profesor" required>
                    </p>
                </fieldset>
                <section id="buttonsSection">
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpiar">
                </section>
            </form>
        </section>
    </main>
    <footer>
        <p>Copyright © 2025 KalypsoDev - All rights reserved</p>
    </footer>
</body>

</html>