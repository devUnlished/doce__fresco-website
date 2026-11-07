@extends('layouts.main')

@section('title', 'Origem & Pomares | Doce & Fresco')
@section('meta_description', 'Descubra a origem dos nossos frutos, os pomares parceiros e o ciclo de prensagem a frio que garante frescura máxima.')

@section('extra_css')
<style>
  .process-timeline {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    margin-bottom: 5rem;
    position: relative;
  }
  .step-card {
    background: #ffffff;
    border: 1px solid #e7eee2;
    border-radius: 20px;
    padding: 2.25rem 1.6rem;
    position: relative;
    transition: transform 0.3s ease;
  }
  .step-card:hover {
    transform: translateY(-5px);
  }
  .step-num {
    font-family: 'Outfit', sans-serif;
    font-size: 2.5rem;
    font-weight: 900;
    color: #c91924;
    line-height: 1;
    margin-bottom: 0.75rem;
  }
  .step-title {
    font-family: 'Outfit', sans-serif;
    font-size: 1.25rem;
    font-weight: 800;
    color: #121e15;
    margin-bottom: 0.75rem;
  }
  .step-desc {
    font-size: 0.95rem;
    color: #4a5d4e;
    line-height: 1.65;
  }

  .sustainability-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
    background: #ffffff;
    border: 1px solid #e7eee2;
    border-radius: 28px;
    padding: 3.5rem;
    margin-bottom: 5rem;
  }
  .sust-text h3 {
    font-family: 'Outfit', sans-serif;
    font-size: 2rem;
    font-weight: 800;
    color: #121e15;
    margin-bottom: 1.1rem;
  }
  .sust-text p {
    font-size: 1.05rem;
    color: #4a5d4e;
    line-height: 1.7;
    margin-bottom: 1.25rem;
  }
  .sust-badges {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-top: 1.5rem;
  }
  .sust-badge-item {
    display: flex;
    align-items: center;
    gap: 0.85rem;
    background: #fbf9f4;
    padding: 0.9rem 1.2rem;
    border-radius: 14px;
    border-left: 3px solid #7cb342;
  }
  .sust-badge-item span {
    font-family: 'Outfit', sans-serif;
    font-size: 0.98rem;
    font-weight: 700;
    color: #121e15;
  }

  .cta-box {
    text-align: center;
    background: linear-gradient(135deg, rgba(201, 25, 36, 0.06) 0%, rgba(124, 179, 66, 0.08) 100%);
    border: 1.5px dashed #c91924;
    border-radius: 24px;
    padding: 3.5rem 2rem;
  }

  @media (max-width: 1024px) {
    .process-timeline { grid-template-columns: repeat(2, 1fr); }
    .sustainability-grid { grid-template-columns: 1fr; padding: 2.5rem 1.75rem; }
  }
  @media (max-width: 600px) {
    .process-timeline { grid-template-columns: 1fr; }
  }
</style>
@endsection

@section('content')
<!-- Page Banner Header -->
<section class="page-hero">
  <div class="page-hero-container">
    <span class="page-tag">Da Terra à Garrafa</span>
    <h1 class="page-title">A Origem do Nosso Sabor</h1>
    <p class="page-desc">
      Conheça o caminho dos nossos frutos desde os pomares solarengos até à garrafa que chega às suas mãos.
    </p>
  </div>
</section>

