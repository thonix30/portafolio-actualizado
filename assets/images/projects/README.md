# 📸 INSTRUCCIONES PARA SUBIR IMÁGENES DE PROYECTOS

## Ubicación de las Imágenes
Todas las capturas de pantalla deben ir en la carpeta:
```
assets/images/projects/
```

## Nombres de Archivos Requeridos
Según la configuración actual en `data/projects.json`, necesitas estas imágenes:

1. **sso.jpg** - Sistema SSO Gubernamental
2. **votaciones.jpg** - Sistema de Votaciones
3. **vider.jpg** - VIDER - Desarrollo Rural
4. **presupuesto.jpg** - Sistema de Ejecución Presupuestaria
5. **visar.jpg** - VISAR - Gestión de Exportaciones
6. **tobanik.jpg** - TOBANIK - Datos Cooperativas

## Especificaciones Técnicas

### Tamaño Recomendado
- **Ancho**: 800px
- **Alto**: 500px
- **Proporción**: 16:10 (ideal para cards)

### Formato
- **Preferido**: JPG (mejor compresión)
- **Alternativo**: PNG (si necesitas transparencia)
- **Peso**: Máximo 200KB por imagen (optimiza para web)

### Calidad
- Usa capturas de pantalla limpias
- Evita imágenes borrosas
- Muestra las interfaces principales de cada sistema

## Herramientas Recomendadas para Optimizar

### Online
- **TinyPNG**: https://tinypng.com/ (PNG/JPG)
- **Squoosh**: https://squoosh.app/ (Google)
- **Compressor.io**: https://compressor.io/

### Desktop
- **GIMP** (Gratis)
- **Photoshop**
- **IrfanView** (Windows)

## Pasos para Preparar Imágenes

1. **Toma la captura de pantalla**
   - Captura la pantalla completa o ventana del sistema
   - Asegúrate que se vea profesional

2. **Recorta y redimensiona**
   - Recorta solo la parte importante
   - Redimensiona a 800x500px

3. **Optimiza el peso**
   - Usa una herramienta de compresión
   - Objetivo: menos de 200KB

4. **Renombra el archivo**
   - Usa el nombre exacto especificado arriba
   - Ejemplo: `sso.jpg`, `votaciones.jpg`

5. **Sube al servidor**
   - Vía FTP/SFTP
   - O panel de control de hosting
   - Ubicación: `assets/images/projects/`

## Si No Tienes Imágenes Aún

El portafolio mostrará un icono con fondo degradado hasta que subas las imágenes reales.

Para crear imágenes placeholder temporales:
1. Usa un color sólido con el logo del sistema
2. O captura una pantalla de login/dashboard
3. Reemplázalas después con capturas completas

## Agregar Más Proyectos

Para agregar nuevos proyectos con imágenes:

1. Sube la nueva imagen a `assets/images/projects/`
2. Edita `data/projects.json`
3. Agrega el nuevo proyecto con el nombre de imagen correcto

Ejemplo:
```json
{
  "id": 7,
  "title": "Nuevo Sistema",
  "category": "Categoría",
  "description": "Descripción...",
  "technologies": ["PHP", "MySQL"],
  "image": "nuevo-sistema.jpg",
  "icon": "🚀"
}
```

## Verificación

Después de subir las imágenes:
1. Abre el portafolio en tu navegador
2. Navega a la sección "Proyectos"
3. Verifica que todas las imágenes se muestran correctamente
4. Prueba en móvil también

## Solución de Problemas

**Imagen no se muestra:**
- Verifica el nombre del archivo (case-sensitive)
- Verifica la ruta: `assets/images/projects/`
- Verifica permisos del archivo (644 o 755)

**Imagen se ve pixelada:**
- Sube una versión de mayor resolución
- Mínimo 800x500px

**Imagen muy pesada:**
- Comprímela con TinyPNG
- Objetivo: 100-200KB

---

¿Necesitas ayuda? Revisa el README.md principal o contacta al desarrollador.
