<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #f7f3ee;
    }
    .hero-section {
      width: 100vw;
      height: 100vh;
      min-height: 100vh;
      margin: 0;
      padding: 0;
      position: relative;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f7f3ee;
      background-image: url("{{ asset('images/Doce%26fresc_hero%20section.jpeg') }}");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .hero-bg-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      display: block;
      pointer-events: none;
      user-select: none;
    }
  </style>
</head>
<body>
  <!-- Home Page Hero Section Only -->
  <section class="hero-section" id="home">
    <img 
      src="{{ asset('images/Doce%26fresc_hero%20section.jpeg') }}" 
      alt="Doce & Fresco Hero" 
      class="hero-bg-image"
    />
  </section>
</body>
</html>
