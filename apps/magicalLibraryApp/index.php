<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Biblioteca Mágica</title>
    <link rel="stylesheet" href="../../css/magicalLibrary.css">
</head>

<body>
    <header>
        <section id="logoSection">
            <a href="http://localhost/kalypso-dev-vanilla-php-mysql/"><img src="../../img/kalypsoLogo.png"
                    alt="Logo de KalypsoDev" id="logo"></a>
            <h1>KalypsoDev</h1>
        </section>
        <nav>
            <a href="../../pages/miHistoria.php">Mi historia</a>
            <a href="../../pages/miCV.php">Mi CV</a>
            <a href="../../pages/contacto.php">Contacto</a>
        </nav>
    </header>
    <main>
        <section id="hero">
            <img src="../../img/magicalLibrary.png" alt="La Biblioteca Mágica">
            <section id="welcome">
                <h2>Disfruta de todas las historias que nuestra biblioteca tiene para ti
                </h2>
                <p>En un mundo cada vez más rápido y exigente, es esencial recordar que la infancia es un tiempo
                    sagrado. Un
                    tiempo para descubrir, jugar y soñar sin límites.</p>
                <p>Los libros no solo enseñan palabras o historias, también abren puertas a mundos maravillosos
                    donde
                    todo
                    es posible. Cuando un niño se sumerge en la lectura, su imaginación florece: dragones cobran
                    vida,
                    los
                    castillos flotan entre las nubes y los sueños se vuelven aventuras.</p>
                <p>Dejemos que las niñas y los niños vivan su infancia como debe ser: con risas, juegos y alas para
                    imaginar. Porque cada momento que pasen libres de preocupaciones es una semilla de confianza,
                    creatividad y felicidad que crecerá con ellos.</p>
            </section>

        </section>
        <section id="result">
            <?php

            class Book
            {
                public $title;
                public $author;
                public $publicationYear;

                public function __construct($title, $author, $publicationYear)
                {
                    $this->title = $title;
                    $this->author = $author;
                    $this->publicationYear = $publicationYear;
                }

                public function mostrarInformacion()
                {
                    return [$this->title, $this->author, $this->publicationYear];
                }
            }

            $books = [
                new Book("Cien años de soledad", "Gabriel García Márquez", 1967),
                new Book("1984", "George Orwell", 1949),
                new Book("El Principito", "Antoine de Saint-Exupéry", 1943),
                new Book("Don Quijote de la Mancha", "Miguel de Cervantes", 1605)
            ];

            echo "<table>";
            echo "<tr><th>Título</th><th>Autor</th><th>Año de publicación</th></tr>";

            foreach ($books as $book) {
                echo "<tr>";
                foreach ($book->mostrarInformacion() as $details) {
                    echo "<td>$details</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
            ?>
        </section>

    </main>
    <footer>
        <p>Copyright © 2025 KalypsoDev - All rights reserved</p>
    </footer>
</body>

</html>