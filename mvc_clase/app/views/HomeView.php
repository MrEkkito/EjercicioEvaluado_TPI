<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? "Sin título" ?></title>
<link rel="stylesheet" href="/mvc_clase/public/css/general.css">
</head>
<body>
        <nav class="nav-principal">
    <a href="Home" >Home</a>
    <a href="Inicio" >Perfil</a>
    <a href="Lenguaje" >Lenguajes</a>
    <a href="Contactar" >Contacto</a>
</nav>
    <h1>Bienvenido a mi practica</h1>
    <h3>Que encontraras aqui?</h3>
    <p>Un ejercicio practico donde estara mi información personal, mis lenguajes favoritos y un espacio donde prodras contactarte conmigo</p>

    <h2>Indicaciones del Ejercicio</h2>
    <ul>
        <li>Este ejercicio tiene una ponderación de 1 pts de la nota del examen parcial.</li>
        <li>Se tomará en cuenta el funcionamiento total del ejercicio; si el ejercicio está incompleto o falla, no se tomará en cuenta.</li>
        <li>Cree un proyecto utilizando el patrón <strong>MVC de PHP</strong> que permita mostrar un blog con las siguientes secciones:</li>
        <ul>
            <li><strong>Página principal:</strong> Vista con descripción de la tarea y un menú de navegación.</li>
            <li><strong>Inicio:</strong> Información de su perfil personal.</li>
            <li><strong>Mi lenguaje favorito:</strong> Lenguajes de programación que más usa y por qué.</li>
            <li><strong>Contactar:</strong> Formulario de contacto con validación de entrada usando expresiones regulares para:
                <ul>
                    <li>Correo electrónico</li>
                    <li>Número de teléfono</li>
                    <li>Número de DUI</li>
                </ul>
            Las validaciones deben respetar los formatos de El Salvador.</li>
        </ul>
    </ul>
</body>
</html>
