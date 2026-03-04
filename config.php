<?php
/**
 * Configuración del Portfolio
 * 
 * Archivo de configuración principal para el portafolio.
 * Aquí puedes definir constantes y configuraciones globales.
 */

// Configuración de zona horaria
date_default_timezone_set('America/Guatemala');

// Información de contacto
define('CONTACT_EMAIL', 'tu-email@ejemplo.com');
define('LINKEDIN_URL', 'https://linkedin.com/in/tu-perfil');
define('GITHUB_URL', 'https://github.com/tu-usuario');

// Información personal
define('SITE_TITLE', 'Daniel Martinez - Desarrollador Web Full Stack');
define('SITE_DESCRIPTION', 'Portfolio de Daniel Martinez - Especializado en sistemas gubernamentales');

// Paths
define('BASE_PATH', __DIR__);
define('ASSETS_PATH', BASE_PATH . '/assets');
define('IMAGES_PATH', ASSETS_PATH . '/images');
define('DATA_PATH', BASE_PATH . '/data');

// Versión del sitio (útil para cache busting)
define('SITE_VERSION', '1.0.0');

// Configuración de errores (cambiar a false en producción)
define('DEBUG_MODE', false);

if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Funciones helper
function getProjectsData() {
    $jsonFile = DATA_PATH . '/projects.json';
    if (file_exists($jsonFile)) {
        $data = json_decode(file_get_contents($jsonFile), true);
        return $data['projects'] ?? [];
    }
    return [];
}

function assetUrl($path) {
    return 'assets/' . ltrim($path, '/') . '?v=' . SITE_VERSION;
}
