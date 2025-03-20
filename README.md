# Sergio Ricart Alabau - Portfolio Website

A modern, responsive personal portfolio website showcasing Sergio Ricart Alabau's skills, projects, and professional experience as a Full Stack Developer.

## 📋 Overview

This project is a personal portfolio website with a modern, dark-themed design featuring interactive UI elements and a responsive layout. The site includes sections for personal introduction, skills, projects, experience timeline, learning objectives, and contact information.

## 🌟 Features

- **Modern UI Design**: Dark mode by default with light mode toggle option
- **Responsive Layout**: Fully optimized for all screen sizes from mobile to desktop
- **Interactive Elements**: 
  - Hamburger menu for mobile navigation
  - Skills filtering system
  - Interactive project cards
  - Contact form with Telegram integration
  - Matrix-style animation effects
- **Dark/Light Theme Toggle**: Switch between dark and light themes with preferences saved to local storage
- **Animated Elements**: Smooth transitions, typing effects, and scroll animations
- **Filtering System**: Interactive filtering for skills and learning objectives
- **Form Validation**: Client-side validation for the contact form
- **Timeline Display**: Vertical timeline for experience visualization
- **PHP Integration**: Server-side processing for the contact form with Telegram API integration

## 🛠️ Technologies Used

### Frontend
- HTML5
- CSS3
- JavaScript
- Font Awesome for icons

### Backend
- PHP (for contact form processing)
- Telegram Bot API integration

### Performance Optimizations
- Mobile-specific optimizations for animations and effects
- Lazy-loading techniques
- Responsive image handling

## 📱 Responsive Design

The website is fully responsive with specific optimizations for different screen sizes:
- Desktop (>992px): Full experience with all visual effects
- Tablet (768px-992px): Adapted layout with slightly reduced animations
- Mobile (<768px): Streamlined layout with hamburger menu and reduced animations for performance

## 🌙 Theme Options

The website offers two color themes:
- **Dark Theme (Default)**: Dark background with neon green accents
- **Light Theme**: Light background with dark text for readability

Theme preference is saved in local storage for a consistent user experience across visits.

## 🖥️ Browser Compatibility

Optimized for modern browsers including:
- Chrome
- Firefox
- Safari
- Edge

## 📂 Project Structure

```
portfolio-website/
│
├── index.php            # Main entry point with HTML structure
├── styles.css           # All CSS styling
├── script.js            # JavaScript functionality
├── CV_SergioRicartAlabau.pdf  # Downloadable CV
│
├── images/
│   ├── SergioRicart_Foto.png  # Profile image
│   ├── rial.png               # Project image
│   ├── gestorPedidos.png      # Project image
│   ├── SAUCER.png             # Project image
│   └── hacking_11189888.png   # Favicon
│
└── README.md            # Project documentation
```

## ⚙️ Setup and Installation

1. Clone the repository:
   ```
   git clone https://github.com/YerlliR/portfolio-website.git
   ```

2. Set up a local PHP server or deploy to a web hosting service that supports PHP.

3. Configure the Telegram bot token and chat ID in the PHP section of index.php for the contact form to work.

4. Access the website through your local server or web host.

## 🚀 Deployment

The website can be deployed to any web hosting service that supports PHP. For optimal performance, consider:

- Using a CDN for static assets
- Enabling GZIP compression
- Setting up proper caching headers

## 📝 Contact Form Setup

The contact form uses PHP to send messages to a Telegram bot. To configure:

1. Create a Telegram bot using BotFather
2. Get your bot token and chat ID
3. Update the values in the PHP section at the bottom of index.php

## 🎨 Customization

The website can be easily customized:

- Color schemes: Edit the CSS variables in the :root section of styles.css
- Content: Update the text and sections in index.php
- Projects: Add or modify project cards in the projects section
- Skills: Add or modify skill cards in the skills and learning-objectives sections

## 👤 About the Developer

This portfolio belongs to Sergio Ricart Alabau, a Full Stack Developer with experience in:
- PHP, JavaScript, Java, CSS
- MySQL, PostgreSQL
- OpenXava, Hibernate, JPA
- Git, GitHub, GitLab
- Frontend and backend web development

## 📄 License

This project is available for personal use and reference. For commercial use or redistribution, please contact the repository owner.

## 🔗 Links

- [GitHub](https://github.com/YerlliR)
- [LinkedIn](https://www.linkedin.com/in/sergio-ricart-alabau-939441292)
- [Website](https://sergioricart.com)
