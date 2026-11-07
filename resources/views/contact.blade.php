@extends('layouts.main')

@section('title', 'Contacto | Doce & Fresco')
@section('meta_description', 'Entre em contacto com a Doce & Fresco para dúvidas, distribuição, fornecimento de sumos e parcerias comerciais.')

@section('extra_css')
<style>
  .contact-layout {
    display: grid;
    grid-template-columns: 1fr 1.25fr;
    gap: 3.5rem;
    align-items: flex-start;
  }
  .contact-info-card {
    background: #ffffff;
    border: 1px solid #e7eee2;
    border-radius: 24px;
    padding: 2.75rem 2.25rem;
    box-shadow: 0 16px 36px -10px rgba(18, 30, 21, 0.08);
  }
  .info-item {
    display: flex;
    align-items: flex-start;
    gap: 1.1rem;
    margin-bottom: 2rem;
  }
  .info-item:last-child {
    margin-bottom: 0;
  }
  .info-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #fee8eb;
    color: #c91924;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.35rem;
    flex-shrink: 0;
  }
  .info-text h4 {
    font-family: 'Outfit', sans-serif;
    font-size: 1.15rem;
    font-weight: 800;
    color: #121e15;
    margin-bottom: 0.25rem;
  }
  .info-text p {
    font-size: 0.95rem;
    color: #556c59;
    line-height: 1.6;
    margin: 0;
  }

  .form-card {
    background: #ffffff;
    border: 1px solid #e7eee2;
    border-radius: 24px;
    padding: 3rem 2.5rem;
    box-shadow: 0 16px 36px -10px rgba(18, 30, 21, 0.08);
  }
  .form-card h3 {
    font-family: 'Outfit', sans-serif;
    font-size: 1.85rem;
    font-weight: 800;
    color: #121e15;
    margin-bottom: 0.6rem;
  }
  .form-card p {
    font-size: 0.98rem;
    color: #556c59;
    margin-bottom: 2rem;
  }

  .form-group {
    margin-bottom: 1.35rem;
  }
  .form-group label {
    display: block;
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    font-size: 0.92rem;
    color: #121e15;
    margin-bottom: 0.45rem;
  }
  .form-control {
    width: 100%;
    padding: 0.85rem 1.15rem;
    border: 1.5px solid #d9e3d4;
    border-radius: 12px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 0.98rem;
    color: #121e15;
    background: #fbf9f4;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
  }
  .form-control:focus {
    outline: none;
    border-color: #c91924;
    box-shadow: 0 0 0 3px rgba(201, 25, 36, 0.15);
    background: #ffffff;
  }
  textarea.form-control {
    resize: vertical;
    min-height: 120px;
  }

  .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.25rem;
  }

  .btn-submit {
    width: 100%;
    padding: 1rem 2rem;
    border: none;
    border-radius: 9999px;
    background: linear-gradient(135deg, #c91924 0%, #e65100 100%);
    color: #ffffff;
    font-family: 'Outfit', sans-serif;
    font-size: 1.05rem;
    font-weight: 800;
    cursor: pointer;
    box-shadow: 0 8px 24px rgba(201, 25, 36, 0.3);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }
  .btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(201, 25, 36, 0.4);
  }

  .alert-success {
    background: #e8f5e9;
    border: 1.5px solid #a5d6a7;
    color: #1b5e20;
    border-radius: 14px;
    padding: 1.15rem 1.35rem;
    margin-bottom: 2rem;
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
  }

  @media (max-width: 900px) {
    .contact-layout { grid-template-columns: 1fr; }
    .form-row { grid-template-columns: 1fr; }
    .form-card { padding: 2rem 1.5rem; }
  }
</style>
@endsection

