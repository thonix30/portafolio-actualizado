<?php
// Cargar datos de proyectos
$projectsData = json_decode(file_get_contents('data/projects.json'), true);
$projects = $projectsData['projects'] ?? [];

include 'includes/header.php';
?>

<!-- Hero Section -->
<section id="inicio" class="hero">
    <div class="hero-content">
        <div class="hero-label">Desarrollador Web Full Stack</div>
        <h1>
            Construyendo <span class="gradient-text">Soluciones Digitales</span><br>
            
        </h1>
        <p class="hero-description">
            Especializado en desarrollo de sistemas web de alta complejidad. 
            PHP, MySQL, JavaScript y arquitecturas modernas para transformar la gestión pública.
        </p>
        <div class="hero-cta">
            <a href="#proyectos" class="btn btn-primary">Ver Proyectos</a>
            <a href="#contacto" class="btn btn-secondary">Contactar</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="sobre-mi">
    <div class="section-header">
        <div class="section-label">Sobre Mí</div>
        <h2 class="section-title">Desarrollador <span class="gradient-text">Full Stack</span></h2>
    </div>
    <div class="about-content">
        <div class="about-text">
            <p>
                Soy Anthony Alva, tengo 27 años y soy desarrollador web con experiencia en el diseño y desarrollo 
                de sistemas web funcionales, escalables y orientados a resolver problemas reales.
                Me especializo en crear aplicaciones que optimizan procesos, mejoran la gestión de información
                y brindan una experiencia clara al usuario.
            </p>
            <p>
                A lo largo de mi formación y experiencia he trabajado en el desarrollo de sistemas 
                personalizados, integrando bases de datos, lógica de negocio y interfaces web modernas. 
                Me gusta aprender nuevas tecnologías, mejorar continuamente mis habilidades y enfrentar 
                retos que me permitan crecer como profesional en el área de sistemas.
            </p>
            <p>
                Este portafolio reúne algunos de los proyectos que he desarrollado, donde aplico buenas
                 prácticas de programación, enfoque en la eficiencia y atención al detalle.
            </p>
        </div>
        <div class="skills-grid">
            <div class="skill-card">
                <h3>Backend</h3>
                <p>PHP, MySQL, REST APIs, JWT Authentication, Arquitectura MVC</p>
            </div>
            <div class="skill-card">
                <h3>Frontend</h3>
                <p>JavaScript, Chart.js, Responsive Design, UI/UX Moderno</p>
            </div>
            <div class="skill-card">
                <h3>Arquitectura</h3>
                <p>SSO, Microservicios, Integración de Sistemas, API Design</p>
            </div>
            <div class="skill-card">
                <h3>DevOps & Tools</h3>
                <p>Git, Linux, Deploy & Maintenance, PDF Processing</p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="proyectos">
    <div class="section-header">
        <div class="section-label">Portfolio</div>
        <h2 class="section-title">Proyectos <span class="gradient-text">Destacados</span></h2>
        <p class="section-description">
            Sistemas web de alto impacto para instituciones gubernamentales de Guatemala
        </p>
    </div>
    <div class="projects-grid">
        <?php foreach ($projects as $project): ?>
        <div class="project-card" data-category="<?php echo htmlspecialchars($project['category']); ?>">
            <div class="project-image" style="background-image: url('assets/images/projects/<?php echo htmlspecialchars($project['image']); ?>');">
                <div class="project-icon"><?php echo $project['icon']; ?></div>
                <div class="image-overlay"></div>
            </div>
            <div class="project-content">
                <div class="project-category"><?php echo htmlspecialchars($project['category']); ?></div>
                <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                <p><?php echo htmlspecialchars($project['description']); ?></p>
                <div class="project-tech">
                    <?php foreach ($project['technologies'] as $tech): ?>
                    <span class="tech-tag"><?php echo htmlspecialchars($tech); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Timeline Section -->
<section id="experiencia">
    <div class="section-header">
        <div class="section-label">Trayectoria</div>
        <h2 class="section-title">Experiencia <span class="gradient-text">Profesional</span></h2>
    </div>
    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <div class="timeline-year">2024 - 2026</div>
                <h3>Desarrollador Full Stack Senior</h3>
                <h4>Sistemas Gubernamentales - MAGA</h4>
                <p>
                    Desarrollo de sistemas web críticos incluyendo VIDER, TOBANIK y dashboards ejecutivos. 
                    Implementación de arquitectura SSO y integración de múltiples plataformas gubernamentales.
                </p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <div class="timeline-year">2023 - 2024</div>
                <h3>Desarrollador de Sistemas Legislativos</h3>
                <h4>Congreso de Guatemala</h4>
                <p>
                    Creación del Sistema de Votaciones completo para el procesamiento y análisis de 
                    votaciones legislativas. Procesamiento automatizado de documentos y generación de reportes estadísticos.
                </p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <div class="timeline-year">2022 - 2023</div>
                <h3>Desarrollador Web Full Stack</h3>
                <h4>Sistemas de Comercio Exterior</h4>
                <p>
                    Desarrollo de VISAR y VISAN, plataformas para gestión de exportaciones e importaciones 
                    y asistencia alimentaria. Implementación de APIs REST y sistemas de autenticación seguros.
                </p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <div class="timeline-year">2021 - 2022</div>
                <h3>Desarrollador Backend</h3>
                <h4>Proyectos Gubernamentales</h4>
                <p>
                    Especialización en desarrollo de sistemas backend con PHP y MySQL. 
                    Implementación de sistemas de ejecución presupuestaria y dashboards ministeriales.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contacto">
    <div class="section-header">
        <div class="section-label">Contacto</div>
        <h2 class="section-title">Hablemos de tu <span class="gradient-text">Proyecto</span></h2>
        <p class="section-description">
            ¿Tienes un proyecto en mente? Estoy disponible para colaboraciones y nuevas oportunidades
        </p>
    </div>
    <div class="contact-content">
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon">📧</div>
                <div>
                    <strong>Email</strong>
                    <a href="#">anthonye30am@gmail.com</a>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon">💼</div>
                <div>
                    <strong>LinkedIn</strong>
                    <a href="https://www.linkedin.com/in/anthonymartinez30/" target="_blank">linkedin/anthonymartinez30</a>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon">💻</div>
                <div>
                    <strong>GitHub</strong>
                    <a href="https://github.com/thonix30" target="_blank">github.com/thonix30</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
