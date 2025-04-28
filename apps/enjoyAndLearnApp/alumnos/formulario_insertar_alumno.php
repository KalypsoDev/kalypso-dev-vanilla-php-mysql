<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para añadir alumno</title>
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
        <h2>Base de datos: añadir nuevo alumno</h2>
        <section id="formSection">
            <img src="../../../img/students.png" alt="Alumnos">
            <form action="insertar_alumno.php" method="post">
                <fieldset>
                    <legend>Nuevo alumno</legend>
                    <p>
                        <label for="nombre">Nombre del alumno:</label>
                        <input type="text" placeholder="Nombre del alumno" id="nombre" name="nombre" required>
                    </p>
                    <p>
                        <label for="email">Email del alumno:</label>
                        <input type="email" id="email" name="email" placeholder="Email del alumno" required>
                    </p>
                    <p>
                        <label for="fecha">Fecha de nacimiento:</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
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