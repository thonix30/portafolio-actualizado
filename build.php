<?php
// build.php - Script para generar la carpeta dist para Netlify

$distDir = __DIR__ . '/dist';

// 1. Crear directorio dist
if (!file_exists($distDir)) {
    mkdir($distDir, 0777, true);
}

// 2. Generar index.html
ob_start();
include 'index.php';
$html = ob_get_clean();

// Arreglar posibles rutas absolutas si las hubiera (opcional)
// $html = str_replace('localhost/portafolio-actualizado/', '/', $html);

file_put_contents($distDir . '/index.html', $html);
echo "Generado: dist/index.html\n";

// 3. Función para copiar directorios recursivamente
function copyDir($src, $dst) {
    if (!file_exists($dst)) {
        mkdir($dst, 0777, true);
    }
    
    $dir = opendir($src);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                copyDir($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

// 4. Copiar assets y data
if (file_exists(__DIR__ . '/assets')) {
    copyDir(__DIR__ . '/assets', $distDir . '/assets');
    echo "Copiado: assets/\n";
}

if (file_exists(__DIR__ . '/data')) {
    copyDir(__DIR__ . '/data', $distDir . '/data');
    echo "Copiado: data/\n";
}

echo "\n¡Carpeta 'dist' generada exitosamente!\n";
echo "Ahora puedes subir la carpeta 'dist' directamente a Netlify.\n";
