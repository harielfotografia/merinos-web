document.addEventListener('DOMContentLoaded', () => {

  // Año dinámico en el footer
  const yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // Menú móvil
  const navToggle = document.getElementById('navToggle');
  const mainNav = document.getElementById('mainNav');

  if (navToggle && mainNav) {
    const navBackdrop = document.createElement('div');
    navBackdrop.className = 'nav-backdrop';
    document.body.appendChild(navBackdrop);

    const closeNav = () => {
      mainNav.classList.remove('open');
      navToggle.classList.remove('active');
      navBackdrop.classList.remove('open');
      document.body.classList.remove('nav-locked');
    };

    const toggleNav = () => {
      const willOpen = !mainNav.classList.contains('open');
      mainNav.classList.toggle('open', willOpen);
      navToggle.classList.toggle('active', willOpen);
      navBackdrop.classList.toggle('open', willOpen);
      document.body.classList.toggle('nav-locked', willOpen);
    };

    navToggle.addEventListener('click', toggleNav);
    navBackdrop.addEventListener('click', closeNav);

    // Cerrar menú al hacer clic en un enlace (excepto el dropdown padre)
    mainNav.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', (e) => {
        const parentLi = link.closest('.has-dropdown');
        const isMobile = window.innerWidth <= 1100;

        if (parentLi && isMobile && link.parentElement === parentLi) {
          e.preventDefault();
          parentLi.classList.toggle('open');
          return;
        }
        closeNav();
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
  revealTargets.forEach(el => {
    el.classList.add('reveal');
    // Stagger siblings in the same grid/row so they cascade in instead of
    // popping in all at once (capped so long lists don't feel sluggish).
    const position = Array.prototype.indexOf.call(el.parentElement.children, el);
    el.style.transitionDelay = `${Math.min(position, 4) * 80}ms`;
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        el.classList.add('visible');
        observer.unobserve(el);
        // Drop the stagger delay once revealed so hover transitions stay instant.
        setTimeout(() => { el.style.transitionDelay = ''; }, 1000);
      }
    });
  }, { threshold: 0.15 });

  revealTargets.forEach(el => observer.observe(el));

  // Carrusel de tratamientos (activo en móvil vía CSS; los controles se ocultan en escritorio)
  const track = document.querySelector('.treatments-grid');
  if (track) {
    const cards = Array.from(track.querySelectorAll('.treatment-card'));
    const controls = document.createElement('div');
    controls.className = 'carousel-controls';
    controls.innerHTML =
      '<button type="button" class="carousel-arrow" aria-label="Tratamiento anterior"><i class="fa-solid fa-chevron-left"></i></button>' +
      '<div class="carousel-dots"></div>' +
      '<button type="button" class="carousel-arrow" aria-label="Tratamiento siguiente"><i class="fa-solid fa-chevron-right"></i></button>';
    track.after(controls);

    const [prevBtn, nextBtn] = controls.querySelectorAll('.carousel-arrow');
    const dotsWrap = controls.querySelector('.carousel-dots');
    const dots = cards.map((card, i) => {
      const dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'carousel-dot';
      dot.setAttribute('aria-label', `Ir al tratamiento ${i + 1}`);
      dot.addEventListener('click', () => goTo(i));
      dotsWrap.appendChild(dot);
      return dot;
    });

    const centerOffset = (card) => card.offsetLeft - (track.clientWidth - card.offsetWidth) / 2;

    const currentIndex = () => {
      const center = track.scrollLeft + track.clientWidth / 2;
      let best = 0, bestDist = Infinity;
      cards.forEach((card, i) => {
        const dist = Math.abs(card.offsetLeft + card.offsetWidth / 2 - center);
        if (dist < bestDist) { best = i; bestDist = dist; }
      });
      return best;
    };

    const goTo = (i) => {
      const index = Math.max(0, Math.min(cards.length - 1, i));
      track.scrollTo({ left: centerOffset(cards[index]), behavior: 'smooth' });
    };

    const update = () => {
      const i = currentIndex();
      dots.forEach((dot, n) => dot.classList.toggle('active', n === i));
      prevBtn.disabled = i === 0;
      nextBtn.disabled = i === cards.length - 1;
    };

    prevBtn.addEventListener('click', () => goTo(currentIndex() - 1));
    nextBtn.addEventListener('click', () => goTo(currentIndex() + 1));
    track.addEventListener('scroll', () => requestAnimationFrame(update), { passive: true });
    window.addEventListener('resize', update);
    update();

    // Arrastre con mouse; el táctil ya usa el scroll nativo con snap.
    let drag = null;
    let didDrag = false;
    let snapTimer = null;

    track.addEventListener('pointerdown', (e) => {
      if (e.pointerType !== 'mouse' || e.button !== 0) return;
      if (track.scrollWidth <= track.clientWidth + 1) return;
      clearTimeout(snapTimer);
      drag = { id: e.pointerId, startX: e.clientX, startScroll: track.scrollLeft, startIndex: currentIndex(), active: false };
    });

    track.addEventListener('pointermove', (e) => {
      if (!drag || e.pointerId !== drag.id) return;
      const dx = e.clientX - drag.startX;
      if (!drag.active) {
        if (Math.abs(dx) < 6) return;
        drag.active = true;
        didDrag = true;
        try { track.setPointerCapture(e.pointerId); } catch (_) { /* puntero ya inactivo */ }
        track.classList.add('is-dragging');
        track.style.scrollSnapType = 'none';
      }
      track.scrollLeft = drag.startScroll - dx;
    });

    const endDrag = (e) => {
      if (!drag || e.pointerId !== drag.id) return;
      const { active, startX, startIndex } = drag;
      drag = null;
      if (!active) return;
      const dx = e.clientX - startX;
      track.classList.remove('is-dragging');
      let target = currentIndex();
      if (target === startIndex && Math.abs(dx) > 50) target += dx < 0 ? 1 : -1;
      goTo(target);
      snapTimer = setTimeout(() => { track.style.scrollSnapType = ''; }, 450);
      setTimeout(() => { didDrag = false; }, 0);
    };
    track.addEventListener('pointerup', endDrag);
    track.addEventListener('pointercancel', endDrag);

    track.addEventListener('click', (e) => {
      if (didDrag) { e.preventDefault(); e.stopPropagation(); }
    }, true);
    track.addEventListener('dragstart', (e) => e.preventDefault());
  }

  // Selectores con el diseño del sitio (el <select> nativo queda oculto para validación y datos)
  document.querySelectorAll('.appointment-form select').forEach((select, selectIndex) => {
    const wrapper = document.createElement('div');
    wrapper.className = 'custom-select';
    select.parentNode.insertBefore(wrapper, select);
    wrapper.appendChild(select);
    select.tabIndex = -1;
    select.setAttribute('aria-hidden', 'true');

    const options = Array.from(select.options).filter(o => !o.disabled);
    const placeholder = select.querySelector('option[disabled]');
    const menuId = `custom-select-menu-${selectIndex}`;

    const trigger = document.createElement('button');
    trigger.type = 'button';
    trigger.className = 'custom-select-trigger';
    trigger.setAttribute('aria-haspopup', 'listbox');
    trigger.setAttribute('aria-expanded', 'false');
    trigger.setAttribute('aria-controls', menuId);
    trigger.innerHTML = '<span class="custom-select-value"></span><i class="fa-solid fa-chevron-down"></i>';

    const menu = document.createElement('ul');
    menu.className = 'custom-select-menu';
    menu.id = menuId;
    menu.setAttribute('role', 'listbox');

    const items = options.map(option => {
      const li = document.createElement('li');
      li.className = 'custom-select-option';
      li.setAttribute('role', 'option');
      li.dataset.value = option.value;
      li.innerHTML = `<span>${option.textContent}</span><i class="fa-solid fa-check"></i>`;
      li.addEventListener('click', () => { choose(option.value); close(); trigger.focus(); });
      li.addEventListener('mousemove', () => setActive(items.indexOf(li)));
      menu.appendChild(li);
      return li;
    });

    wrapper.append(trigger, menu);

    const valueEl = trigger.querySelector('.custom-select-value');
    let activeIndex = -1;

    const setActive = (i) => {
      activeIndex = i;
      items.forEach((li, n) => li.classList.toggle('is-active', n === i));
    };

    const render = () => {
      const selected = options.find(o => o.value === select.value && select.value !== '');
      valueEl.textContent = selected ? selected.textContent : (placeholder ? placeholder.textContent : '');
      trigger.classList.toggle('is-placeholder', !selected);
      items.forEach(li => li.setAttribute('aria-selected', String(!!selected && li.dataset.value === selected.value)));
    };

    const choose = (value) => {
      select.value = value;
      trigger.classList.remove('is-invalid');
      select.dispatchEvent(new Event('change', { bubbles: true }));
      render();
    };

    const open = () => {
      const menuHeight = menu.offsetHeight || items.length * 42 + 16;
      const rect = trigger.getBoundingClientRect();
      const spaceBelow = document.documentElement.clientHeight - rect.bottom;
      wrapper.classList.toggle('up', spaceBelow < menuHeight + 16 && rect.top > spaceBelow);
      wrapper.classList.add('open');
      trigger.setAttribute('aria-expanded', 'true');
      const selectedIdx = items.findIndex(li => li.getAttribute('aria-selected') === 'true');
      setActive(selectedIdx >= 0 ? selectedIdx : 0);
    };

    const close = () => {
      wrapper.classList.remove('open');
      trigger.setAttribute('aria-expanded', 'false');
      setActive(-1);
    };

    trigger.addEventListener('click', () => {
      wrapper.classList.contains('open') ? close() : open();
    });

    trigger.addEventListener('keydown', (e) => {
      const isOpen = wrapper.classList.contains('open');
      if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
        e.preventDefault();
        if (!isOpen) { open(); return; }
        const step = e.key === 'ArrowDown' ? 1 : -1;
        setActive((activeIndex + step + items.length) % items.length);
      } else if ((e.key === 'Enter' || e.key === ' ') && isOpen) {
        e.preventDefault();
        if (activeIndex >= 0) choose(items[activeIndex].dataset.value);
        close();
      } else if (e.key === 'Escape' && isOpen) {
        e.preventDefault();
        close();
      } else if (e.key === 'Tab') {
        close();
      }
    });

    document.addEventListener('click', (e) => {
      if (!wrapper.contains(e.target)) close();
    });

    select.addEventListener('invalid', () => {
      trigger.classList.add('is-invalid');
      trigger.focus();
    });

    if (select.form) select.form.addEventListener('reset', () => setTimeout(render, 0));

    render();
  });

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