<!-- Content Section -->
<section class="content-container">
  <div style="text-align:center; max-width:700px; margin:0 auto 3rem;">
    <span class="page-tag">O Ciclo da Frescura</span>
    <h2 style="font-family:'Outfit',sans-serif; font-size:2.2rem; font-weight:800; color:#121e15;">
      Do Pomar ao Copo em 4 Etapas
    </h2>
  </div>

  <div class="process-timeline">
    <div class="step-card">
      <div class="step-num">01</div>
      <h3 class="step-title">Colheita ao Sol</h3>
      <p class="step-desc">
        Apenas colhemos frutos que amadureceram naturalmente na árvore. Sem processos de maturação forçada nem químicos pós-colheita.
      </p>
    </div>

    <div class="step-card">
      <div class="step-num">02</div>
      <h3 class="step-title">Inspeção & Lavagem</h3>
      <p class="step-desc">
        Cada lote passa por triagem manual rigorosa e higienização com água purificada, garantindo fruta impecável para a extração.
      </p>
    </div>

    <div class="step-card">
      <div class="step-num">03</div>
      <h3 class="step-title">Prensagem a Frio</h3>
      <p class="step-desc">
        Prensagem hidráulica suave sem lâminas metálicas rápidas e sem calor. O sumo mantém todas as vitaminas ativas e sabor autêntico.
      </p>
    </div>

    <div class="step-card">
      <div class="step-num">04</div>
      <h3 class="step-title">Cadeia de Frio</h3>
      <p class="step-desc">
        Engarrafamento estéril e arrefecimento imediato. O sumo é mantido sempre a baixa temperatura para conservar a frescura pura.
      </p>
    </div>
  </div>

  <!-- Sustainability Section -->
  <div class="sustainability-grid">
    <div class="sust-text">
      <span class="page-tag" style="background:#e8f5e9; color:#2e7d32;">Compromisso Ambiental</span>
      <h3>Agricultura Sustentável e Desperdício Zero</h3>
      <p>
        Para nós, respeitar a terra significa cuidar de quem a cultiva e proteger o ecossistema que nos alimenta. Desenvolvemos um ciclo produtivo de baixo impacto ambiental:
      </p>
      <div class="sust-badges">
        <div class="sust-badge-item">
          <span style="font-size:1.3rem;">♻️</span>
          <span>Garrafas 100% recicláveis com redução contínua de plástico virgem.</span>
        </div>
        <div class="sust-badge-item">
          <span style="font-size:1.3rem;">🌱</span>
          <span>100% dos resíduos de casca e polpa são transformados em adubo orgânico.</span>
        </div>
        <div class="sust-badge-item">
          <span style="font-size:1.3rem;">🤝</span>
          <span>Preço justo e estabilidade para os pequenos e médios agricultores parceiros.</span>
        </div>
      </div>
    </div>

    <div style="background:#fbf9f4; border:1px solid #e7eee2; border-radius:22px; padding:2.5rem 2rem;">
      <h4 style="font-family:'Outfit',sans-serif; font-size:1.4rem; font-weight:800; color:#121e15; margin-bottom:1rem;">
        Garantias de Qualidade Doce & Fresco
      </h4>
      <p style="font-size:0.98rem; color:#4a5d4e; line-height:1.7; margin-bottom:1.5rem;">
        As nossas instalações de engarrafamento cumprem com os mais rigorosos padrões europeus de segurança alimentar, HACCP e rastreabilidade total de lote.
      </p>
      <div style="display:flex; flex-direction:column; gap:0.75rem;">
        <div style="display:flex; align-items:center; gap:0.6rem; font-weight:700; color:#2e7d32;">
          <span>✓</span> Rastreabilidade do pomar ao ponto de venda
        </div>
        <div style="display:flex; align-items:center; gap:0.6rem; font-weight:700; color:#2e7d32;">
          <span>✓</span> Análises laboratoriais bacteriológicas periódicas
        </div>
        <div style="display:flex; align-items:center; gap:0.6rem; font-weight:700; color:#2e7d32;">
          <span>✓</span> Zero adição de conservantes ou estabilizadores
        </div>
      </div>
    </div>
  </div>

  <!-- CTA Box -->
  <div class="cta-box">
    <h3 style="font-family:'Outfit',sans-serif; font-size:2rem; font-weight:800; margin-bottom:0.75rem;">
      Sinta a frescura da fruta colhida no pomar
    </h3>
    <p style="font-size:1.05rem; color:#4a5d4e; max-width:600px; margin:0 auto 1.75rem;">
      Tem interesse em visitar as nossas instalações ou conhecer os nossos produtores parceiros?
    </p>
    <a href="{{ route('contact') }}" style="display:inline-flex; align-items:center; gap:0.5rem; font-family:'Outfit',sans-serif; font-size:1rem; font-weight:800; background:linear-gradient(135deg, #c91924 0%, #e65100 100%); color:#ffffff; padding:0.85rem 2.2rem; border-radius:9999px; text-decoration:none; box-shadow:0 8px 20px rgba(201, 25, 36, 0.25);">
      Entrar em Contacto Connosco →
    </a>
  </div>
</section>
@endsection
