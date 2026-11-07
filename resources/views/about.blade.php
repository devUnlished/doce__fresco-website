@extends('layouts.main')

@section('title', 'Sobre Nós | Doce & Fresco')
@section('meta_description', 'Conheça a história, missão e compromisso da Doce & Fresco com os sumos 100% naturais prensados a frio.')

@section('extra_css')
<style>
  .story-grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 3.5rem;
    align-items: center;
    margin-bottom: 5rem;
  }
  .story-text h2 {
    font-family: 'Outfit', sans-serif;
    font-size: 2.2rem;
    font-weight: 800;
    margin-bottom: 1.25rem;
    color: #121e15;
    line-height: 1.2;
  }
  .story-text p {
    font-size: 1.05rem;
    color: #4a5d4e;
    margin-bottom: 1.25rem;
    line-height: 1.75;
  }
  .highlight-box {
    background: linear-gradient(135deg, rgba(201, 25, 36, 0.05) 0%, rgba(124, 179, 66, 0.08) 100%);
    border-left: 4px solid #c91924;
    padding: 1.5rem 1.75rem;
    border-radius: 0 16px 16px 0;
    margin: 1.5rem 0;
  }
  .highlight-box p {
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    font-size: 1.15rem;
    color: #121e15;
    margin: 0;
  }
  .story-card {
    background: #ffffff;
    border: 1px solid #e7eee2;
    border-radius: 24px;
    padding: 2.5rem 2rem;
    box-shadow: 0 16px 36px -10px rgba(18, 30, 21, 0.08);
  }
  .pillars-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-bottom: 5rem;
  }
  .pillar-card {
    background: #ffffff;
    border: 1px solid #e7eee2;
    border-radius: 20px;
    padding: 2.25rem 1.75rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .pillar-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 32px rgba(18, 30, 21, 0.08);
  }
  .pillar-icon {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
    font-size: 1.6rem;
  }
  .pillar-card h3 {
    font-family: 'Outfit', sans-serif;
    font-size: 1.35rem;
    font-weight: 800;
    margin-bottom: 0.75rem;
    color: #121e15;
  }
  .pillar-card p {
    font-size: 0.98rem;
    color: #4a5d4e;
    line-height: 1.65;
  }
  .stats-row {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
    background: linear-gradient(135deg, #121e15 0%, #1a2f20 100%);
    color: #ffffff;
    border-radius: 24px;
    padding: 3rem 2rem;
    text-align: center;
    margin-bottom: 5rem;
  }
  .stat-item h3 {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(2.2rem, 3.5vw, 3rem);
    font-weight: 900;
    color: #97cb2f;
    margin-bottom: 0.35rem;
  }
  .stat-item p {
    font-size: 0.95rem;
    color: #d1ead7;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    font-weight: 700;
  }
  .cta-box {
    text-align: center;
    background: radial-gradient(circle at 50% 50%, rgba(201, 25, 36, 0.06) 0%, rgba(124, 179, 66, 0.06) 100%);
    border: 1.5px dashed #c91924;
    border-radius: 24px;
    padding: 3.5rem 2rem;
  }
  .cta-box h3 {
    font-family: 'Outfit', sans-serif;
    font-size: 2rem;
    font-weight: 800;
    margin-bottom: 0.75rem;
  }
  .cta-box p {
    font-size: 1.05rem;
    color: #4a5d4e;
    max-width: 600px;
    margin: 0 auto 1.75rem;
  }
  .btn-brand {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-family: 'Outfit', sans-serif;
    font-size: 1rem;
    font-weight: 800;
    background: linear-gradient(135deg, #c91924 0%, #e65100 100%);
    color: #ffffff;
    padding: 0.85rem 2rem;
    border-radius: 9999px;
    text-decoration: none;
    box-shadow: 0 8px 20px rgba(201, 25, 36, 0.25);
    transition: all 0.25s ease;
  }
  .btn-brand:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(201, 25, 36, 0.35);
    color: #ffffff;
  }

  @media (max-width: 900px) {
    .story-grid { grid-template-columns: 1fr; }
    .pillars-grid { grid-template-columns: 1fr; }
    .stats-row { grid-template-columns: repeat(2, 1fr); gap: 2rem; }
  }
</style>
@endsection

@section('content')
<!-- Page Banner Header -->
<section class="page-hero">
  <div class="page-hero-container">
    <span class="page-tag">A Nossa Paixão</span>
    <h1 class="page-title">Sobre a Doce & Fresco</h1>
    <p class="page-desc">
      O verdadeiro sabor da nossa terra em cada gota. Conheça a nossa jornada pela pureza da fruta fresca prensada a frio.
    </p>
  </div>
</section>

<!-- Content Section -->
<section class="content-container">
  <div class="story-grid">
    <div class="story-text">
      <h2>A Nossa Missão: Fruta Pura sem Compromissos</h2>
      <p>
        A <strong>Doce & Fresco</strong> nasceu com um propósito claro e inegociável: devolver às pessoas o prazer autêntico de beber sumo de fruta verdadeira. Em um mercado repleto de concentrados industriais, aromas artificiais e adição de açúcar, decidimos trilhar o caminho da honestidade e da qualidade intransigente.
      </p>
      <div class="highlight-box">
        <p>"O sabor da nossa terra, fresco na sua garrafa — não é apenas um lema, é a nossa promessa diária a cada cliente."</p>
      </div>
      <p>
        Selecionamos cuidadosamente a fruta nos pomares locais no momento ótimo de maturação. Através de tecnologia de prensagem a frio, extraímos cada gota sem aquecimento, mantendo intactas as vitaminas naturais, os antioxidantes e o sabor vibrante dos pomares.
      </p>
    </div>

    <div class="story-card">
      <h3 style="font-family:'Outfit',sans-serif; font-size:1.45rem; font-weight:800; color:#121e15; margin-bottom:1rem;">
        Porquê Doce & Fresco?
      </h3>
      <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:1rem;">
        <li style="display:flex; align-items:flex-start; gap:0.75rem;">
          <span style="color:#2e7d32; font-weight:900; font-size:1.1rem;">✓</span>
          <span style="font-size:0.98rem; color:#4a5d4e;"><strong>100% Pura Fruta:</strong> Sem água adicionada, sem conservantes e sem açúcares refinados.</span>
        </li>
        <li style="display:flex; align-items:flex-start; gap:0.75rem;">
          <span style="color:#2e7d32; font-weight:900; font-size:1.1rem;">✓</span>
          <span style="font-size:0.98rem; color:#4a5d4e;"><strong>Prensagem Suave a Frio:</strong> Preservação total de enzimas ativas e nutrientes essenciais.</span>
        </li>
        <li style="display:flex; align-items:flex-start; gap:0.75rem;">
          <span style="color:#2e7d32; font-weight:900; font-size:1.1rem;">✓</span>
          <span style="font-size:0.98rem; color:#4a5d4e;"><strong>Agricultura de Proximidade:</strong> Frutos colhidos em pomares locais de confiança.</span>
        </li>
        <li style="display:flex; align-items:flex-start; gap:0.75rem;">
          <span style="color:#2e7d32; font-weight:900; font-size:1.1rem;">✓</span>
          <span style="font-size:0.98rem; color:#4a5d4e;"><strong>Engarrafamento Imediato:</strong> Frescura máxima garantida do pomar até ao copo.</span>
        </li>
      </ul>
    </div>
  </div>

  <!-- Pillars Section -->
  <div style="text-align:center; max-width:700px; margin:0 auto 3rem;">
    <span class="page-tag">Princípios Fundamentais</span>
    <h2 style="font-family:'Outfit',sans-serif; font-size:2.2rem; font-weight:800; color:#121e15;">Os 3 Pilares da Nossa Qualidade</h2>
  </div>

  <div class="pillars-grid">
    <div class="pillar-card">
      <div class="pillar-icon" style="background:#fee8eb; color:#c91924;">🍊</div>
      <h3>Pureza Absoluta</h3>
      <p>Cada garrafa contém exclusivamente fruta natural. Não diluímos com água, não adicionamos químicos nem açúcares. O que vê no rótulo é rigorosamente o que bebe.</p>
    </div>

    <div class="pillar-card">
      <div class="pillar-icon" style="background:#f2fad9; color:#2e7d32;">🌱</div>
      <h3>Prensagem a Frio</h3>
      <p>Ao contrário dos sumos pasteurizados a altas temperaturas, a nossa extração a frio preserva o aroma vivo, a cor autêntica e a riqueza vitamínica de cada fruta.</p>
    </div>

    <div class="pillar-card">
      <div class="pillar-icon" style="background:#e6f9ed; color:#1b5e20;">🚜</div>
      <h3>Respeito pela Terra</h3>
      <p>Trabalhamos lado a lado com produtores regionais que partilham a nossa paixão pelo cultivo sustentável, valorizando os solos e o trabalho dos nossos campos.</p>
    </div>
  </div>

  <!-- Numbers Stats -->
  <div class="stats-row">
    <div class="stat-item">
      <h3>100%</h3>
      <p>Pura Fruta</p>
    </div>
    <div class="stat-item">
      <h3>0%</h3>
      <p>Conservantes</p>
    </div>
    <div class="stat-item">
      <h3>12+</h3>
      <p>Sabores Vivos</p>
    </div>
    <div class="stat-item">
      <h3>24h</h3>
      <p>Do Pomar à Garrafa</p>
    </div>
  </div>

  <!-- Bottom CTA -->
  <div class="cta-box">
    <h3>Pronto para saborear a diferença?</h3>
    <p>Explore a nossa gama de sumos artesanais ou entre em contacto para fornecimento e encomendas especiais.</p>
    <div style="display:inline-flex; gap:1rem; flex-wrap:wrap; justify-content:center;">
      <a href="{{ route('juices') }}" class="btn-brand">Explorar Nossos Sumos →</a>
      <a href="{{ route('contact') }}" style="display:inline-flex; align-items:center; font-family:'Outfit',sans-serif; font-weight:800; color:#121e15; background:#ffffff; border:1.5px solid #d4e8c1; padding:0.85rem 1.85rem; border-radius:9999px; text-decoration:none;">Fale Connosco</a>
    </div>
  </div>
</section>
@endsection
