<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sergio Ricart Alabau - Portafolio</title>
<link rel="shortcut icon" href="hacking_11189888.png" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</head>
<body>
<div class="loader-wrapper">
    <div class="loader"></div>
</div>

<div class="matrix-rain" id="matrixRain"></div>

<nav class="nav-menu">
    <a href="#home" data-section="home">inicio</a>
    <a href="#about" data-section="about">sobre_mí</a>
    <a href="#projects" data-section="projects">proyectos</a>
    <a href="#experience" data-section="experience">experiencia</a>
    <a href="#skills" data-section="skills">skills</a>
    <a href="#learning-objectives" data-section="learning-objectives">objetivos</a>
    <a href="#contact" data-section="contact">contacto</a>
</nav>

<header id="home">
    <div class="header-bg"></div>
    <div class="header-particles" id="particles-js"></div>
    <div class="header-content">
        <span class="terminal-prompt">$ whoami</span>
        <h1 class="typing-effect">Sergio Ricart Alabau</h1>
        <div class="job-title">Full Stack Developer <span class="terminal-cursor"></span></div>
        <p>Desarrollador Full Stack con experiencia en PHP, JavaScript, CSS y frameworks como JPA y OpenXava.</p>
        <div class="cta-buttons">
            <a href="#contact" class="btn btn-primary"><i class="fas fa-envelope"></i>Contáctame</a>
            <a href="CV_SergioRicartAlabau.pdf" class="btn btn-secondary"><i class="fas fa-download"></i> Descargar CV</a>
        </div>
    </div>
</header>

<section id="about">
    <div class="section-title-container">
        <h2 class="section-title">Sobre Mí</h2>
        <span class="section-underline"></span>
    </div>
    <div class="about-container">
        <div class="about-content">
            <h3>Desarrollador Full Stack</h3>
            <p>Soy un desarrollador web apasionado por aprender y expandir mis conocimientos en el mundo del desarrollo. Tengo experiencia trabajando con lenguajes como JavaScript, PHP y Java, y siempre estoy buscando nuevos retos. Actualmente, me siento entusiasmado por explorar otros lenguajes como Rust y Python para seguir creciendo como profesional.</p>
            <p>Tengo formación en desarrollo tanto backend como frontend, lo que me permite abordar proyectos completos desde su concepción hasta su implementación. Mi experiencia en comercio electrónico me ha proporcionado un sólido conocimiento sobre la optimización de plataformas de venta online, lo que me permite crear soluciones eficientes y centradas en el usuario.</p>
            <p>Actualmente estoy realizando mis prácticas como Desarrollador Full Stack en Gestion400, donde estoy aplicando mis conocimientos en un entorno real y continuando mi formación profesional. Me apasiona aprender nuevas tecnologías y metodologías que me permitan seguir creciendo y perfeccionando mis habilidades como desarrollador.</p>
        </div>
        <div class="about-image">
            <img src="SergioRicart_Foto.png" alt="Sergio Ricart - Desarrollador Full Stack">
        </div>
    </div>
</section>

<div class="hamburger-menu" id="hamburgerMenu">
    <div class="hamburger-icon">
        <i class="fas fa-bars"></i> 
        <i class="fas fa-times hidden"></i>
    </div>
</div>


