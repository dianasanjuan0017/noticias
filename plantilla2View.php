<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTIFRESH</title>
    <link rel="stylesheet" href="app/view/style.css">

</head>
<body>
    <header class="header">
        <h1>NOTICIAS PERSONALIZADAS</h1>
        <nav class="navbar">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="http://localhost/noticias_personalizadas?C=usuarioController&M=callLoginForm">Login</a></li>
            </ul>
        </nav>
    </header>
    <section class="container">
        <?php include_once($vista); ?>
    </section>
    <footer class="footer">
        <h3>EQUIPO 6_TIC'S</h3>
    </footer>
</body>
</html>