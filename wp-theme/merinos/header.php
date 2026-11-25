<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Hidrolipoclapsia: reducción de grasa localizada sin cirugía, sin anestesia y mínimamente invasiva. Agenda tu evaluación con Merinos.cl.">

<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() . '/images/favicon-32.png' ); ?>">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url( get_template_directory_uri() . '/images/favicon-192.png' ); ?>">
<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/images/apple-touch-icon.png' ); ?>">

<meta property="og:type" content="website">
<meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:description" content="Reducción de grasa localizada sin cirugía, sin anestesia y mínimamente invasiva.">
<meta property="og:locale" content="es_CL">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ===== HEADER ===== -->
<header class="site-header" id="header">
  <div class="container header-inner">
    <a href="#inicio" class="logo" aria-label="Meriños, Armonía y Spa"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo-merinos.png' ); ?>" alt="Meriños, Armonía y Spa"></a>

    <nav class="main-nav" id="mainNav">
      <ul>
        <li><a href="#inicio" class="active">INICIO</a></li>
        <li class="has-dropdown">
          <a href="#tratamientos">TRATAMIENTOS <i class="fa-solid fa-chevron-down"></i></a>
          <ul class="dropdown">
            <li><a href="#hidrolipoclapsia">Hidrolipoclapsia</a></li>
            <li><a href="#criolipolisis">Criolipólisis</a></li>
            <li><a href="#mesoterapia">Mesoterapia</a></li>
          </ul>
        </li>
        <li><a href="#nosotros">NOSOTROS</a></li>
        <li><a href="#resultados">RESULTADOS</a></li>
        <li><a href="#faq">PREGUNTAS FRECUENTES</a></li>
        <li><a href="#contacto">CONTACTO</a></li>
      </ul>
    </nav>

    <a href="#contacto" class="btn btn-primary btn-header">
      <i class="fa-regular fa-calendar-check"></i> Agendar evaluación
    </a>

    <button class="nav-toggle" id="navToggle" aria-label="Abrir menú">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>