<section id="projects">
    <div class="section-title-container">
        <h2 class="section-title">Proyectos</h2>
        <span class="section-underline"></span>
    </div>
    <div class="projects-container">

        <div class="project-card">
            <div class="project-image">
                <img src="rial.png" alt="Proyecto E-commerce">
                <div class="project-overlay">
                    <div class="project-links">
                        <a href="https://fornrial.com/index.php" target="_blank" class="project-link"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="project-content">
                <span class="project-category">PHP</span>
                <span class="project-category">JavaScript</span>
                <span class="project-category">MySQL</span>               
                <h3 class="project-title">Rial E-commerce</h3>
                <p class="project-description">Actualmente, estoy trabajando en la página web para el negocio familiar, la cual se encuentra en construcción. Esta página integrará una funcionalidad de compras online, permitiendo a los usuarios realizar pedidos de manera sencilla. Además, incluirá un sistema de contacto mediante bots de Telegram para mejorar la comunicación con los clientes.</p>
                <p>Under Construction</p>
            </div>
        </div>
    
        <div class="project-card">
            <div class="project-image">
                <img src="gestorPedidos.png" alt="Gestor de Pedidos">
                <div class="project-overlay">
                    <div class="project-links">
                        <a href="https://github.com/YerlliR/GestionPedidosRial" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="project-content">
                <span class="project-category">PHP</span>
                <span class="project-category">JavaScript</span>
                <span class="project-category">MySQL</span>

                <h3 class="project-title">Gestor de Pedidos Online</h3>
                <p class="project-description">Este programa web es un gestor de pedidos que desarrollé pensando en las necesidades del negocio familiar. Permite registrar todos los pedidos, seguir su estado, gestionar entregas parciales y controlar la producción necesaria. Actualmente, se encuentra en su fase final de pruebas, solucionando los últimos errores antes de entrar en producción.</p>
            </div>
        </div>
    
        <div class="project-card">
            <div class="project-image">
                <img src="SAUCER.png" alt="Aplicaciones Frontend">
                <div class="project-overlay">
                    <div class="project-links">
                        <a href="https://github.com/YerlliR/SauceProject" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="project-content">
                <span class="project-category">Java</span>
                <span class="project-category">JavaFX</span>
                <h3 class="project-title">Cartera de Criptomonedas</h3>
                <p class="project-description">Este proyecto fue parte de mi formación, con el requisito de utilizar una interfaz gráfica en JavaFX. Se trata de una aplicación que consulta una API para obtener los precios en tiempo real de las 100 criptomonedas más importantes. Además, implementa gráficos en vivo y permite al usuario crear una cartera virtual para consultar su balance actualizado de forma sencilla.</p>
            </div>
        </div>
    </div>
</section>

<section id="experience">
    <div class="section-title-container">
        <h2 class="section-title">Experiencia</h2>
        <span class="section-underline"></span>
    </div>
    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-content" data-date="2025-present">
                <span class="timeline-date">2025 - Presente</span>
                <h3 class="timeline-title">Estudiante en prácticas</h3>
                <p class="timeline-company">Gestión 400</p>
                <p class="timeline-description">Desarrollo de aplicaciones web utilizando Java, JPA y Hibernate. Implementación de integraciones con APIs de terceros y optimización de rendimiento. Uso de OpenXava para la creación de interfaces de usuario.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content" data-date="2023-2025">
                <span class="timeline-date">2023 - 2025</span>
                <h3 class="timeline-title">Grado Superior de Desarrollo Aplicaciones Web</h3>
                <p class="timeline-company">La Senia</p>
                <p class="timeline-description">Estudios de Grado Superior en Desarrollo de Aplicaciones Web, con un enfoque en tecnologías modernas y prácticas de desarrollo ágil. Desarrollo de proyectos que integran conocimientos de frontend y backend.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content" data-date="2021-2023">
                <span class="timeline-date">2021 - 2023</span>
                <h3 class="timeline-title">Grado Medio en Sistemas Microinformáticos y Redes</h3>
                <p class="timeline-company">La Florida</p>
                <p class="timeline-description">Estudios de Grado Medio en Sistemas Microinformáticos y Redes. Aprendizaje de los fundamentos de hardware, software y redes.</p>
            </div>
        </div>
    </div>
</section>


