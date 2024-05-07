<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Gestión de Limpieza</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #07071e; /* Fondo negro */
            color: #fff; /* Texto blanco */
            overflow-x: hidden;
        }

        #menuButton {
            background-color: #6f00ff; /* Morado Neon */
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 24px;
            transition: 0.3s;
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1001;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #menu {
            width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            left: -250px;
            background-color: #6f00ff; /* Morado Neon */
            padding-top: 60px;
            transition: 0.3s;
            z-index: 1000;
            overflow-y: auto;
        }

        #menu a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        #menu a:last-child {
            border-bottom: none;
        }

        #menu a:hover {
            background-color: #00ffea; /* Azul Neon */
            color: #000; /* Texto negro */
        }

        #logo {
            margin-bottom: 20px;
            text-align: center;
        }

        .submenu {
            display: none;
            padding-left: 15px;
        }

        .submenu a {
            padding: 10px;
            color: white;
            display: block;
            transition: 0.3s;
            font-size: 16px; /* Tamaño de texto más pequeño */
        }

        .submenu a:hover {
            background-color: #00ffea; /* Azul Neon */
            color: #000; /* Texto negro */
        }

        .submenu2 {
            display: none;
            padding-left: 15px;
        }

        .submenu2 a {
            padding: 10px;
            color: white;
            display: block;
            transition: 0.3s;
            font-size: 16px; /* Tamaño de texto más pequeño */
        }

        .submenu2 a:hover {
            background-color: #00ffea; /* Azul Neon */
            color: #000; /* Texto negro */
        }

        .submenu3 {
            display: none;
            padding-left: 15px;
        }

        .submenu3 a {
            padding: 10px;
            color: white;
            display: block;
            transition: 0.3s;
            font-size: 16px; /* Tamaño de texto más pequeño */
        }

        .submenu3 a:hover {
            background-color: #00ffea; /* Azul Neon */
            color: #000; /* Texto negro */
        }

        iframe {
            border: none;
            width: 100%;
            height: calc(100vh - 60px);
            transition: opacity .5s ease-in-out;
            opacity: 1;
        }

        iframe.fade-out {
            opacity: 0;
        }

        .container-fluid {
            padding: 20px;
        }
    </style>
</head>
<body>
    <button id="menuButton" onclick="toggleSideMenu()">☰</button>
    <div id="menu">
        <div id="logo">
            <img src="Imagenes/logo.jpeg" alt="Logo" style="max-width: 150px;">
        </div>
        <a href="inicio.php" onclick="toggleSideMenu()" target="contenido-central">Inicio</a>
        <a href="citas.php" onclick="toggleSideMenu()" target="contenido-central">Agendar Cita</a>
        <a href="alimentos.php" onclick="toggleSideMenu()" target="contenido-central">Agregar Alimentos</a>
        <a href="actualizar.php" onclick="toggleSideMenu()" target="contenido-central">Actualizar</a>
        <a href="eliminar.php" onclick="toggleSideMenu()" target="contenido-central">Eliminar</a>
        <a href="#" onclick="toggleSubMenu2(event)">Consultar Servicios</a>
        <div class="submenu2">
            <a href="citascon.php" onclick="toggleSideMenu()" target="contenido-central">Citas</a>
            <a href="alimentoscon.php" onclick="toggleSideMenu()" target="contenido-central">Alimentos</a>
        </div>
        <a href="estadisticas.php" onclick="toggleSideMenu()" target="contenido-central">Gráficas</a>
        <a href="ventas.php" onclick="toggleSideMenu()" target="contenido-central">Nueva Venta</a>
        <a href="#" onclick="toggleSubMenu3(event)">Reportes</a>
        <div class="submenu3">
            <a href="citaspdf.php" onclick="toggleSideMenu()" target="contenido-central">Citas</a>
            <a href="alimentospdf.php" onclick="toggleSideMenu()" target="contenido-central">Alimentos</a>
        </div>
        <a href="index.html">Cerrar Sesión</a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <iframe id="contenido-central" name="contenido-central" src="inicio.php"></iframe>
            </div>
        </div>
    </div>
    <script>
        function toggleSideMenu() {
            var menu = document.getElementById("menu");
            var iframe = document.getElementById("contenido-central");
            if (menu.style.left === "0px") {
                menu.style.left = "-250px";
                iframe.classList.remove('fade-out');
            } else {
                menu.style.left = "0px";
                iframe.classList.add('fade-out');
            }
        }

        function toggleSubMenu(event) {
            event.preventDefault();
            var submenu = document.querySelector('.submenu');
            submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
        }

        function toggleSubMenu2(event2) {
            event2.preventDefault();
            var submenu2 = document.querySelector('.submenu2');
            submenu2.style.display = (submenu2.style.display === 'block') ? 'none' : 'block';
        }

        function toggleSubMenu3(event3) {
            event3.preventDefault();
            var submenu3 = document.querySelector('.submenu3');
            submenu3.style.display = (submenu3.style.display === 'block') ? 'none' : 'block';
        }
    </script>
</body>
</html>
