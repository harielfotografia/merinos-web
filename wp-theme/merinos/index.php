<?php
/**
 * Main template: single-page landing for Merinos.cl.
 */

get_header();
?>

<!-- ===== HERO ===== -->
<section class="hero" id="inicio">
  <div class="container hero-inner">
    <div class="hero-text">
      <span class="badge">TRATAMIENTO PRINCIPAL</span>
      <h1>Hidrolipoclapsia</h1>
      <h2>Reducción de grasa localizada<br><strong>sin cirugía, sin anestesia y mínimamente invasiva.</strong></h2>
      <p>Técnica avanzada que utiliza soluciones específicas para disolver la grasa localizada de forma segura, remodelando tu figura y mejorando la flacidez.</p>
    </div>

    <div class="hero-features">
      <div class="hero-feature">
        <i class="fa-solid fa-eye"></i>
        <span>Resultados visibles desde las primeras sesiones</span>
      </div>
      <div class="hero-feature">
        <i class="fa-solid fa-shield-heart"></i>
        <span>Segura y efectiva realizada por profesionales capacitados</span>
      </div>
      <div class="hero-feature">
        <i class="fa-regular fa-clock"></i>
        <span>Procedimiento rápido, recuperación inmediata a tu rutina</span>
      </div>
    </div>

    <div class="hero-actions">
      <a href="#contacto" class="btn btn-primary"><i class="fa-regular fa-calendar-check"></i> Agendar evaluación</a>
      <a href="#hidrolipoclapsia" class="btn btn-outline">Conocer más <i class="fa-solid fa-arrow-right"></i></a>
    </div>

    </div>
</section>

<!-- ===== TRATAMIENTOS ===== -->
<section class="section" id="tratamientos">
  <div class="container">
    <p class="eyebrow center">NUESTROS TRATAMIENTOS</p>
    <h2 class="section-title center">Tecnología avanzada para tu bienestar</h2>

    <div class="treatments-grid">
      <article class="treatment-card featured" id="hidrolipoclapsia">
        <span class="tag">PRINCIPAL</span>
        <img class="site-photo" src="<?php echo esc_url( get_template_directory_uri() . '/images/hidrolipoclapsia.jpg' ); ?>" alt="Preparaci&oacute;n de material para una consulta est&eacute;tica" loading="lazy" decoding="async">
        <h3>Hidrolipoclapsia</h3>
        <p>Técnica inyectable que disuelve la grasa localizada mediante soluciones especiales, permitiendo una reducción efectiva y definitiva del tejido adiposo.</p>
        <ul class="check-list small">
          <li><i class="fa-solid fa-circle-check"></i> Moldea tu figura</li>
          <li><i class="fa-solid fa-circle-check"></i> Resultados desde las primeras sesiones</li>
          <li><i class="fa-solid fa-circle-check"></i> Sin tiempos de inactividad</li>
        </ul>
        <a href="#contacto" class="btn btn-primary btn-block">Conocer más</a>
      </article>

      <article class="treatment-card" id="criolipolisis">
        <img class="site-photo" src="<?php echo esc_url( get_template_directory_uri() . '/images/criolipolisis.jpg' ); ?>" alt="Aplicador de un equipo de criolip&oacute;lisis" loading="lazy" decoding="async">
        <h3>Criolipólisis</h3>
        <p>El frío controlado elimina naturalmente las células grasas sin dañar los tejidos circundantes.</p>
        <a href="#contacto" class="btn btn-primary btn-block">Conocer más</a>
      </article>

      <article class="treatment-card" id="mesoterapia">
        <img class="site-photo" src="<?php echo esc_url( get_template_directory_uri() . '/images/mesoterapia.jpg' ); ?>" alt="Ampollas de uso est&eacute;tico sobre una bandeja cl&iacute;nica" loading="lazy" decoding="async">
        <h3>Mesoterapia</h3>
        <p>Microinyecciones de principios activos que mejoran la calidad de la piel, reducen grasa localizada, celulitis y flacidez.</p>
        <a href="#contacto" class="btn btn-primary btn-block">Conocer más</a>
      </article>
    </div>
  </div>
