<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <title>Doce & Fresco | Sumo 100% Natural</title>
  <meta name="description" content="Doce & Fresco - O sabor da nossa terra, fresco na sua garrafa.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      width: 100%;
      min-height: 100vh;
      min-height: 100dvh;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      background-color: #f1e6d3;
      background: radial-gradient(circle at 75% 50%, #fbf6ec 0%, #f2e7d5 55%, #eae0ce 100%);
      font-family: 'Outfit', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    /* ==========================================================================
       Navigation Bar with White Bottom Border Line
       ========================================================================== */
    .navbar {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 100;
      background: rgba(255, 255, 255, 0.35);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 2px solid #ffffff;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
      padding: 1.1rem 0;
      transition: all 0.3s ease;
    }

    .nav-container {
      width: 100%;
      max-width: 1600px;
      margin: 0 auto;
      padding: 0 3.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .brand-logo-wrap {
      display: inline-flex;
      align-items: center;
      text-decoration: none;
      transition: transform 0.25s ease;
    }

    .brand-logo-wrap:hover {
      transform: scale(1.03);
    }

    .brand-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.65rem;
      font-weight: 900;
      letter-spacing: -0.03em;
      display: inline-flex;
      align-items: center;
      gap: 0.3rem;
      line-height: 1;
    }

    .brand-word-doce {
      color: #c91924;
    }

    .brand-word-amp {
      color: #7cb342;
      font-weight: 700;
      font-size: 1.35rem;
    }

    .brand-word-fresco {
      color: #1b5e20;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 2rem;
    }

    .nav-link {
      font-family: 'Outfit', sans-serif;
      font-size: 1rem;
      font-weight: 700;
      color: #121e15;
      text-decoration: none;
      position: relative;
      padding: 0.35rem 0;
      transition: color 0.2s ease;
    }

    .nav-link:hover, .nav-link.active {
      color: #c91924;
    }

    .nav-link.active::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 100%;
      height: 2.5px;
      background: linear-gradient(90deg, #c91924, #7cb342);
      border-radius: 2px;
    }

    .mobile-toggle {
      display: none;
      background: rgba(255, 255, 255, 0.7);
      border: 1px solid #ffffff;
      border-radius: 10px;
      padding: 0.5rem;
      cursor: pointer;
      color: #121e15;
      transition: background 0.2s ease;
    }

    .mobile-toggle:hover {
      background: rgba(255, 255, 255, 0.95);
    }

    /* Hero Section with Responsive Background */
    .hero-section {
      position: relative;
      width: 100%;
      min-height: 100vh;
      min-height: 100dvh;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      overflow: hidden;
      background-image: url("{{ asset('images/Doce%26fresc_hero%20section.jpeg') }}?v={{ file_exists(public_path('images/Doce&fresc_hero section.jpeg')) ? filemtime(public_path('images/Doce&fresc_hero section.jpeg')) : '2' }}");
      background-size: cover;
      background-position: left center;
      background-repeat: no-repeat;
      padding-top: 5rem;
    }

    /* Far-Right Container */
    .hero-container {
      width: 100%;
      max-width: 1600px;
      margin: 0 auto;
      padding: 2.5rem 3.5rem;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      position: relative;
      z-index: 2;
    }

    /* Heading Box positioned at the Far Right */
    .hero-heading-box {
      max-width: 1100px;
      text-align: right;
      transform: translateY(-2.75rem);
      transition: transform 0.3s ease;
    }

    /* Gradient-blended headline */
    .hero-heading {
      font-family: 'Outfit', sans-serif;
      font-size: clamp(5.0rem, 8.5vw, 8.5rem);
      font-weight: 900;
      line-height: 1.0;
      letter-spacing: -0.035em;
      text-wrap: balance;
    }

    /* "The flavor of our land," in warm sun-ripened orchard tones */
    .phrase-land {
      display: block;
      background: linear-gradient(135deg, #c91924 0%, #e65100 55%, #f57c00 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      filter: drop-shadow(0 2px 14px rgba(255, 255, 255, 0.9));
    }

    /* "fresh in your bottle." in vibrant cold-pressed botanical green tones */
    .phrase-fresh {
      display: block;
      margin-top: 0.85rem;
      background: linear-gradient(135deg, #7cb342 0%, #2e7d32 60%, #1b5e20 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      filter: drop-shadow(0 2px 14px rgba(255, 255, 255, 0.9));
    }

    /* ==========================================================================
       Responsive Optimization (Mobile & Tablets)
       ========================================================================== */
    @media (max-width: 1024px) {
      .nav-container {
        padding: 0 2rem;
      }
      .nav-links {
        gap: 1.35rem;
      }
      .hero-container {
        padding: 2rem 1.5rem;
      }
      .hero-heading-box {
        max-width: 850px;
        transform: translateY(-1.75rem);
      }
      .hero-heading {
        font-size: clamp(4.5rem, 8.8vw, 6.5rem);
        line-height: 1.02;
      }
    }

    @media (max-width: 768px) {
      .navbar {
        padding: 0.85rem 0;
      }

      .nav-container {
        padding: 0 1.25rem;
      }

      .mobile-toggle {
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .nav-links {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        flex-direction: column;
        align-items: flex-start;
        background: rgba(255, 255, 255, 0.96);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-bottom: 2px solid #ffffff;
        padding: 1.5rem 1.5rem 2rem 1.5rem;
        gap: 1.1rem;
        box-shadow: 0 16px 36px rgba(0, 0, 0, 0.1);
      }

      .nav-links.active {
        display: flex;
      }

      .hero-section {
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
        padding: 5.5rem 1rem 3rem 1rem;
        background-position: 28% 25%;
        background-size: cover;
      }

      .hero-container {
        padding: 0;
        justify-content: center;
        width: 100%;
      }

      .hero-heading-box {
        max-width: 100%;
        width: 100%;
        text-align: right;
        background: rgba(255, 255, 255, 0.78);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1.5px solid rgba(255, 255, 255, 0.9);
        border-radius: 22px;
        padding: 1.75rem 1.5rem;
        box-shadow: 0 16px 36px -8px rgba(18, 30, 21, 0.14);
        transform: translateY(-1rem);
        margin-bottom: 1.5rem;
      }

      .hero-heading {
        font-size: clamp(3.6rem, 10.5vw, 5.2rem);
        line-height: 1.05;
      }

      .phrase-fresh {
        margin-top: 0.6rem;
      }
    }

    @media (max-width: 480px) {
      .hero-heading-box {
        padding: 1.25rem 1rem;
        margin-bottom: 1.25rem;
        transform: translateY(-0.5rem);
      }
      .hero-heading {
        font-size: clamp(3.0rem, 11vw, 3.85rem);
        line-height: 1.05;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation Bar with White Bottom Border Line -->
  <header class="navbar" id="navbar">
    <div class="nav-container">
      <a href="/" class="brand-logo-wrap" aria-label="Doce & Fresco">
        <span class="brand-title">
          <span class="brand-word-doce">Doce</span>
          <span class="brand-word-amp">&</span>
          <span class="brand-word-fresco">Fresco</span>
        </span>
      </a>

      <nav class="nav-links" id="navMenu">
        <a href="#home" class="nav-link active">Início</a>
        <a href="#sobre" class="nav-link">Sobre Nós</a>
        <a href="#sumos" class="nav-link">Nossos Sumos</a>
        <a href="#origem" class="nav-link">Origem</a>
        <a href="#contacto" class="nav-link">Contacto</a>
      </nav>

      <button class="mobile-toggle" id="mobileToggle" aria-label="Abrir Menu" aria-expanded="false">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
      </button>
    </div>
  </header>

  <!-- Home Page Hero Section Only -->
  <section class="hero-section" id="home">
    <div class="hero-container">
      <div class="hero-heading-box">
        <h1 class="hero-heading">
          <span class="phrase-land">O sabor da<br>nossa terra,</span>
          <span class="phrase-fresh">fresco na<br>sua garrafa.</span>
        </h1>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var toggle = document.getElementById('mobileToggle');
      var menu = document.getElementById('navMenu');
      if (toggle && menu) {
        toggle.addEventListener('click', function() {
          menu.classList.toggle('active');
          var isOpen = menu.classList.contains('active');
          toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
      }
    });
  </script>
</body>
</html>