@section('content')
<!-- Page Banner Header -->
<section class="page-hero">
  <div class="page-hero-container">
    <span class="page-tag">Estamos Disponíveis</span>
    <h1 class="page-title">Fale com a Doce & Fresco</h1>
    <p class="page-desc">
      Tem questões sobre os nossos produtos, deseja tornar-se distribuidor ou encomendar para o seu estabelecimento? Estamos à sua disposição.
    </p>
  </div>
</section>

<!-- Content Section -->
<section class="content-container">
  <div class="contact-layout">
    <!-- Info Column -->
    <div>
      <div class="contact-info-card">
        <h3 style="font-family:'Outfit',sans-serif; font-size:1.5rem; font-weight:800; color:#121e15; margin-bottom:1.5rem;">
          Informações de Contacto
        </h3>

        <div class="info-item">
          <div class="info-icon">✉️</div>
          <div class="info-text">
            <h4>Correio Eletrónico</h4>
            <p>contacto@doceefresco.com</p>
            <p style="font-size:0.85rem; color:#859c8a; margin-top:0.25rem;">Respondemos em menos de 24 horas</p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon" style="background:#f2fad9; color:#2e7d32;">⏰</div>
          <div class="info-text">
            <h4>Horário de Atendimento</h4>
            <p>Segunda a Sexta-feira</p>
            <p style="font-size:0.88rem; color:#556c59;">08h00 às 18h00</p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon" style="background:#e6f9ed; color:#1b5e20;">📦</div>
          <div class="info-text">
            <h4>Canal HORECA & Revenda</h4>
            <p>Fornecemos cafetarias, restaurantes, hotéis e supermercados com entregas diárias refrigeradas.</p>
          </div>
        </div>
      </div>

      <div style="background:#fbf9f4; border:1px solid #e7eee2; border-radius:20px; padding:1.75rem; margin-top:2rem;">
        <h4 style="font-family:'Outfit',sans-serif; font-size:1.15rem; font-weight:800; color:#121e15; margin-bottom:0.5rem;">
          💡 Pretende provar os nossos sumos?
        </h4>
        <p style="font-size:0.92rem; color:#556c59; margin:0; line-height:1.6;">
          Oferecemos kits de degustação para profissionais da restauração e hotelaria. Indique no formulário que pretende receber amostras para o seu estabelecimento.
        </p>
      </div>
    </div>

    <!-- Form Column -->
    <div class="form-card">
      <h3>Envie-nos uma Mensagem</h3>
      <p>Preencha os campos abaixo e entraremos em contacto consigo brevemente.</p>

      @if(session('success'))
        <div class="alert-success">
          ✓ {{ session('success') }}
        </div>
      @endif

      <form action="{{ route('inquire.submit') }}" method="POST">
        @csrf

        <div class="form-row">
          <div class="form-group">
            <label for="name">Nome Completo *</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="O seu nome" required value="{{ old('name') }}">
          </div>

          <div class="form-group">
            <label for="email">Correio Eletrónico *</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="seu.email@exemplo.com" required value="{{ old('email') }}">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="phone">Telefone / Telemóvel</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="+351 912 345 678" value="{{ old('phone') }}">
          </div>

          <div class="form-group">
            <label for="inquiryType">Tipo de Contacto *</label>
            <select id="inquiryType" name="inquiryType" class="form-control" required>
              <option value="Distribuição / Revenda">Distribuição / Revenda Comercial</option>
              <option value="Restauração / Hotelaria">Restauração / Hotelaria (HORECA)</option>
              <option value="Eventos / Catering">Eventos & Catering</option>
              <option value="Consumidor">Consumidor Final / Dúvidas</option>
              <option value="Outro">Outro Assunto</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="message">Mensagem *</label>
          <textarea id="message" name="message" class="form-control" placeholder="Escreva aqui a sua mensagem ou detalhes sobre o seu pedido..." required>{{ old('message') }}</textarea>
        </div>

        <button type="submit" class="btn-submit">
          Enviar Mensagem →
        </button>
      </form>
    </div>
  </div>
</section>
@endsection