</section>

<!-- ===== COMO FUNCIONA ===== -->
<section class="section section-alt">
  <div class="container">
    <p class="eyebrow center">¿CÓMO FUNCIONA LA HIDROLIPOCLAPSIA?</p>

    <div class="steps-row">
      <div class="step">
        <div class="step-icon"><i class="fa-solid fa-syringe"></i></div>
        <h4>1. Infiltración</h4>
        <p>Se aplica la solución especializada en la zona tratada.</p>
      </div>
      <div class="step">
        <div class="step-icon"><i class="fa-solid fa-atom"></i></div>
        <h4>2. Disolución</h4>
        <p>Los activos rompen las membranas de las células grasas.</p>
      </div>
      <div class="step">
        <div class="step-icon"><i class="fa-solid fa-snowflake"></i></div>
        <h4>3. Liberación</h4>
        <p>El contenido graso se libera y se transforma en emulsión.</p>
      </div>
      <div class="step">
        <div class="step-icon"><i class="fa-solid fa-droplet"></i></div>
        <h4>4. Drenaje</h4>
        <p>El sistema linfático transporta los residuos para su eliminación.</p>
      </div>
      <div class="step">
        <div class="step-icon"><i class="fa-solid fa-person-dress"></i></div>
        <h4>5. Resultados</h4>
        <p>Mejora visible del contorno y reducción de grasa localizada.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== BENEFICIOS + ZONAS ===== -->
