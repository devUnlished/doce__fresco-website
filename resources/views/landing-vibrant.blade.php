<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doce e Fresco | 100% Natural Juice Manufacturer</title>
  <meta name="description" content="Doce e Fresco - Premium manufacturer of 100% natural, fresh-pressed fruit juices from orchard to bottle.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

  <!-- Top Announcement Bar -->
  <div class="top-bar">
    <div class="container top-bar-content">
      <span><i data-lucide="sparkles"></i> Pure fruit excellence • 100% natural, cold-pressed & fresh daily</span>
      <div class="top-bar-contact">
        <a href="tel:+351210987654"><i data-lucide="phone"></i> +351 210 987 654</a>
        <a href="mailto:contato@doceefresco.com"><i data-lucide="mail"></i> contato@doceefresco.com</a>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="{{ route('home') }}" class="brand-logo">
        <div class="logo-symbol">
          <i data-lucide="citrus"></i>
        </div>
        <div class="logo-text">
          <span class="logo-name">Doce e Fresco</span>
          <span class="logo-tagline">Indústria de Sucos Naturais</span>
        </div>
      </a>

      <nav class="nav-links" id="navMenu">
        <a href="#home" class="nav-link active">Home</a>
        <a href="#about" class="nav-link">About Us</a>
        <a href="#flavors" class="nav-link">Our Juices</a>
        <a href="#sourcing" class="nav-link">Fresh Fruits</a>
        <a href="#events" class="nav-link">Events</a>
        <a href="#contact" class="btn btn-primary-nav">Inquire / Contact</a>
      </nav>

      <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Menu">
        <i data-lucide="menu" id="menuIcon"></i>
      </button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero-section" id="home">
    <div class="container hero-grid">
      
      <!-- Left Side: Animated Glass of juice with fresh fruits background & pour visual -->
      <div class="hero-media-wrapper">
        <div class="juice-ambient-glow" id="heroJuiceGlow"></div>

        <div class="hero-image-card">
          <!-- Floating top badge -->
          <div class="floating-fruit-badge">
            <i data-lucide="leaf"></i>
            <span id="heroTopBadge">100% Natural Pura</span>
          </div>

          <!-- Main juice glass composition with pour start frame & liquid animation -->
          <div class="juice-composition-container">
            <img 
              id="heroJuiceImg"
              src="{{ asset('images/orange_juice_pour.jpg') }}" 
              alt="Fresh orange juice pouring into glass with orchard background and fresh fruits" 
              class="hero-main-img"
              loading="eager"
            />
            
            <!-- Animated Liquid Slosh Wave Overlay -->
            <div class="juice-wave-layer" id="heroJuiceWave"></div>

            <!-- Animated Effervescent Rising Bubbles -->
            <div class="juice-bubbles-container">
              <div class="bubble bubble-1"></div>
              <div class="bubble bubble-2"></div>
              <div class="bubble bubble-3"></div>
              <div class="bubble bubble-4"></div>
              <div class="bubble bubble-5"></div>
            </div>
          </div>

          <!-- Secondary floating visual cards with animation -->
          <div class="floating-fruit-card top-right">
            <img id="heroFruitImg" src="https://images.unsplash.com/photo-1557800636-894a64c1696f?auto=format&fit=crop&w=300&q=80" alt="Fresh fruit" />
            <div class="float-info">
              <span>Sun-Ripened</span>
              <strong id="heroFruitName">Valencia Oranges</strong>
            </div>
          </div>

          <div class="floating-fruit-card bottom-left">
            <div class="stat-circle">
              <span>0%</span>
            </div>
            <div class="float-info">
              <span>Preservatives</span>
              <strong>Only Real Fruit</strong>
            </div>
          </div>
        </div>

        <!-- Interactive Juice Flavor Transformer Bar -->
        <div class="hero-flavor-selector">
          <div class="flavor-selector-label">
            <i data-lucide="sparkles"></i> Experience Blends:
          </div>
          <div class="flavor-buttons">
            <button class="flavor-btn active" data-flavor="orange">
              <span class="flavor-dot dot-orange"></span> Orange Splash
            </button>
            <button class="flavor-btn" data-flavor="berry">
              <span class="flavor-dot dot-berry"></span> Berry Crown
            </button>
            <button class="flavor-btn" data-flavor="mango">
              <span class="flavor-dot dot-mango"></span> Tropical Mango
            </button>
            <button class="flavor-btn" data-flavor="green">
              <span class="flavor-dot dot-green"></span> Green Vitality
            </button>
          </div>
        </div>
      </div>

      <!-- Right Side: Company Name & Value Proposition -->
      <div class="hero-content">
        <div class="pill-badge">
          <i data-lucide="award"></i> Artisanal Juice Manufacturer
        </div>
        
        <h1 class="hero-title">
          Doce e <span class="highlight-text">Fresco</span>
        </h1>
        
        <p class="hero-subtitle">
          From sun-drenched orchards directly to your glass. We craft and manufacture 100% pure, freshly-squeezed fruit juices with unmatched flavor, vitality, and purity.
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
            <span>Zero Added Sugars, Concentrates or Preservatives</span>
          </div>
        </div>

        <div class="hero-actions">
          <a href="#flavors" class="btn btn-primary">
            Explore Juice Blends <i data-lucide="arrow-down"></i>
          </a>
          <a href="#contact" class="btn btn-secondary">
            Wholesale & Partnerships
          </a>
        </div>

        <div class="hero-stats-row">
          <div class="stat-box">
            <h3>100%</h3>
            <p>Pure Fruit Juice</p>
          </div>
          <div class="stat-divider"></div>
          <div class="stat-box">
            <h3>12+</h3>
            <p>Signature Flavors</p>
          </div>
          <div class="stat-divider"></div>
          <div class="stat-box">
            <h3>50k+</h3>
            <p>Bottles Crafted / Mo</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Value Pillars -->
  <section class="section pillars-section" id="about">
    <div class="container">
      <div class="section-header text-center">
        <span class="sub-heading">Our Manufacturing Philosophy</span>
        <h2 class="section-title">Pure, Honest & Freshly Made</h2>
        <p class="section-desc">At Doce e Fresco, we believe juice should taste like the fruit on the tree. Here is how we produce our juices daily.</p>
      </div>

      <div class="pillars-grid">
        <div class="pillar-card">
          <div class="pillar-icon bg-orange">
            <i data-lucide="apple"></i>
          </div>
          <h3>Hand-Picked Fruit Selection</h3>
          <p>We source only top-grade, naturally ripened fruit from trusted partner farms to guarantee peak sweetness and nutrient density.</p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon bg-green">
            <i data-lucide="droplet"></i>
          </div>
          <h3>Cold Extraction Process</h3>
          <p>Our gentle cold-press manufacturing preserves essential vitamins, active enzymes, and the vivid, authentic flavor of raw fruits.</p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon bg-yellow">
            <i data-lucide="shield-check"></i>
          </div>
          <h3>No Additives or Fillers</h3>
          <p>Never diluted with water, never sweetened with artificial sugar, and completely free of chemical preservatives or concentrates.</p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon bg-red">
            <i data-lucide="truck"></i>
          </div>
          <h3>Commercial Distribution</h3>
          <p>Delivered chilled directly to restaurants, cafes, hotels, catering partners, and specialty retailers in temperature-controlled vehicles.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Flavors Showcase (Informational showcase, non-ecommerce) -->
  <section class="section flavors-section" id="flavors">
    <div class="container">
      <div class="section-header text-center">
        <span class="sub-heading">Manufactured with Care</span>
        <h2 class="section-title">Our Signature Juice Varieties</h2>
        <p class="section-desc">Discover our range of cold-pressed, handcrafted juices formulated for taste, wellness, and hydration.</p>
      </div>

      <div class="flavors-grid">
        @foreach($flavors as $flavor)
          <div class="flavor-card">
            <div class="flavor-img-wrap">
              <img src="{{ $flavor['image'] }}" alt="{{ $flavor['name'] }}" loading="lazy" />
              <span class="flavor-tag {{ $flavor['tag_class'] }}">{{ $flavor['tag'] }}</span>
            </div>
            <div class="flavor-content">
              <h3>{{ $flavor['name'] }}</h3>
              <p class="flavor-ingredients">{{ $flavor['ingredients'] }}</p>
              <p class="flavor-desc">{{ $flavor['desc'] }}</p>
              <div class="flavor-meta">
                <span><i data-lucide="sparkle"></i> {{ $flavor['meta'] }}</span>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div class="custom-batch-callout">
        <div class="callout-text">
          <h3>Need Custom Formulations or Bulk Bottles?</h3>
          <p>We work with hospitality, grocery chains, and corporate brands to create bespoke juice recipes and high-volume batch bottling.</p>
        </div>
        <a href="#contact" class="btn btn-light">Contact Our Production Team</a>
      </div>
    </div>
  </section>

  <!-- Sourcing & Fruit Gallery -->
  <section class="section sourcing-section" id="sourcing">
    <div class="container">
      <div class="sourcing-layout">
        <div class="sourcing-content">
          <span class="sub-heading">Ethical & Quality Sourcing</span>
          <h2 class="section-title">The Real Fruit Behind Doce e Fresco</h2>
          <p>We source non-GMO, sun-grown fruits picked at the peak of ripeness. Our relationships with regional family growers ensure sustainable farming practices and fruit that never needs artificial sugar enhancements.</p>
          
          <ul class="sourcing-points">
            <li>
              <i data-lucide="sun"></i>
              <div>
                <strong>Orchard-Ripened Harvest</strong>
                <span>Harvested when naturally sweetest to eliminate any need for added sweeteners.</span>
              </div>
            </li>
            <li>
              <i data-lucide="recycle"></i>
              <div>
                <strong>Zero Waste Fruit Pulp Program</strong>
                <span>All fruit peels and organic pulp are composted and donated back to local organic farmers.</span>
              </div>
            </li>
            <li>
              <i data-lucide="badge-percent"></i>
              <div>
                <strong>Strict Quality & Hygiene Standards</strong>
                <span>Rigorous washing with ozonated water, cold-extraction, and sterile bottling within hours of harvest.</span>
              </div>
            </li>
          </ul>
        </div>

        <div class="sourcing-gallery-grid">
          @foreach($fruits as $fruit)
            <div class="gallery-item">
              <img src="{{ $fruit['image'] }}" alt="{{ $fruit['name'] }}" loading="lazy" />
              <span class="gallery-caption">{{ $fruit['name'] }}</span>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <!-- Events & Community Section -->
  <section class="section events-section" id="events">
    <div class="container">
      <div class="section-header text-center">
        <span class="sub-heading">Community & Gatherings</span>
        <h2 class="section-title">Events & Tastings</h2>
        <p class="section-desc">We bring the fresh juice experience to festivals, farmer markets, wellness retreats, and private corporate events.</p>
      </div>

      <div class="events-grid">
        @foreach($events as $event)
          <div class="event-card">
            <div class="event-image">
              <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" loading="lazy" />
              <div class="event-badge">{{ $event['badge'] }}</div>
            </div>
            <div class="event-body">
              <div class="event-date">
                <i data-lucide="{{ $event['date_icon'] }}"></i> {{ $event['date_info'] }}
              </div>
              <h3>{{ $event['title'] }}</h3>
              <p>{{ $event['desc'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Wholesale / Contact Section -->
  <section class="section contact-section" id="contact">
    <div class="container">
      <div class="contact-grid">
        
        <div class="contact-info">
          <span class="sub-heading">Partner With Us</span>
          <h2 class="section-title">Get in Touch with Doce e Fresco</h2>
          <p>Are you a cafe, restaurant, supermarket, or event organizer interested in offering genuine, 100% natural juices? Contact our manufacturing team today.</p>
          
          <div class="info-blocks">
            <div class="info-block">
              <div class="info-icon"><i data-lucide="map-pin"></i></div>
              <div>
                <strong>Manufacturing & Bottling Facility</strong>
                <p>Avenida dos Pomares, Nº 140<br>Zona Industrial Agroalimentar, Portugal</p>
              </div>
            </div>

            <div class="info-block">
              <div class="info-icon"><i data-lucide="phone-call"></i></div>
              <div>
                <strong>Direct Phone / WhatsApp</strong>
                <p>+351 210 987 654 / +351 912 345 678</p>
              </div>
            </div>

            <div class="info-block">
              <div class="info-icon"><i data-lucide="mail"></i></div>
              <div>
                <strong>Wholesale & Inquiries Email</strong>
                <p>contato@doceefresco.com</p>
              </div>
            </div>

            <div class="info-block">
              <div class="info-icon"><i data-lucide="clock"></i></div>
              <div>
                <strong>Production & Office Hours</strong>
                <p>Monday – Friday: 07:00 – 17:00 (Fresh Pressing Starts Daily at 5am)</p>
              </div>
            </div>
          </div>
        </div>

        <div class="contact-form-wrapper">
          <div class="form-card">
            <h3>Send Us a Message</h3>
            <p>Tell us about your business or event inquiry.</p>
            
            @if(session('success'))
              <div class="alert-success">
                <i data-lucide="check-circle-2"></i>
                <h4>Inquiry Sent Successfully!</h4>
                <p>{{ session('success') }}</p>
              </div>
            @endif

            @if($errors->any())
              <div style="background:#fee2e2; color:#dc2626; padding:1rem; border-radius:8px; margin-bottom:1rem; font-size:0.9rem;">
                <ul style="list-style:disc; margin-left:1.2rem;">
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form action="{{ route('inquire.submit') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="e.g. Maria Silva">
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="name@business.com">
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+351 ...">
                </div>
              </div>

              <div class="form-group">
                <label for="inquiryType">Inquiry Type</label>
                <select id="inquiryType" name="inquiryType">
                  <option value="wholesale" {{ old('inquiryType') == 'wholesale' ? 'selected' : '' }}>Wholesale Distribution (Retail / Cafe / Restaurant)</option>
                  <option value="events" {{ old('inquiryType') == 'events' ? 'selected' : '' }}>Event Catering & Juice Bar Service</option>
                  <option value="custom" {{ old('inquiryType') == 'custom' ? 'selected' : '' }}>Custom Recipe / Private Label</option>
                  <option value="general" {{ old('inquiryType') == 'general' ? 'selected' : '' }}>General Information</option>
                </select>
              </div>

              <div class="form-group">
                <label for="message">Message / Details</label>
                <textarea id="message" name="message" rows="4" required placeholder="Tell us how many liters, expected volume, or date of your event...">{{ old('message') }}</textarea>
              </div>

              <button type="submit" class="btn btn-primary btn-block">
                <span>Send Inquiry</span>
                <i data-lucide="send"></i>
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container footer-content">
      <div class="footer-brand">
        <div class="brand-logo footer-logo">
          <div class="logo-symbol">
            <i data-lucide="citrus"></i>
          </div>
          <div class="logo-text">
            <span class="logo-name">Doce e Fresco</span>
            <span class="logo-tagline">Indústria de Sucos Naturais</span>
          </div>
        </div>
        <p class="footer-text">
          Manufacturers of 100% natural, cold-pressed fruit juices. Committed to uncompromised freshness, local agriculture, and wholesome purity.
        </p>
      </div>

      <div class="footer-links-col">
        <h4>Navigation</h4>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Our Factory</a></li>
          <li><a href="#flavors">Our Juices</a></li>
          <li><a href="#sourcing">Fresh Fruits</a></li>
          <li><a href="#events">Events & Catering</a></li>
        </ul>
      </div>

      <div class="footer-links-col">
        <h4>Juice Varieties</h4>
        <ul>
          @foreach($flavors as $flavor)
            <li><span>{{ $flavor['name'] }}</span></li>
          @endforeach
        </ul>
      </div>

      <div class="footer-links-col">
        <h4>Manufacturing Quality</h4>
        <p class="cert-note"><i data-lucide="check-circle"></i> HACCP Certified Production</p>
        <p class="cert-note"><i data-lucide="check-circle"></i> 100% Recyclable Glass & PET</p>
        <p class="cert-note"><i data-lucide="check-circle"></i> Pure Fruit • No Additives</p>
      </div>
    </div>

    <div class="container footer-bottom">
      <p>&copy; {{ date('Y') }} Doce e Fresco Sucos Naturais, Lda. All rights reserved.</p>
      <p class="footer-subtext">Commercial Juice Manufacturer • Informational Brand Showcase</p>
    </div>
  </footer>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
