<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <title>Doce & Fresco | 100% Natural Juice</title>
  <meta name="description" content="Doce & Fresco - The flavor of our land, fresh in your bottle.">
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
      background-image: url("{{ asset('images/Doce%26fresc_hero%20section.jpeg') }}");
      background-size: cover;
      background-position: left center;
      background-repeat: no-repeat;
    }

    /* Far-Right Container */
    .hero-container {
      width: 100%;
      max-width: 1440px;
      margin: 0 auto;
      padding: 3rem 4rem;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      position: relative;
      z-index: 2;
    }

    /* Heading Box positioned at the Far Right */
    .hero-heading-box {
      max-width: 680px;
      text-align: right;
      transform: translateY(-2.75rem);
      transition: transform 0.3s ease;
    }

    /* Gradient-blended headline */
    .hero-heading {
      font-family: 'Outfit', sans-serif;
      font-size: clamp(3.15rem, 5.2vw, 4.85rem);
      font-weight: 900;
      line-height: 1.12;
      letter-spacing: -0.025em;
      text-wrap: balance;
    }

    /* "The flavor of our land," in warm sun-ripened orchard tones */
    .phrase-land {
      display: block;
      background: linear-gradient(135deg, #c91924 0%, #e65100 55%, #f57c00 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      filter: drop-shadow(0 2px 12px rgba(255, 255, 255, 0.85));
    }

    /* "fresh in your bottle." in vibrant cold-pressed botanical green tones */
    .phrase-fresh {
      display: block;
      margin-top: 0.35rem;
      background: linear-gradient(135deg, #7cb342 0%, #2e7d32 60%, #1b5e20 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      filter: drop-shadow(0 2px 12px rgba(255, 255, 255, 0.85));
    }

    /* ==========================================================================
       Responsive Optimization (Mobile & Tablets)
       ========================================================================== */
    @media (max-width: 1024px) {
      .hero-container {
        padding: 2.5rem 2rem;
      }
      .hero-heading-box {
        max-width: 580px;
        transform: translateY(-2rem);
      }
      .hero-heading {
        font-size: clamp(2.85rem, 5.5vw, 4.05rem);
      }
    }

    @media (max-width: 768px) {
      .hero-section {
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
        padding: 1.5rem 1rem 3rem 1rem;
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
        font-size: clamp(2.45rem, 7.5vw, 3.15rem);
        line-height: 1.15;
      }
    }

    @media (max-width: 480px) {
      .hero-heading-box {
        padding: 1.4rem 1.15rem;
        margin-bottom: 1.25rem;
        transform: translateY(-0.5rem);
      }
      .hero-heading {
        font-size: 2.45rem;
        line-height: 1.15;
      }
    }
  </style>
</head>
<body>
  <!-- Home Page Hero Section Only -->
  <section class="hero-section" id="home">
    <div class="hero-container">
      <div class="hero-heading-box">
        <h1 class="hero-heading">
          <span class="phrase-land">The flavor of our land,</span>
          <span class="phrase-fresh">fresh in your bottle.</span>
        </h1>
      </div>
    </div>
  </section>
</body>
</html>