<section class="section">
  <div class="container two-col">
    <div class="benefits-box">
      <h3>BENEFICIOS</h3>
      <ul class="check-list">
        <li><i class="fa-solid fa-circle-check"></i> Reducción efectiva de grasa localizada</li>
        <li><i class="fa-solid fa-circle-check"></i> Mejora del contorno corporal</li>
        <li><i class="fa-solid fa-circle-check"></i> Procedimiento minimamente invasivo</li>
        <li><i class="fa-solid fa-circle-check"></i> Sin cirugía ni anestesia</li>
        <li><i class="fa-solid fa-circle-check"></i> Resultados progresivos y naturales</li>
        <li><i class="fa-solid fa-circle-check"></i> Recuperación inmediata</li>
        <li><i class="fa-solid fa-circle-check"></i> Mejora la textura y flacidez de la piel</li>
      </ul>
    </div>

    <div class="zones-box">
      <h3 class="center">ZONAS DE APLICACIÓN</h3>
      <svg class="zone-sprite" aria-hidden="true" focusable="false">
        <defs>
          <path id="zp-torso" d="M27.8 15C25.8 15.2 24.2 15.8 23.8 17.4C23.6 19.4 24.4 21.2 24.8 22.6C25.4 24.5 26.6 25.6 26.8 27.4C27 29.5 25.2 31.8 24.2 34.2C23.6 35.8 23.6 37.4 24.2 38.6H39.8C40.4 37.4 40.4 35.8 39.8 34.2C38.8 31.8 37 29.5 37.2 27.4C37.4 25.6 38.6 24.5 39.2 22.6C39.6 21.2 40.4 19.4 40.2 17.4C39.8 15.8 38.2 15.2 36.2 15Z"/>
          <path id="zp-arm-l" d="M24.2 16.2C22.6 16.8 22 18.6 21.8 20.6C21.6 23 21.2 25 21 27C20.6 30 20 33 19.8 36C19.6 37.6 19.4 39 19.8 40.2C20.2 40.8 21 40.6 21.2 40C21.4 38.8 21.4 37.6 21.4 36.4C21.8 33.4 22.6 30.4 23 27.6C23.4 25.6 23.8 23.4 24.4 21.6Z"/>
          <path id="zp-arm-r" d="M39.8 16.2C41.4 16.8 42 18.6 42.2 20.6C42.4 23 42.8 25 43 27C43.4 30 44 33 44.2 36C44.4 37.6 44.6 39 44.2 40.2C43.8 40.8 43 40.6 42.8 40C42.6 38.8 42.6 37.6 42.6 36.4C42.2 33.4 41.4 30.4 41 27.6C40.6 25.6 40.2 23.4 39.6 21.6Z"/>
          <path id="zp-leg-l" d="M24.2 38C23.9 42 24.6 45.5 25.6 48.5C26 50 25.8 52 26 54C26.3 56.5 27 58.5 27.2 60.2L27 61.6C27.6 62.2 29.4 62.2 29.8 61.4L29.7 60.2C30 57.5 30.6 54.5 30.6 52C30.6 50.2 30.4 49 30.6 47.6C31 45 31.6 41.5 31.6 38.6Z"/>
          <path id="zp-leg-r" d="M39.8 38C40.1 42 39.4 45.5 38.4 48.5C38 50 38.2 52 38 54C37.7 56.5 37 58.5 36.8 60.2L37 61.6C36.4 62.2 34.6 62.2 34.2 61.4L34.3 60.2C34 57.5 33.4 54.5 33.4 52C33.4 50.2 33.6 49 33.4 47.6C33 45 32.4 41.5 32.4 38.6Z"/>
          <path id="zm-torso" d="M27.6 15C24.8 15.2 22.4 15.8 22 17.8C21.8 20.4 23.4 23.4 24.6 26C25.4 28.2 25.4 31 25.2 33.6C25 35.4 24.8 37 25 38.6H39C39.2 37 39 35.4 38.8 33.6C38.6 31 38.6 28.2 39.4 26C40.6 23.4 42.2 20.4 42 17.8C41.6 15.8 39.2 15.2 36.4 15Z"/>
          <path id="zm-arm-l" d="M22.6 16.4C20.8 17 20.2 19 20 21.2C19.8 23.6 19.4 25.6 19.2 27.6C18.8 30.6 18.2 33.4 18 36.2C17.8 37.8 17.6 39.2 18 40.4C18.4 41 19.4 40.8 19.6 40.2C19.8 39 19.8 37.8 19.8 36.6C20.2 33.6 21 30.8 21.6 28C22 26 22.6 23.8 23.6 22Z"/>
          <path id="zm-arm-r" d="M41.4 16.4C43.2 17 43.8 19 44 21.2C44.2 23.6 44.6 25.6 44.8 27.6C45.2 30.6 45.8 33.4 46 36.2C46.2 37.8 46.4 39.2 46 40.4C45.6 41 44.6 40.8 44.4 40.2C44.2 39 44.2 37.8 44.2 36.6C43.8 33.6 43 30.8 42.4 28C42 26 41.4 23.8 40.4 22Z"/>
          <path id="zm-leg-l" d="M25 38C24.8 42 25.2 45.5 25.8 48.5C26 51 25.8 54 26.2 57L26.4 60.2L26.2 61.6C26.8 62.2 29 62.2 29.6 61.4L29.6 60.2C29.9 57.5 30.6 54.5 30.6 52C30.6 50 30.4 49 30.6 47.6C31 45 31.6 41.5 31.6 38.6Z"/>
          <path id="zm-leg-r" d="M39 38C39.2 42 38.8 45.5 38.2 48.5C38 51 38.2 54 37.8 57L37.6 60.2L37.8 61.6C37.2 62.2 35 62.2 34.4 61.4L34.4 60.2C34.1 57.5 33.4 54.5 33.4 52C33.4 50 33.6 49 33.4 47.6C33 45 32.4 41.5 32.4 38.6Z"/>
          <clipPath id="zc-torso"><use href="#zp-torso"/></clipPath>
          <clipPath id="zc-arms"><use href="#zp-arm-l"/><use href="#zp-arm-r"/></clipPath>
          <clipPath id="zc-legs"><use href="#zp-leg-l"/><use href="#zp-leg-r"/></clipPath>
          <clipPath id="zc-lower"><use href="#zp-torso"/><use href="#zp-leg-l"/><use href="#zp-leg-r"/></clipPath>
          <clipPath id="zc-male-torso"><use href="#zm-torso"/></clipPath>
          <g id="zb-body">
            <g style="fill:var(--zb-skin)">
              <use href="#zp-torso"/><use href="#zp-arm-l"/><use href="#zp-arm-r"/><use href="#zp-leg-l"/><use href="#zp-leg-r"/>
              <rect x="30.4" y="10.5" width="3.2" height="5.5"/>
            </g>
            <path style="fill:var(--zb-hair)" d="M32 2.8C28.2 2.8 26.6 5.6 26.8 9.2C27 12.6 26.2 15.2 25 17.6C26.8 18.4 28.6 18.2 29.8 17.2L30.4 11.5H33.6L34.2 17.2C35.4 18.2 37.2 18.4 39 17.6C37.8 15.2 37 12.6 37.2 9.2C37.4 5.6 35.8 2.8 32 2.8Z"/>
            <ellipse style="fill:var(--zb-skin)" cx="32" cy="8" rx="3.6" ry="4.4"/>
            <path style="fill:var(--zb-hair)" d="M32 3.4C29.4 3.4 28 5 28.2 7.6C29.4 6.4 30.8 5.9 32.2 5.9C33.8 5.9 35.1 6.6 35.9 7.6C36 5 34.6 3.4 32 3.4Z"/>
          </g>
          <g id="zb-back">
            <g style="fill:var(--zb-skin)">
              <use href="#zp-torso"/><use href="#zp-arm-l"/><use href="#zp-arm-r"/><use href="#zp-leg-l"/><use href="#zp-leg-r"/>
              <rect x="30.4" y="10.5" width="3.2" height="5.5"/>
            </g>
            <path style="fill:var(--zb-hair)" d="M32 2.8C28.2 2.8 26.6 5.6 26.8 9.2C27 12.6 26.2 15.2 25 17.6C26.8 18.4 28.6 18.2 29.8 17.2L30.4 11.5H33.6L34.2 17.2C35.4 18.2 37.2 18.4 39 17.6C37.8 15.2 37 12.6 37.2 9.2C37.4 5.6 35.8 2.8 32 2.8Z"/>
            <ellipse style="fill:var(--zb-hair)" cx="32" cy="8" rx="3.6" ry="4.4"/>
          </g>
          <g id="zb-male">
            <g style="fill:var(--zb-skin)">
              <use href="#zm-torso"/><use href="#zm-arm-l"/><use href="#zm-arm-r"/><use href="#zm-leg-l"/><use href="#zm-leg-r"/>
              <rect x="30.2" y="11.5" width="3.6" height="4.5"/>
              <ellipse cx="32" cy="8.4" rx="3.9" ry="4.6"/>
            </g>
            <path style="fill:var(--zb-hair)" d="M28 8.2C27.6 4.6 29.6 3 32 3C34.4 3 36.4 4.6 36 8.2C35.4 6.6 33.9 5.9 32 5.9C30.1 5.9 28.6 6.6 28 8.2Z"/>
          </g>
          <g id="zb-bust">
            <path style="fill:var(--zb-hair)" d="M32 5.5C23.5 5.5 20.6 12 20.8 20C21 28.5 20 35 17.8 41.8C21 43 24.5 43 27.4 42H36.6C39.5 43 43 43 46.2 41.8C44 35 43 28.5 43.2 20C43.4 12 40.5 5.5 32 5.5Z"/>
            <g style="fill:var(--zb-skin)">
              <rect x="28.6" y="26" width="6.8" height="17"/>
              <path d="M9.5 66C9.5 51 16.5 45.4 28.6 42.2H35.4C47.5 45.4 54.5 51 54.5 66Z"/>
              <ellipse cx="32" cy="19.5" rx="8.2" ry="10.2"/>
            </g>
            <path style="fill:var(--zb-hair)" d="M32 6.8C25.8 6.8 23.4 11 23.6 16.8C25.4 13.4 28.4 11.8 31.4 11.6C30.8 13 30.6 14.2 30.8 15.4C33 12.8 37 12 40.4 14.6C40.4 9.8 37.6 6.8 32 6.8Z"/>
          </g>
          <g id="zb-profile">
            <path style="fill:var(--zb-hair)" d="M29.5 4C20.8 4 15.9 10.4 16.2 19.4C16.5 27.4 15 35 12.4 42.6C16.4 43.6 20.6 43.3 24.6 42.4L25 30Z"/>
            <g style="fill:var(--zb-skin)">
              <path d="M30.5 5.5C38 5.5 42.6 9.6 43.2 15.5L45.2 21.5L43.3 22.8L43.8 25.2L42.9 26.6L43.4 28.2L41.5 31C40 32.6 37.2 33.8 35.6 34.2L36.4 42H24.5L24.6 32C20.5 29 18.6 25 18.6 19C18.6 11 23.4 5.5 30.5 5.5Z"/>
              <path d="M8 66C8 50.5 15.5 45 24.5 42H36.4C46 45 54 50.5 54 66Z"/>
            </g>
            <path style="fill:var(--zb-hair)" d="M30.5 5C23.6 5 18.8 9.8 18.4 16.6C21.4 12.6 26 10.8 31 10.8C35.4 10.8 39.4 11.8 42.4 13.6C41.2 8.2 36.8 5 30.5 5Z"/>
          </g>
        </defs>
      </svg>
      <div class="zones-grid">
        <div class="zone"><div class="zone-icon"><svg viewBox="0 0 64 64" aria-hidden="true"><use href="#zb-body"/><g clip-path="url(#zc-torso)"><ellipse cx="32" cy="31.4" rx="5.8" ry="5.8"/></g></svg></div><span>Abdomen</span></div>
        <div class="zone"><div class="zone-icon"><svg viewBox="0 0 64 64" aria-hidden="true"><use href="#zb-body"/><g clip-path="url(#zc-torso)"><rect x="18" y="26.5" width="10.4" height="9.5" rx="2"/><rect x="35.6" y="26.5" width="10.4" height="9.5" rx="2"/></g></svg></div><span>Flancos</span></div>
        <div class="zone"><div class="zone-icon"><svg viewBox="0 0 64 64" aria-hidden="true"><use href="#zb-back"/><g clip-path="url(#zc-torso)"><rect x="18" y="16" width="13.3" height="12.6"/><rect x="32.7" y="16" width="13.3" height="12.6"/></g></svg></div><span>Espalda</span></div>
        <div class="zone"><div class="zone-icon"><svg viewBox="0 0 64 64" aria-hidden="true"><use href="#zb-body"/><g clip-path="url(#zc-arms)"><rect x="14" y="15" width="36" height="12.6"/></g></svg></div><span>Brazos</span></div>
        <div class="zone"><div class="zone-icon"><svg viewBox="0 0 64 64" aria-hidden="true"><use href="#zb-body"/><g clip-path="url(#zc-legs)"><rect x="14" y="37" width="36" height="11"/></g></svg></div><span>Muslos</span></div>
        <div class="zone"><div class="zone-icon"><svg viewBox="0 0 64 64" aria-hidden="true"><use href="#zb-back"/><g clip-path="url(#zc-lower)"><ellipse cx="27.8" cy="38" rx="4.1" ry="4.5"/><ellipse cx="36.2" cy="38" rx="4.1" ry="4.5"/></g></svg></div><span>Glúteos</span></div>
        <div class="zone"><div class="zone-icon"><svg class="is-portrait" viewBox="0 0 64 64" aria-hidden="true"><use href="#zb-profile"/><path d="M41.6 30.8C43.2 34.4 41.6 37.6 37.8 37.9C36.6 38 35.9 37.4 35.8 36.6L35.6 34.2C37.6 33.6 40.2 32.6 41.6 30.8Z"/></svg></div><span>Papada</span></div>
        <div class="zone"><div class="zone-icon"><svg viewBox="0 0 64 64" aria-hidden="true"><use href="#zb-body"/><g clip-path="url(#zc-legs)"><rect x="14" y="49" width="36" height="10.8"/></g></svg></div><span>Piernas</span></div>
        <div class="zone"><div class="zone-icon"><svg class="is-portrait" viewBox="0 0 64 64" aria-hidden="true"><use href="#zb-bust"/><path d="M28.6 28.8C30.4 30.3 33.6 30.3 35.4 28.8V42.4H28.6Z"/></svg></div><span>Cuello</span></div>
        <div class="zone"><div class="zone-icon"><svg viewBox="0 0 64 64" aria-hidden="true"><use href="#zb-male"/><g clip-path="url(#zc-male-torso)"><path d="M23.4 18.4C26.4 17.2 29.6 17.1 31.4 17.6V23.6C29 24.9 25.4 24.7 23.6 23ZM40.6 18.4C37.6 17.2 34.4 17.1 32.6 17.6V23.6C35 24.9 38.6 24.7 40.4 23Z"/></g></svg></div><span>Pecho masculino</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ===== RESULTADOS PROGRESIVOS ===== -->
