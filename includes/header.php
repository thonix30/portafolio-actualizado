<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Anthony Martinez - Desarrollador Web Full Stack'; ?></title>
    <meta name="description" content="Portfolio de Anthony Martinez - Desarrollador Web Full Stack especializado en sistemas gubernamentales">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;700;900&family=Syne:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Animated Background -->
    <canvas id="particles-canvas"></canvas>

    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
            <div class="logo">TONIX.dev</div>
            <ul class="nav-links" id="navLinks">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#sobre-mi">Sobre Mí</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#experiencia">Experiencia</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>