<section id="skills">
    <div class="section-title-container">
        <h2 class="section-title">Skills</h2>
        <span class="section-underline"></span>
    </div>
    <div class="skills-grid">
        
        <!-- Frontend -->
        <div class="skill-card-compact" data-category="frontend" >
        <div class="skill-icon">
                <i class="fab fa-html5"></i>
            </div>
            <h3 class="skill-title">HTML5</h3>
        </div>
        
        <div class="skill-card-compact" data-category="frontend">
            <div class="skill-icon">
                <i class="fab fa-css3-alt"></i>
            </div>
            <h3 class="skill-title">CSS3</h3>
        </div>
        
        <div class="skill-card-compact" data-category="frontend">
            <div class="skill-icon">
                <i class="fab fa-js"></i>
            </div>
            <h3 class="skill-title">JavaScript</h3>
        </div>
        
        <div class="skill-card-compact" data-category="frontend">
            <div class="skill-icon">
                <i class="fab fa-bootstrap"></i>
            </div>
            <h3 class="skill-title">Bootstrap</h3>
        </div>
        
        <div class="skill-card-compact" data-category="frontend">
            <div class="skill-icon">
                <i class="fab fa-sass"></i>
            </div>
            <h3 class="skill-title">SASS</h3>
        </div>
        
        <!-- Backend -->
        <div class="skill-card-compact" data-category="backend">
            <div class="skill-icon">
                <i class="fab fa-php"></i>
            </div>
            <h3 class="skill-title">PHP</h3>
        </div>
        
        <div class="skill-card-compact" data-category="backend">
            <div class="skill-icon">
                <i class="fab fa-java"></i>
            </div>
            <h3 class="skill-title">Java</h3>
        </div>
        
        <!-- <div class="skill-card-compact" data-category="backend">
            <div class="skill-icon">
                <i class="fab fa-node-js"></i>
            </div>
            <h3 class="skill-title">Node.js</h3>
        </div> -->
        
        <div class="skill-card-compact" data-category="backend">
            <div class="skill-icon">
                <i class="fas fa-database"></i>
            </div>
            <h3 class="skill-title">MySQL</h3>
        </div>

        <div class="skill-card-compact" data-category="backend">
            <div class="skill-icon">
                <i class="fa-solid fa-server"></i>            
            </div>
            <h3 class="skill-title">PostgreSQL</h3>
        </div>
        
        <!-- <div class="skill-card-compact" data-category="backend">
            <div class="skill-icon">
                <i class="fas fa-cogs"></i>
            </div>
            <h3 class="skill-title">API REST</h3>
        </div> -->
        
        <div class="skill-card-compact" data-category="backend">
            <div class="skill-icon">
                <svg fill="rgba(0, 255, 140, 0.3)" width="64px" height="64px" viewBox="-3.6 -3.6 31.20 31.20" role="img" xmlns="http://www.w3.org/2000/svg" stroke="rgba(0, 255, 140, 0.3)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M5.365 0 9.98 7.994h8.95L14.31 0H5.366zm-.431.248L.46 7.994l4.613 8.008L9.55 8.24 4.934.248zm13.992 7.75-4.475 7.76 4.617 7.992 4.471-7.744-4.613-8.008zm-4.905 8.006-8.95.002L9.688 24h8.946l-4.615-7.994.001-.002z"></path></g></svg>
            </div>
            <h3 class="skill-title">Hibernate</h3>
        </div>

        <!-- Otros -->
        <div class="skill-card-compact" data-category="tools">
            <div class="skill-icon">
                <i class="fab fa-git-alt"></i>
            </div>
            <h3 class="skill-title">Git</h3>
        </div>
        
        <div class="skill-card-compact" data-category="tools">
            <div class="skill-icon">
                <i class="fab fa-github"></i>
            </div>
            <h3 class="skill-title">GitHub</h3>
        </div>
        <div class="skill-card-compact" data-category="tools">
            <div class="skill-icon">
                <i class="fas fa-code-branch"></i>
            </div>
            <h3 class="skill-title">CI/CD</h3>
        </div>
        
        <div class="skill-card-compact" data-category="tools">
            <div class="skill-icon">
                <i class="fas fa-terminal"></i>
            </div>
            <h3 class="skill-title">Bash</h3>
        </div>
        <div class="skill-card-compact" data-category="tools">
            <div class="skill-icon">
                <svg fill="rgb(0, 255, 140)" width="64px" height="64px" viewBox="-4.8 -4.8 33.60 33.60" role="img" xmlns="http://www.w3.org/2000/svg" stroke="rgb(0, 255, 140)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.886 9.769c1.647 0 2.95.436 3.912 1.307.961.872 1.442 2.06 1.442 3.566 0 1.744-.548 3.107-1.643 4.09-1.088.977-2.638 1.465-4.65 1.465-1.826 0-3.26-.294-4.303-.883v-2.38a7.89 7.89 0 0 0 2.079.793c.782.186 1.509.28 2.18.28 1.184 0 2.086-.265 2.704-.794.619-.53.928-1.304.928-2.325 0-1.952-1.245-2.929-3.733-2.929-.35 0-.783.038-1.297.112-.514.067-.965.145-1.352.235l-1.174-.693.626-7.98H16.1v2.335H9.919l-.37 4.046c.262-.044.578-.096.95-.156.38-.06.843-.09 1.387-.09zM12 0C5.373 0 0 5.373 0 12a11.998 11.998 0 0 0 6.65 10.738v-3.675h.138c.01.004 4.86 2.466 8.021 0 3.163-2.468 1.62-5.785 1.08-6.557-.54-.771-3.317-2.083-5.708-1.851-2.391.231-2.391.308-2.391.308l.617-7.096 7.687-.074V.744A12 12 0 0 0 11.999 0zm4.095.744v3.049l-7.688.074-.617 7.096s0-.077 2.391-.308c2.392-.232 5.169 1.08 5.708 1.851.54.772 2.083 4.089-1.08 6.557-3.16 2.467-8.013.004-8.02 0h-.14v3.675A12 12 0 0 0 12 24c6.628 0 12-5.373 12-12A12.007 12.007 0 0 0 16.35.83a8.493 8.493 0 0 0-.255-.086zM6.299 22.556z"></path></g></svg>
            </div>
            <h3 class="skill-title">JUnit 5</h3>
        </div>

        
        <div class="skill-card-compact" data-category="tools">
            <div class="skill-icon">
                <i class="fab fa-docker"></i>
            </div>
            <h3 class="skill-title">Docker</h3>
        </div>

        
        <div class="skill-card-compact" data-category="tools">
            <div class="skill-icon">
                <i class="fa-brands fa-aws"></i>
            </div>
            <h3 class="skill-title">AWS</h3>
        </div>
    </div>
    
    <div class="skills-filter">
        <button class="filter-btn active" data-filter="all">Todos</button>
        <button class="filter-btn" data-filter="frontend">Frontend</button>
        <button class="filter-btn" data-filter="backend">Backend</button>
        <button class="filter-btn" data-filter="tools">Herramientas</button>
    </div>