<section class="section section-alt" id="resultados">
  <div class="container">
    <p class="eyebrow center">RESULTADOS PROGRESIVOS</p>

    <div class="progress-wrap">
      <div class="progress-timeline">
        <div class="progress-step">
          <div class="progress-icon"><i class="fa-regular fa-calendar"></i></div>
          <h4>Día 1</h4>
          <p>Tratamiento realizado.</p>
        </div>
        <div class="progress-step">
          <div class="progress-icon"><i class="fa-regular fa-calendar"></i></div>
          <h4>1-2 semanas</h4>
          <p>Comienza el proceso de eliminación.</p>
        </div>
        <div class="progress-step">
          <div class="progress-icon"><i class="fa-regular fa-calendar"></i></div>
          <h4>4-6 semanas</h4>
          <p>Resultados visibles y contorno más definido.</p>
        </div>
        <div class="progress-step">
          <div class="progress-icon"><i class="fa-solid fa-trophy"></i></div>
          <h4>8-12 semanas</h4>
          <p>Resultados óptimos y progresivos.</p>
        </div>
      </div>

      <div class="progress-card">
        <div class="progress-card-text">
          <i class="fa-regular fa-heart"></i>
          <p>Los resultados pueden variar según cada paciente y hábitos de vida.</p>
        </div>
        <img class="site-photo" src="<?php echo esc_url( get_template_directory_uri() . '/images/resultados.jpg' ); ?>" alt="Profesional y paciente revisando un plan de seguimiento" loading="lazy" decoding="async">
      </div>
    </div>
  </div>
