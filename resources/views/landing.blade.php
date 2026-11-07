<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <title>Doce & Fresco</title>
  <meta name="description" content="Doce & Fresco - 100% Natural Juice">
  <style>
    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    html, body {
      width: 100%;
      height: 100%;
      min-height: 100vh;
      min-height: 100dvh;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      background-color: #f1e6d3;
      background: radial-gradient(circle at center, #fbf7ee 0%, #f1e6d3 100%);
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }
    .hero-section {
      width: 100%;
      height: 100%;
      min-height: 100vh;
      min-height: 100dvh;
      margin: 0;
      padding: 0;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }
    .hero-bg-image {
      width: 100%;
      height: 100%;
      max-width: 100vw;
      max-height: 100vh;
      max-height: 100dvh;
      object-fit: contain;
      object-position: center;
      display: block;
      transition: all 0.3s ease;
    }

    /* On standard widescreen desktop displays, allow edge-to-edge fill */
    @media (min-width: 1024px) and (min-aspect-ratio: 16/10) {
      .hero-bg-image {
        object-fit: cover;
      }
    }

    /* On mobile devices and portrait screens, reduce image size so all content is 100% visible */
    @media (max-width: 1023px), (max-aspect-ratio: 16/10) {
      .hero-section {
        padding: 0.75rem;
      }
      .hero-bg-image {
        object-fit: contain;
        width: 100%;
        height: auto;
        max-height: 95vh;
        max-height: 95dvh;
      }
    }
  </style>
</head>
<body>
  <!-- Home Page Hero Section Only -->
  <section class="hero-section" id="home">
    <img 
      src="{{ asset('images/Doce%26fresc_hero%20section.jpeg') }}" 
      alt="Doce & Fresco Hero Section" 
      class="hero-bg-image"
    />
  </section>
</body>
</html>