</section>


<section id="learning-objectives">
    <div class="section-title-container">
        <h2 class="section-title">Próximos Objetivos</h2>
        <span class="section-underline"></span>
    </div>
    <p class="section-description">Estas son algunas de las tecnologías y habilidades que planeo incorporar a mi stack en el futuro próximo:</p>
    
    <div class="skills-grid">
        
        <!-- Objetivos de Frontend -->
        <div class="skill-card-compact" data-category="frontend">
            <div class="skill-icon">
                <i class="fab fa-vuejs"></i>
            </div>
            <h3 class="skill-title">Vue.js</h3>
        </div>
        
        <div class="skill-card-compact" data-category="frontend">
            <div class="skill-icon">
                <i class="fab fa-angular"></i>
            </div>
            <h3 class="skill-title">Angular</h3>
        </div>
        
        <div class="skill-card-compact" data-category="frontend">
            <div class="skill-icon">
                <i class="fab fa-js-square"></i>
            </div>
            <h3 class="skill-title">TypeScript</h3>
        </div>
        
        <div class="skill-card-compact" data-category="frontend">
            <div class="skill-icon">
                <i class="fab fa-react"></i>
            </div>
            <h3 class="skill-title">React</h3>
        </div>
        
        <div class="skill-card-compact" data-category="frontend">
            <div class="skill-icon">
                <i class="fas fa-wind"></i>
            </div>
            <h3 class="skill-title">TailwindCSS</h3>
        </div>
        
        <!-- Objetivos de Backend -->
        <div class="skill-card-compact" data-category="backend">
            <div class="skill-icon">
                <i class="fab fa-python"></i>
            </div>
            <h3 class="skill-title">Python</h3>
        </div>
        
        <div class="skill-card-compact" data-category="backend">
            <div class="skill-icon">
                <i class="fa-brands fa-laravel"></i>
            </div>
            <h3 class="skill-title">Laravel</h3>
        </div>
        
        <div class="skill-card-compact" data-category="backend">
            <div class="skill-icon">
                <i class="fab fa-rust"></i>
            </div>
            <h3 class="skill-title">Rust</h3>
        </div>

        <div class="skill-card-compact" data-category="backend">
            <div class="skill-icon">
                <i class="fab fa-node-js"></i>
            </div>
            <h3 class="skill-title">Node.js</h3>
        </div>
        
        <div class="skill-card-compact" data-category="backend">
            <div class="skill-icon">
                <svg fill="#00ff8c" width="64px" height="64px" viewBox="-4.8 -4.8 33.60 33.60" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M20.205 16.392c-2.469 3.289-7.741 2.179-11.122 2.338 0 0-.599.034-1.201.133 0 0 .228-.097.519-.198 2.374-.821 3.496-.986 4.939-1.727 2.71-1.388 5.408-4.413 5.957-7.555-1.032 3.022-4.17 5.623-7.027 6.679-1.955.722-5.492 1.424-5.493 1.424a5.28 5.28 0 0 1-.143-.076c-2.405-1.17-2.475-6.38 1.894-8.059 1.916-.736 3.747-.332 5.818-.825 2.208-.525 4.766-2.18 5.805-4.344 1.165 3.458 2.565 8.866.054 12.21zm.042-13.28a9.212 9.212 0 0 1-1.065 1.89 9.982 9.982 0 0 0-7.167-3.031C6.492 1.971 2 6.463 2 11.985a9.983 9.983 0 0 0 3.205 7.334l.22.194a.856.856 0 1 1 .001.001l.149.132A9.96 9.96 0 0 0 12.015 22c5.278 0 9.613-4.108 9.984-9.292.274-2.539-.476-5.763-1.752-9.596"></path></g></svg>
            </div>
            <h3 class="skill-title">Spring Boot</h3>
        </div>
    </div>
    
    <div class="skills-filter">
        <button class="filter-btn active" data-filter="all">Todos</button>
        <button class="filter-btn" data-filter="frontend">Frontend</button>
        <button class="filter-btn" data-filter="backend">Backend</button>
    </div>