</section>

<!-- ===== INFO CARDS ===== -->
<section class="section">
  <div class="container">
    <div class="info-cards">
      <a href="#" class="info-card">
        <i class="fa-solid fa-droplet"></i>
        <h4>Higiene e hidratación</h4>
        <p>Cuida tu piel diariamente para potenciar y mantener los resultados.</p>
        <span class="ver-mas">Ver más <i class="fa-solid fa-chevron-right"></i></span>
      </a>
      <a href="#" class="info-card">
        <i class="fa-regular fa-heart"></i>
        <h4>Cuidados previos</h4>
        <p>Recomendaciones importantes antes de tu tratamiento para tu seguridad.</p>
        <span class="ver-mas">Ver más <i class="fa-solid fa-chevron-right"></i></span>
      </a>
      <a href="#" class="info-card">
        <i class="fa-solid fa-shield-heart"></i>
        <h4>Cuidados posteriores</h4>
        <p>Sigue nuestras indicaciones y maximiza los beneficios del tratamiento.</p>
        <span class="ver-mas">Ver más <i class="fa-solid fa-chevron-right"></i></span>
      </a>
      <a href="#" class="info-card">
        <i class="fa-solid fa-plus"></i>
        <h4>Efectos secundarios</h4>
        <p>Posibles efectos temporales y normales del tratamiento informado previamente.</p>
        <span class="ver-mas">Ver más <i class="fa-solid fa-chevron-right"></i></span>
      </a>
      <a href="#faq" class="info-card" id="faq">
        <i class="fa-regular fa-circle-question"></i>
        <h4>Preguntas frecuentes</h4>
        <p>Resolvemos tus dudas más comunes sobre nuestros tratamientos.</p>
        <span class="ver-mas">Ver más <i class="fa-solid fa-chevron-right"></i></span>
      </a>
    </div>
  </div>
