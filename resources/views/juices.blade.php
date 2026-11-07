@extends('layouts.main')

@section('title', 'Nossos Sumos | Doce & Fresco')
@section('meta_description', 'Descubra a gama completa de sumos 100% naturais prensados a frio da Doce & Fresco. Sem adição de açúcar nem conservantes.')

@section('extra_css')
<style>
  .flavors-catalog {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2.25rem;
    margin-bottom: 5rem;
  }
  .flavor-item {
    background: #ffffff;
    border: 1px solid #e7eee2;
    border-radius: 22px;
    padding: 2.25rem 1.75rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
  }
  .flavor-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 6px;
    background: var(--card-color, #c91924);
  }
  .flavor-item:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 36px rgba(18, 30, 21, 0.08);
  }
  .flavor-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.25rem;
  }
  .flavor-tag {
    font-family: 'Outfit', sans-serif;
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 0.3rem 0.85rem;
    border-radius: 9999px;
  }
  .tag-orange { background: #fff3e0; color: #e65100; }
  .tag-lime { background: #f1f8e9; color: #558b2f; }
  .tag-yellow { background: #fffde7; color: #f57f17; }
  .tag-red { background: #ffebee; color: #c62828; }
  .tag-green { background: #e8f5e9; color: #2e7d32; }

  .flavor-title {
    font-family: 'Outfit', sans-serif;
    font-size: 1.55rem;
    font-weight: 800;
    color: #121e15;
    margin-bottom: 0.65rem;
  }
  .flavor-desc {
    font-size: 0.98rem;
    color: #4a5d4e;
    line-height: 1.65;
    margin-bottom: 1.25rem;
  }
  .flavor-meta {
    background: #fbf9f4;
    border-radius: 14px;
    padding: 1rem;
    margin-top: auto;
  }
  .meta-row {
    font-size: 0.88rem;
    margin-bottom: 0.4rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }
  .meta-row:last-child {
    margin-bottom: 0;
  }
  .meta-label {
    font-weight: 700;
    color: #121e15;
  }
  .meta-val {
    color: #556c59;
  }

  /* Formats Section */
  .formats-section {
    background: #ffffff;
    border: 1px solid #e7eee2;
    border-radius: 28px;
    padding: 3.5rem 3rem;
    margin-bottom: 5rem;
  }
  .formats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    margin-top: 2.5rem;
  }
  .format-box {
    text-align: center;
    padding: 1.75rem 1.25rem;
    border: 1px solid #edf3ea;
    border-radius: 18px;
    background: #fbf9f4;
  }
  .format-icon {
    font-size: 2.5rem;
    margin-bottom: 0.75rem;
  }
  .format-box h4 {
    font-family: 'Outfit', sans-serif;
    font-size: 1.3rem;
    font-weight: 800;
    color: #121e15;
    margin-bottom: 0.35rem;
  }
  .format-box p {
    font-size: 0.92rem;
    color: #556c59;
  }

  .cta-box {
    text-align: center;
    background: linear-gradient(135deg, rgba(201, 25, 36, 0.06) 0%, rgba(124, 179, 66, 0.08) 100%);
    border: 1.5px dashed #c91924;
    border-radius: 24px;
    padding: 3.5rem 2rem;
  }

  @media (max-width: 1024px) {
    .flavors-catalog { grid-template-columns: repeat(2, 1fr); }
    .formats-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 650px) {
    .flavors-catalog { grid-template-columns: 1fr; }
    .formats-grid { grid-template-columns: 1fr; }
    .formats-section { padding: 2rem 1.25rem; }
  }
</style>
@endsection

@section('content')
<!-- Page Banner Header -->
<section class="page-hero">
  <div class="page-hero-container">
    <span class="page-tag">Gama de Produtos</span>
    <h1 class="page-title">Os Nossos Sumos 100% Naturais</h1>
    <p class="page-desc">
      Extraídos através de prensagem suave a frio para preservar cada gota de vida, sabor e vitamina da fruta fresca.
    </p>
  </div>
</section>

<!-- Content Section -->
<section class="content-container">
  <!-- Flavors Grid -->
  <div class="flavors-catalog">
    @foreach($flavors as $flavor)
      <div class="flavor-item" style="--card-color: {{ $flavor['color'] }};">
        <div>
          <div class="flavor-header">
            <span class="flavor-tag {{ $flavor['tag_class'] }}">{{ $flavor['tag'] }}</span>
            <span style="font-size: 1.4rem;">🧃</span>
          </div>
          <h2 class="flavor-title">{{ $flavor['name'] }}</h2>
          <p class="flavor-desc">{{ $flavor['desc'] }}</p>
        </div>

        <div class="flavor-meta">
          <div class="meta-row">
            <span class="meta-label">Ingredientes:</span>
            <span class="meta-val">{{ $flavor['ingredients'] }}</span>
          </div>
          <div class="meta-row">
            <span class="meta-label">Benefícios:</span>
            <span class="meta-val">{{ $flavor['benefits'] }}</span>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <!-- Formats Section -->
  <div class="formats-section">
    <div style="text-align: center; max-width: 650px; margin: 0 auto;">
      <span class="page-tag">Embalagens & Doses</span>
      <h3 style="font-family:'Outfit',sans-serif; font-size:2.2rem; font-weight:800; color:#121e15;">
        Formatos Adaptados ao Seu Dia
      </h3>
      <p style="font-size: 1.05rem; color:#4a5d4e; margin-top:0.5rem;">
        Do consumo individual em viagem ao fornecimento por grosso para restauração e eventos.
      </p>
    </div>

    <div class="formats-grid">
      <div class="format-box">
        <div class="format-icon">🥤</div>
        <h4>250 ml</h4>
        <p>Perfeito para levar na mala, lanche escolar ou pausa rápida no trabalho.</p>
      </div>

      <div class="format-box">
        <div class="format-icon">🍶</div>
        <h4>500 ml</h4>
        <p>A dose ideal de hidratação e vitaminas ativas para o seu dia a dia.</p>
      </div>

      <div class="format-box">
        <div class="format-icon">🫙</div>
        <h4>1 Litro</h4>
        <p>Formato familiar para o pequeno-almoço e refeições em família.</p>
      </div>

      <div class="format-box">
        <div class="format-icon">📦</div>
        <h4>Hotelaria / Horeca</h4>
        <p>Embalagens especiais e fornecimento regular para cafetarias, restaurantes e hotéis.</p>
      </div>
    </div>
  </div>

  <!-- CTA Box -->
  <div class="cta-box">
    <h3 style="font-family:'Outfit',sans-serif; font-size:2rem; font-weight:800; margin-bottom:0.75rem;">
      Quer revender Doce & Fresco ou encomendar para a sua empresa?
    </h3>
    <p style="font-size:1.05rem; color:#4a5d4e; max-width:600px; margin:0 auto 1.75rem;">
      Dispomos de condições vantajosas para revendedores, distribuidores e canal HORECA.
    </p>
    <a href="{{ route('contact') }}" style="display:inline-flex; align-items:center; gap:0.5rem; font-family:'Outfit',sans-serif; font-size:1rem; font-weight:800; background:linear-gradient(135deg, #c91924 0%, #e65100 100%); color:#ffffff; padding:0.85rem 2.2rem; border-radius:9999px; text-decoration:none; box-shadow:0 8px 20px rgba(201, 25, 36, 0.25);">
      Solicitar Informações de Distribuição →
    </a>
  </div>
</section>
@endsection