</section>

<section id="contact">
    <div class="section-title-container">
        <h2 class="section-title">Contacto</h2>
        <span class="section-underline"></span>
    </div>
    <div class="contact-container">
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-details">
                    <h4>Email</h4>
                    <a href="mailto:sergioricart@gmail.com">sergiricartt@gmail.com</a>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact-details">
                    <h4>Teléfono</h4>
                    <p>+34 633 01 80 32</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-details">
                    <h4>Ubicación</h4>
                    <p>Valencia, España</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fab fa-linkedin"></i>
                </div>
                <div class="contact-details">
                    <h4>LinkedIn</h4>
                    <a href="https://www.linkedin.com/in/sergio-ricart-alabau-939441292" target="_blank">linkedin.com/in/sergio-ricart-alabau-939441292</a>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <form id="contactForm" action="" method="POST">
                <div class="form-group">
                    <label class="form-label" for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Tu nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Tu email" name="email">
                </div>
                <div class="form-group">
                    <label class="form-label" for="subject">Asunto</label>
                    <input type="text" class="form-control" id="subject" placeholder="Asunto del mensaje" name="asunto">
                </div>
                <div class="form-group">
                    <label class="form-label" for="message">Mensaje</label>
                    <textarea class="form-control" id="message" placeholder="Tu mensaje" name="mensaje"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </form>
        </div>
    </div>
</section>

<footer>
    <div class="footer-content">
        <div class="footer-logo">Sergio Ricart Alabau</div>
        <p>Full Stack Developer en constante aprendizaje. Me apasiona aprender nuevas tecnologías y mejorar mis habilidades como desarrollador.</p>
        <div class="footer-social">
            <a href="https://github.com/YerlliR" class="social-link"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/sergio-ricart-alabau-939441292" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/sergiricartt/" class="social-link"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="footer-nav">
            <a href="#home">inicio</a>
            <a href="#about">sobre_mí</a>
            <a href="#skills">skills</a>
            <a href="#learning-objectives">objetivos</a>
            <a href="#projects">proyectos</a>
            <a href="#contact">contacto</a>
        </div>
        <p class="copyright">&copy; 2025 Sergio Ricart Alabau. Todos los derechos reservados.</p>
    </div>
</footer>

<div class="theme-toggle" id="themeToggle">
    <span class="toggle-icon"><i class="fas fa-sun"></i></span>
</div>

<script src="./script.js"></script>
<script>