</section>

<!-- ===== PATOLOGIAS ===== -->
<section class="section section-alt" id="patologias">
  <div class="container">
    <p class="eyebrow center">PATOLOGÍAS QUE TRATAMOS</p>
    <ul class="pathology-list">
      <li><a href="#contacto"><i class="fa-solid fa-droplet"></i><span>Grasa localizada</span><i class="fa-solid fa-chevron-right arrow"></i></a></li>
      <li><a href="#contacto"><i class="fa-solid fa-water"></i><span>Celulitis</span><i class="fa-solid fa-chevron-right arrow"></i></a></li>
      <li><a href="#contacto"><i class="fa-solid fa-arrow-down-long"></i><span>Flacidez</span><i class="fa-solid fa-chevron-right arrow"></i></a></li>
      <li><a href="#contacto"><i class="fa-solid fa-grip-lines"></i><span>Estrías</span><i class="fa-solid fa-chevron-right arrow"></i></a></li>
      <li><a href="#contacto"><i class="fa-solid fa-band-aid"></i><span>Cicatrices</span><i class="fa-solid fa-chevron-right arrow"></i></a></li>
      <li><a href="#contacto"><i class="fa-solid fa-face-smile-beam"></i><span>Rejuvenecimiento facial</span><i class="fa-solid fa-chevron-right arrow"></i></a></li>
    </ul>
  </div>
