# Portfolio Daniel Martinez - Desarrollador Web Full Stack

Portfolio profesional desarrollado en PHP con diseño moderno y animaciones avanzadas.

## 🚀 Características

- **Diseño Moderno**: Glassmorphism, animaciones suaves y efectos visuales
- **Partículas Animadas**: Canvas con partículas interconectadas en el fondo
- **Responsive**: Totalmente adaptable a móviles, tablets y desktop
- **PHP Modular**: Estructura limpia y escalable
- **Fácil Personalización**: JSON para datos de proyectos

## 📁 Estructura de Archivos

```
portfolio/
├── index.php                 # Página principal
├── includes/
│   ├── header.php           # Cabecera con navegación
│   └── footer.php           # Pie de página
├── assets/
│   ├── css/
│   │   └── style.css        # Estilos principales
│   ├── js/
│   │   └── main.js          # JavaScript y animaciones
│   └── images/
│       └── projects/        # Imágenes de proyectos
└── data/
    └── projects.json        # Datos de proyectos
```

## 🔧 Instalación

1. **Subir archivos al servidor**
   - Sube todos los archivos a tu hosting con PHP

2. **Configurar imágenes de proyectos**
   - Coloca las capturas de pantalla de tus proyectos en `assets/images/projects/`
   - Los nombres deben coincidir con los del archivo `data/projects.json`:
     - sso.jpg
     - votaciones.jpg
     - vider.jpg
     - presupuesto.jpg
     - visar.jpg
     - tobanik.jpg

3. **Personalizar información de contacto**
   - Edita `index.php` en la sección de contacto
   - Actualiza tu email, LinkedIn y GitHub

4. **Personalizar proyectos**
   - Edita `data/projects.json` para modificar:
     - Títulos de proyectos
     - Descripciones
     - Tecnologías utilizadas
     - Categorías

## 📝 Personalización

### Editar Proyectos

Abre `data/projects.json` y modifica según necesites:

```json
{
  "id": 1,
  "title": "Nombre del Proyecto",
  "category": "Categoría",
  "description": "Descripción del proyecto...",
  "technologies": ["PHP", "MySQL", "JavaScript"],
  "image": "nombre-imagen.jpg",
  "icon": "🚀"
}
```

### Cambiar Colores

En `assets/css/style.css`, modifica las variables CSS:

```css
:root {
    --bg-primary: #0a0e27;
    --bg-secondary: #141b3a;
    --accent-cyan: #00f5ff;
    --accent-green: #00ff9f;
}
```

### Editar Timeline de Experiencia

En `index.php`, busca la sección `#experiencia` y modifica:
- Años
- Títulos de puestos
- Empresas
- Descripciones

## 📸 Imágenes de Proyectos

**Tamaño Recomendado**: 800x500px
**Formato**: JPG o PNG
**Ubicación**: `assets/images/projects/`

Para mejores resultados:
- Usa capturas de pantalla de alta calidad
- Mantén una proporción 16:10
- Optimiza las imágenes para web

## 🌐 Requisitos del Servidor

- PHP 7.4 o superior
- Apache o Nginx
- Soporte para JSON

## 📱 Responsive Design

El portafolio se adapta automáticamente a:
- ✅ Desktop (1920px+)
- ✅ Laptop (1366px - 1920px)
- ✅ Tablet (768px - 1366px)
- ✅ Mobile (320px - 768px)

## 🎨 Fuentes Utilizadas

- **Orbitron**: Títulos y headers
- **Syne**: Texto del cuerpo

Cargadas desde Google Fonts automáticamente.

## ⚡ Performance

- Carga asíncrona de imágenes
- Animaciones optimizadas con CSS
- Canvas con requestAnimationFrame
- Lazy loading de imágenes de proyectos

## 📞 Soporte

Para personalización adicional, contacta al desarrollador.

## 📄 Licencia

Este portafolio es de uso personal. Siéntete libre de modificarlo según tus necesidades.

---

Desarrollado con ❤️ usando PHP, JavaScript y CSS moderno