document.addEventListener('DOMContentLoaded', function() {
    // Para la sección SKILLS
    const skillsFilterButtons = document.querySelectorAll('#skills .filter-btn');
    const skillsCards = document.querySelectorAll('#skills .skill-card-compact');
    
    // Para la sección OBJETIVOS
    const objectivesFilterButtons = document.querySelectorAll('#learning-objectives .filter-btn');
    const objectivesCards = document.querySelectorAll('#learning-objectives .skill-card-compact');
    
    // Función mejorada de filtrado para la sección SKILLS
    function filterSkills(category) {
        skillsCards.forEach(card => {
            // IMPORTANTE: Siempre mantener la tarjeta visible
            card.style.display = 'flex';
            
            if (category === 'all') {
                // Cuando se selecciona "all", todas las tarjetas están completamente visibles
                card.style.opacity = '1';
                card.style.transform = '';
                card.style.filter = 'none';
                card.classList.remove('dimmed');
            } else if (card.getAttribute('data-category') === category) {
                // Las tarjetas que coinciden con el filtro están completamente visibles y ligeramente más grandes
                card.style.opacity = '1';
                card.style.transform = 'scale(1.05)';
                card.style.filter = 'none';
                card.classList.remove('dimmed');
            } else {
                // Las tarjetas que NO coinciden se atenúan pero siguen siendo visibles
                card.style.opacity = '0.4';
                card.style.transform = 'scale(0.95)';
                card.style.filter = 'grayscale(70%)';
                card.classList.add('dimmed');
            }
        });
    }

    // Función mejorada de filtrado para la sección OBJETIVOS
    function filterObjectives(category) {
        objectivesCards.forEach(card => {
            // IMPORTANTE: Siempre mantener la tarjeta visible
            card.style.display = 'flex';
            
            if (category === 'all') {
                // Cuando se selecciona "all", todas las tarjetas están completamente visibles
                card.style.opacity = '1';
                card.style.transform = '';
                card.style.filter = 'none';
                card.classList.remove('dimmed');
            } else if (card.getAttribute('data-category') === category) {
                // Las tarjetas que coinciden con el filtro están completamente visibles y ligeramente más grandes
                card.style.opacity = '1';
                card.style.transform = 'scale(1.05)';
                card.style.filter = 'none';
                card.classList.remove('dimmed');
            } else {
                // Las tarjetas que NO coinciden se atenúan pero siguen siendo visibles
                card.style.opacity = '0.4';
                card.style.transform = 'scale(0.95)';
                card.style.filter = 'grayscale(70%)';
                card.classList.add('dimmed');
            }
        });
    }

    // Configurar eventos de clic para los botones de la sección SKILLS
    if (skillsFilterButtons.length > 0) {
        skillsFilterButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                // Quitar la clase 'active' de todos los botones de SKILLS
                skillsFilterButtons.forEach(b => b.classList.remove('active'));
                
                // Añadir la clase 'active' al botón clicado
                this.classList.add('active');
                
                // Aplicar el filtro a la sección SKILLS
                const filterValue = this.getAttribute('data-filter');
                filterSkills(filterValue);
                
                // Opcional: guardar la preferencia de filtro
                localStorage.setItem('skillsFilter', filterValue);
            });
        });
        
        // Por defecto, mostrar todas las habilidades
        filterSkills('all');
        
        // Activar el botón "Todos" por defecto
        skillsFilterButtons.forEach(btn => {
            if (btn.getAttribute('data-filter') === 'all') {
                btn.classList.add('active');
            }
        });
    }

    // Configurar eventos de clic para los botones de la sección OBJETIVOS
    if (objectivesFilterButtons.length > 0) {
        objectivesFilterButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                // Quitar la clase 'active' de todos los botones de OBJETIVOS
                objectivesFilterButtons.forEach(b => b.classList.remove('active'));
                
                // Añadir la clase 'active' al botón clicado
                this.classList.add('active');
                
                // Aplicar el filtro a la sección OBJETIVOS
                const filterValue = this.getAttribute('data-filter');
                filterObjectives(filterValue);
                
                // Opcional: guardar la preferencia de filtro
                localStorage.setItem('objectivesFilter', filterValue);
            });
        });
        
        // Por defecto, mostrar todos los objetivos
        filterObjectives('all');
        
        // Activar el botón "Todos" por defecto
        objectivesFilterButtons.forEach(btn => {
            if (btn.getAttribute('data-filter') === 'all') {
                btn.classList.add('active');
            }
        });
    }

    // Ejecutar ahora para asegurar que todas las tarjetas sean visibles al cargar
    filterSkills('all');
    filterObjectives('all');
});
</script>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Datos del formulario
    $name = htmlspecialchars($_POST["nombre"] ?? '');
    $email = htmlspecialchars($_POST["email"] ?? '');
    $asunto = htmlspecialchars($_POST["asunto"] ?? '');
    $message = htmlspecialchars($_POST["mensaje"] ?? '');

    // Construcción del mensaje
    $text = "CV CURRICULUM:\n";
    $text .= "📩 Nuevo formulario:\n";
    $text .= "👤 Nombre: $name\n";
    $text .= "📧 Email: $email\n";
    $text .= "📧 Asunto: $asunto\n";
    $text .= "📝 Mensaje: $message";

    // Configuración de Telegram

    $url = "https://api.telegram.org/bot$token/sendMessage";

    // Enviar mensaje a Telegram con cURL
    $data = [
        "chat_id" => $chatId,
        "text" => $text,
        "parse_mode" => "Markdown"
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    curl_close($ch);

    // Confirmar el envío
    if ($response) {
        echo json_encode(["success" => true, "message" => "Formulario enviado correctamente"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error al enviar el formulario"]);
    }
}

?>