</section>

<!-- ===== SEGUIMIENTO + FORM ===== -->
<section class="section section-alt" id="nosotros">
  <div class="container two-col">
    <div class="follow-up-box">
      <h3 class="center">EVALUACI&Oacute;N Y SEGUIMIENTO</h3>
      <div class="follow-up-photos">
        <figure>
          <img class="site-photo" src="<?php echo esc_url( get_template_directory_uri() . '/images/evaluacion.jpg' ); ?>" alt="Profesional conversando con una paciente" loading="lazy" decoding="async">
          <figcaption>Evaluaci&oacute;n inicial</figcaption>
        </figure>
        <figure>
          <img class="site-photo" src="<?php echo esc_url( get_template_directory_uri() . '/images/seguimiento.jpg' ); ?>" alt="Profesional mostrando el plan de seguimiento en una tableta" loading="lazy" decoding="async">
          <figcaption>Control posterior</figcaption>
        </figure>
      </div>
      <p class="center muted">Im&aacute;genes ilustrativas generadas con IA.</p>
    </div>

    <div class="form-box" id="contacto">
      <h3>AGENDA TU EVALUACIÓN</h3>
      <p class="muted">Cuéntanos sobre ti y te ayudaremos a encontrar el tratamiento ideal para tus objetivos.</p>

      <form class="appointment-form" id="appointmentForm">
        <div class="form-row">
          <input type="text" name="nombre" placeholder="Nombre completo" required>
          <input type="tel" name="telefono" placeholder="Teléfono / WhatsApp" required>
        </div>
        <div class="form-row">
          <input type="email" name="email" placeholder="Correo electrónico" required>
          <select name="tratamiento" required>
            <option value="" disabled selected>Tratamiento de interés</option>
            <option value="hidrolipoclapsia">Hidrolipoclapsia</option>
            <option value="criolipolisis">Criolipólisis</option>
            <option value="mesoterapia">Mesoterapia</option>
            <option value="otro">Otro / No estoy seguro</option>
          </select>
        </div>
        <textarea name="mensaje" placeholder="Mensaje (opcional)" rows="3"></textarea>
        <button type="submit" class="btn btn-primary btn-block">Solicitar Evaluación <i class="fa-solid fa-arrow-right"></i></button>
      </form>
    </div>
  </div>
</section>

<?php
get_footer();
