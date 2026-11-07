<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doce & Fresco | 100% Natural Juice Manufacturer</title>
  <meta name="description" content="Doce & Fresco - Official manufacturer of 100% pure, fresh cold-pressed juices from orchard to bottle.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

  <!-- Hero Section Only -->
  <section class="hero-section" id="home">
    <div class="container hero-grid">
      
      <!-- Left side spacer allowing the background visual (juice bottles & fresh fruits) to remain fully visible -->
      <div class="hero-media-spacer" aria-hidden="true"></div>

      <!-- Right Side: Company Name, Intro & Highlights in Logo Colors -->
      <div class="hero-content">
        <div class="pill-badge">
          <i data-lucide="award"></i> Artisanal Juice Manufacturer
        </div>
        
        <h1 class="hero-title">
          <span class="highlight-red">Doce</span> <span class="highlight-lime">&</span> <span class="highlight-green">Fresco</span>
        </h1>
        
        <p class="hero-subtitle">
          From sun-drenched orchards directly to your glass. We manufacture 100% pure, freshly cold-pressed fruit juices with uncompromised flavor, natural vitamins, and farm freshness.
        </p>

        <div class="hero-features-list">
          <div class="feature-item">
            <div class="feature-icon"><i data-lucide="check"></i></div>
            <span>Cold-Pressed & Flash Chilled Daily</span>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i data-lucide="check"></i></div>
            <span>Locally Sourced Sustainable Orchard Fruits</span>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i data-lucide="check"></i></div>
            <span>Zero Added Sugars, Concentrates or Additives</span>
          </div>
        </div>

        <div class="hero-actions">
          <a href="mailto:contato@doceefresco.com" class="btn btn-primary">
            <i data-lucide="mail"></i> Contact Us
          </a>
          <a href="tel:+351210987654" class="btn btn-secondary">
            <i data-lucide="phone"></i> +351 210 987 654
          </a>
        </div>

        <div class="hero-stats-row">
          <div class="stat-box">
            <h3>100%</h3>
            <p>Pure Fruit Juice</p>
          </div>
          <div class="stat-divider"></div>
          <div class="stat-box">
            <h3 style="color:var(--brand-green);">12+</h3>
            <p>Signature Flavors</p>
          </div>
          <div class="stat-divider"></div>
          <div class="stat-box">
            <h3 style="color:var(--brand-lime-hover);">50k+</h3>
            <p>Bottles / Month</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
