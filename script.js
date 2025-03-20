document.addEventListener("DOMContentLoaded", function() {
    const hamburgerMenu = document.getElementById('hamburgerMenu');
    const navMenu = document.querySelector('.nav-menu');
    
    // Función para cerrar el menú
    function closeMenu() {
        if (!hamburgerMenu || !navMenu) return;
        hamburgerMenu.classList.remove('active');
        navMenu.classList.remove('active');
        navMenu.style.maxHeight = '0';
        navMenu.style.opacity = '0';
        navMenu.style.pointerEvents = 'none';
    }
    
    // Función para abrir el menú
    function openMenu() {
        if (!hamburgerMenu || !navMenu) return;
        hamburgerMenu.classList.add('active');
        navMenu.classList.add('active');
        navMenu.style.maxHeight = '100vh'; 
        navMenu.style.opacity = '1';
        navMenu.style.pointerEvents = 'all';
    }
    
    // Inicializar correctamente el estado del menú
    function initMenu() {
        if (!hamburgerMenu || !navMenu) return;
        
        if (window.innerWidth <= 768) {
            closeMenu();
        } else {
            navMenu.style.maxHeight = 'none';
            navMenu.style.opacity = '1';
            navMenu.style.pointerEvents = 'all';
        }
    }
    
    // Inicializar al cargar
    initMenu();
    
    if (hamburgerMenu && navMenu) {
        // Toggle del menú hamburguesa
        hamburgerMenu.addEventListener('click', function(e) {
            e.stopPropagation();
            if (navMenu.classList.contains('active')) {
                closeMenu();
            } else {
                openMenu();
            }
        });
        
        // Cerrar el menú al hacer clic en un enlace
        const navLinks = document.querySelectorAll('.nav-menu a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    closeMenu();
                }
            });
        });
        
        // Cerrar el menú al hacer clic fuera
        document.addEventListener('click', function(event) {
            if (window.innerWidth <= 768 && 
                !navMenu.contains(event.target) && 
                !hamburgerMenu.contains(event.target) &&
                navMenu.classList.contains('active')) {
                closeMenu();
            }
        });
    }
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetElement = document.querySelector(this.getAttribute('href'));
            if (targetElement) {
                const yOffset = -70; 
                const y = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
                
                window.scrollTo({
                    top: y,
                    behavior: 'smooth'
                });
            }
        });
    });

    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;
    const toggleIcon = themeToggle ? themeToggle.querySelector('.toggle-icon') : null;
    
    if (themeToggle && toggleIcon) {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'light') {
            body.classList.add('light-theme');
            toggleIcon.innerHTML = '<i class="fas fa-moon"></i>';
        }
        
        themeToggle.addEventListener('click', () => {
            body.classList.toggle('light-theme');
            
            if (body.classList.contains('light-theme')) {
                toggleIcon.innerHTML = '<i class="fas fa-moon"></i>';
                localStorage.setItem('theme', 'light');
            } else {
                toggleIcon.innerHTML = '<i class="fas fa-sun"></i>';
                localStorage.setItem('theme', 'dark');
            }
            
            updateMatrixVisibility();
        });
    }

    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        const inputs = contactForm.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                if (window.innerWidth <= 768) {
                    document.body.style.fontSize = '16px';
                }
            });
            
            input.addEventListener('blur', function() {
                document.body.style.fontSize = '';
            });
        });
        
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            
            if (!name || !email || !message) {
                alert('Por favor, completa todos los campos requeridos.');
                return;
            }
            
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Por favor, introduce un email válido.');
                return;
            }
            
            contactForm.submit();
        });
    }
    
    setTimeout(() => {
        const typingElement = document.querySelector('.typing-effect');
        if (typingElement) {
            typingElement.style.width = '100%';
        }
    }, 500);
    
    const projectLinks = document.querySelectorAll('.project-link');
    
    projectLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.stopPropagation();
            
            const href = this.getAttribute('href');
            if (href && href !== '#') {
                window.open(href, '_blank');
            }
        });
    });
    
    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach(card => {
        card.addEventListener('click', function() {
            const primaryLink = this.querySelector('.project-link');
            if (primaryLink) {
                const href = primaryLink.getAttribute('href');
                if (href && href !== '#') {
                    window.open(href, '_blank');
                }
            }
        });
    });

    const sections = document.querySelectorAll('section');
    const navItems = document.querySelectorAll('.nav-menu a');
    
    const highlightNavigation = () => {
        let current = '';
        const scrollPosition = window.scrollY + 100;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });
        
        navItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('href') === `#${current}`) {
                item.classList.add('active');
            }
        });
    };
    

    let scrollTimeout;
    window.addEventListener('scroll', function() {
        if (!scrollTimeout) {
            scrollTimeout = setTimeout(function() {
                highlightNavigation();
                scrollTimeout = null;
            }, 100);
        }
    });
    
    highlightNavigation();
    
    let touchStartY = 0;
    let touchEndY = 0;
    
    document.addEventListener('touchstart', function(e) {
        touchStartY = e.changedTouches[0].screenY;
    }, false);
    
    document.addEventListener('touchend', function(e) {
        touchEndY = e.changedTouches[0].screenY;
        handleSwipe();
    }, false);
    
    function handleSwipe() {
        const swipeDistance = touchEndY - touchStartY;
        
        if (swipeDistance > 100 && window.scrollY < 50 && navMenu && navMenu.classList.contains('active')) {
            closeMenu();
        }
    }
    
    function optimizeMobileEffects() {
        if (window.innerWidth <= 768) {
            const particles = document.querySelectorAll('.particle, .code-particle');
            particles.forEach((particle, index) => {
                if (index > 5) {
                    particle.style.display = 'none';
                }
            });
            
            const matrixContainer = document.getElementById('matrixRain');
            if (matrixContainer) {
                matrixContainer.style.display = 'none';
            }
        } else {
            const particles = document.querySelectorAll('.particle, .code-particle');
            particles.forEach(particle => {
                particle.style.display = 'block';
            });
            
            updateMatrixVisibility();
        }
    }
    
    optimizeMobileEffects();
    
    window.addEventListener('resize', function() {
        initMenu();
        optimizeMobileEffects();
    });
    
    const skillCardsCompact = document.querySelectorAll('.skill-card-compact');
    
    function animateSkillsOnScroll() {
        const skillsSection = document.getElementById('skills');
        
        if (skillsSection) {
            const sectionTop = skillsSection.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (sectionTop < windowHeight * 0.8) {
                skillCardsCompact.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50 * index);
                });
                
                window.removeEventListener('scroll', animateSkillsOnScroll);
            }
        }
    }
    

    if (skillCardsCompact.length > 0) {
        skillCardsCompact.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
        });

        window.addEventListener('scroll', animateSkillsOnScroll);
        
        animateSkillsOnScroll();
    }
    
    const skillsFilterButtons = document.querySelectorAll('#skills .filter-btn');
    const skillsCards = document.querySelectorAll('#skills .skill-card-compact');

    function filterSkills(category) {
        skillsCards.forEach(card => {
            card.style.display = 'flex';
            
            if (category === 'all') {
                card.style.opacity = '1';
                card.style.filter = 'none';
                card.style.transform = '';
                card.classList.remove('dimmed');
            } else if (card.getAttribute('data-category') === category) {
                card.style.opacity = '1';
                card.style.filter = 'none';
                card.style.transform = 'scale(1.05)';
                card.classList.remove('dimmed');
            } else {
                card.style.opacity = '0.4';
                card.style.transform = 'scale(0.95)';
                card.classList.add('dimmed');
            }
        });
    }

    if (skillsFilterButtons.length > 0) {
        skillsFilterButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                skillsFilterButtons.forEach(b => b.classList.remove('active'));
                
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                filterSkills(filterValue);
                
                localStorage.setItem('skillsFilter', filterValue);
            });
        });
        
        const savedSkillsFilter = localStorage.getItem('skillsFilter');
        if (savedSkillsFilter) {
            filterSkills(savedSkillsFilter);
            
            skillsFilterButtons.forEach(btn => {
                if (btn.getAttribute('data-filter') === savedSkillsFilter) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });
        } else {
            filterSkills('all');
            
            skillsFilterButtons.forEach(btn => {
                if (btn.getAttribute('data-filter') === 'all') {
                    btn.classList.add('active');
                }
            });
        }
    }

    const objectivesFilterButtons = document.querySelectorAll('#learning-objectives .filter-btn');
    const objectivesCards = document.querySelectorAll('#learning-objectives .skill-card-compact');

    function filterObjectives(category) {
        objectivesCards.forEach(card => {

            card.style.display = 'flex';
            
            if (category === 'all') {
                card.style.opacity = '1';
                card.style.filter = 'none';
                card.style.transform = '';
                card.classList.remove('dimmed');
            } else if (card.getAttribute('data-category') === category) {
                card.style.opacity = '1';
                card.style.filter = 'none';
                card.style.transform = 'scale(1.05)';
                card.classList.remove('dimmed');
            } else {
                card.style.opacity = '0.4';
                card.style.transform = 'scale(0.95)';
                card.classList.add('dimmed');
            }
        });
    }

    if (objectivesFilterButtons.length > 0) {
        objectivesFilterButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                objectivesFilterButtons.forEach(b => b.classList.remove('active'));
                
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                filterObjectives(filterValue);
                
                localStorage.setItem('objectivesFilter', filterValue);
            });
        });
        
        const savedObjectivesFilter = localStorage.getItem('objectivesFilter');
        if (savedObjectivesFilter) {
            filterObjectives(savedObjectivesFilter);
            
            objectivesFilterButtons.forEach(btn => {
                if (btn.getAttribute('data-filter') === savedObjectivesFilter) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });
        } else {
            filterObjectives('all');
            
            objectivesFilterButtons.forEach(btn => {
                if (btn.getAttribute('data-filter') === 'all') {
                    btn.classList.add('active');
                }
            });
        }
    }

    const allSkillCards = document.querySelectorAll('.skill-card-compact');
    
    allSkillCards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            if (window.innerWidth <= 768) return;
            
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateY = ((x - centerX) / centerX) * 10;
            const rotateX = ((centerY - y) / centerY) * 10;
            
            if (!this.classList.contains('dimmed')) {
                this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-5px)`;
                
                const icon = this.querySelector('.skill-icon');
                if (icon) {
                    icon.style.boxShadow = `0 0 20px rgba(0, 255, 140, ${0.3 + (x + y) / (rect.width + rect.height) * 0.4})`;
                }
            }
        });
        
        card.addEventListener('mouseleave', function() {
            if (!this.classList.contains('dimmed')) {
                this.style.transform = '';
            } else {
                this.style.transform = 'scale(0.95)';
            }
            
            const icon = this.querySelector('.skill-icon');
            if (icon) {
                icon.style.boxShadow = '';
            }
        });
    });
});

function initMatrixEffect() {
    const matrixContainer = document.getElementById('matrixRain');
    if (!matrixContainer) return;
    
    updateMatrixVisibility();
    
    const charCount = window.innerWidth <= 768 ? 10 : 30;
    
    const chars = '01アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン{}[]()<>=&|!';
    
    if (matrixContainer.children.length === 0) {
        for (let i = 0; i < charCount; i++) {
            const column = document.createElement('div');
            column.style.position = 'absolute';
            column.style.top = '-100px';
            column.style.color = 'rgba(0, 255, 140, 0.07)';
            column.style.fontSize = '1.2rem';
            column.style.fontFamily = 'monospace';
            column.style.textAlign = 'center';
            column.style.userSelect = 'none';
            column.style.pointerEvents = 'none';
            column.style.left = Math.random() * 100 + 'vw';
            column.style.animationDuration = Math.random() * 30 + 10 + 's';
            column.style.animationDelay = Math.random() * 2 + 's';
            column.style.opacity = Math.random() * 0.5 + 0.1;
            
            let columnChars = '';
            for (let j = 0; j < (window.innerWidth <= 768 ? 5 : Math.random() * 20 + 10); j++) {
                columnChars += chars.charAt(Math.floor(Math.random() * chars.length)) + '<br>';
            }
            
            column.innerHTML = columnChars;
            column.style.animation = `matrix-rain ${Math.random() * 20 + 10}s linear infinite`;
            matrixContainer.appendChild(column);
        }
    }
}

function updateMatrixVisibility() {
    const matrixContainer = document.getElementById('matrixRain');
    if (!matrixContainer) return;
    
    if (document.body.classList.contains('light-theme') || window.innerWidth <= 768) {
        matrixContainer.style.opacity = '0';
        setTimeout(() => {
            matrixContainer.style.display = 'none';
        }, 300);
    } else {
        matrixContainer.style.display = 'block';
        setTimeout(() => {
            matrixContainer.style.opacity = '1';
        }, 50);
    }
}

function updateHamburgerVisibility() {
    const hamburgerMenu = document.getElementById('hamburgerMenu');
    if (hamburgerMenu) {
        if (window.innerWidth <= 768) {
            hamburgerMenu.style.display = 'flex';
        } else {
            hamburgerMenu.style.display = 'none';
        }
    }
}

window.addEventListener("load", function() {
    const loader = document.querySelector(".loader-wrapper");
    setTimeout(() => {
        loader.style.opacity = "0";
        setTimeout(() => {
            loader.style.display = "none";
        }, 500);
    }, 1500);
    
    initMatrixEffect();
});

window.addEventListener('load', updateHamburgerVisibility);
window.addEventListener('resize', updateHamburgerVisibility);