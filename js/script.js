document.addEventListener('DOMContentLoaded', () => {

  // Año dinámico en el footer
  const yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // Menú móvil
  const navToggle = document.getElementById('navToggle');
  const mainNav = document.getElementById('mainNav');

  if (navToggle && mainNav) {
    navToggle.addEventListener('click', () => {
      mainNav.classList.toggle('open');
      navToggle.classList.toggle('active');
    });

    // Cerrar menú al hacer clic en un enlace (excepto el dropdown padre)
    mainNav.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', (e) => {
        const parentLi = link.closest('.has-dropdown');
        const isMobile = window.innerWidth <= 768;

        if (parentLi && isMobile && link.parentElement === parentLi) {
          e.preventDefault();
          parentLi.classList.toggle('open');
          return;
        }
        mainNav.classList.remove('open');
      });
    });
  }

  // Header con sombra al hacer scroll
  const header = document.getElementById('header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 10) {
      header.style.boxShadow = '0 4px 20px rgba(14,134,172,0.12)';
    } else {
      header.style.boxShadow = 'none';
    }
  });

  // Animación de aparición al hacer scroll
  const revealTargets = document.querySelectorAll(
    '.treatment-card, .step, .info-card, .zones-box, .benefits-box, .before-after-box, .form-box, .progress-card, .progress-timeline'
  );
  revealTargets.forEach(el => el.classList.add('reveal'));

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  revealTargets.forEach(el => observer.observe(el));

  // Formulario de agendamiento (sin backend conectado todavía)
  const form = document.getElementById('appointmentForm');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      alert('Formulario recibido. Conecta este formulario a tu servicio de envío de correo o CRM preferido para activar el envío real.');
      form.reset();
    });
  }

});
