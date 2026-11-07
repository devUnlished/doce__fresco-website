<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <title>@yield('title', 'Doce & Fresco | Sumo 100% Natural')</title>
  <meta name="description" content="@yield('meta_description', 'Doce & Fresco - O sabor da nossa terra, fresco na sua garrafa.')">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>
    *, *::before, *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #fbf9f4;
      color: #121e15;
      line-height: 1.65;
      overflow-x: hidden;
    }

    /* Navbar with White Bottom Border Line */
    .navbar {
      position: sticky;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 100;
      background: rgba(255, 255, 255, 0.88);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 2px solid #ffffff;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
      padding: 1rem 0;
      transition: all 0.3s ease;
    }

    .nav-container {
      width: 100%;
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 2.5rem;
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

    .brand-word-doce { color: #c91924; }
    .brand-word-amp { color: #7cb342; font-weight: 700; font-size: 1.35rem; }
    .brand-word-fresco { color: #1b5e20; }

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
    }

    /* Subpage Header Banner */
    .page-hero {
      background: radial-gradient(circle at 80% 20%, rgba(201, 25, 36, 0.08) 0%, rgba(124, 179, 66, 0.08) 40%, #fbf9f4 85%);
      padding: 4.5rem 0 3.5rem;
      border-bottom: 1px solid rgba(0, 0, 0, 0.06);
      text-align: center;
    }

    .page-hero-container {
      max-width: 900px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }

    .page-tag {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      font-family: 'Outfit', sans-serif;
      font-size: 0.82rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      color: #c91924;
      background: rgba(201, 25, 36, 0.08);
      padding: 0.35rem 0.9rem;
      border-radius: 9999px;
      margin-bottom: 1.25rem;
    }

    .page-title {
      font-family: 'Outfit', sans-serif;
      font-size: clamp(2.4rem, 4.5vw, 3.6rem);
      font-weight: 900;
      color: #121e15;
      line-height: 1.15;
      letter-spacing: -0.025em;
      margin-bottom: 1.1rem;
    }

    .page-desc {
      font-size: 1.15rem;
      color: #4a5d4e;
      line-height: 1.7;
    }

    .content-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 4.5rem 2rem;
    }

    /* Mobile Drawer */
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
        background: rgba(255, 255, 255, 0.98);
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
    }
  </style>
  @yield('extra_css')
</head>
<body>
  <!-- Shared Navbar with White Bottom Border Line -->
  <header class="navbar" id="navbar">
    <div class="nav-container">
      <a href="{{ route('home') }}" class="brand-logo-wrap" aria-label="Doce & Fresco">
        <span class="brand-title">
          <span class="brand-word-doce">Doce</span>
          <span class="brand-word-amp">&</span>
          <span class="brand-word-fresco">Fresco</span>
        </span>
      </a>

      <nav class="nav-links" id="navMenu">
        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Início</a>
        <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Sobre Nós</a>
        <a href="{{ route('juices') }}" class="nav-link {{ request()->routeIs('juices') ? 'active' : '' }}">Nossos Sumos</a>
        <a href="{{ route('origin') }}" class="nav-link {{ request()->routeIs('origin') ? 'active' : '' }}">Origem</a>
        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contacto</a>
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

  <main>
    @yield('content')
  </main>

  <!-- Shared Footer -->
  <footer class="footer">
    <div class="container footer-content">
      <div class="footer-brand-col">
        <a href="{{ route('home') }}" class="brand-logo-wrap">
          <span class="brand-title" style="color: #ffffff;">
            <span class="brand-word-doce">Doce</span>
            <span class="brand-word-amp">&</span>
            <span style="color: #ffffff;">Fresco</span>
          </span>
        </a>
        <p class="footer-text">
          O sabor da nossa terra, fresco na sua garrafa. Fabricantes dedicados de sumos 100% naturais prensados a frio, diretamente do pomar.
        </p>
      </div>

      <div class="footer-links-col">
        <h4>Navegação</h4>
        <ul>
          <li><a href="{{ route('home') }}">Início</a></li>
          <li><a href="{{ route('about') }}">Sobre Nós</a></li>
          <li><a href="{{ route('juices') }}">Nossos Sumos</a></li>
          <li><a href="{{ route('origin') }}">Origem</a></li>
          <li><a href="{{ route('contact') }}">Contacto</a></li>
        </ul>
      </div>

      <div class="footer-links-col">
        <h4>Compromisso</h4>
        <ul>
          <li><span>100% Pura Fruta</span></li>
          <li><span>Prensagem a Frio</span></li>
          <li><span>Sem Açúcares Adicionados</span></li>
          <li><span>Embalagens Sustentáveis</span></li>
        </ul>
      </div>

      <div class="footer-links-col">
        <h4>Contacto</h4>
        <ul>
          <li><span>Email: contacto@doceefresco.com</span></li>
          <li><span>Horário: Seg - Sex: 08:00 - 18:00</span></li>
          <li><span>Sumos 100% Naturais</span></li>
        </ul>
      </div>
    </div>

    <div class="container footer-bottom">
      <p>&copy; 2026 Doce & Fresco. Todos os direitos reservados.</p>
      <p>O sabor da nossa terra, fresco na sua garrafa.</p>
    </div>
  </footer>

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
  @yield('extra_js')
</body>
</html>
