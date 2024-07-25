<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTICIAS PERSONALIZADAS</title>
    <link rel="stylesheet" href="app/view/style.css">

</head>
<body>
    <header class="header">
        <h1>UTHH Por ser siempre los mejores...</h1>
        <nav class="navbar">
            <ul>
                <li><a href="http://localhost/noticias_personalizadas">INICIO</a></li>
                <li><a href="http://localhost/noticias_personalizadas?C=alumnoController&M=index">USUARIOS</a></li>
                <li><a href="http://localhost/noticias_personalizadas?C=usuarioController&M=logedout">CERRAR SECCIÓN</a></li>
            </ul>
        </nav>
    </header>
    <section class="container">
        <?php include_once($vista); ?>
    </section>
    <footer class="footer">
        <h3>pie de pagina</h3>
    </footer>
</body>
</html>