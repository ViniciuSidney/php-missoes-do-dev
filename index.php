<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Missões do Dev</title>

  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <main class="app">
    <section class="hero">
      <p class="eyebrow">Projeto de aprendizado em PHP</p>

      <h1>Missões do Dev</h1>

      <p class="hero-description">
        Complete missões, ganhe XP e acompanhe sua evolução enquanto aprende PHP.
      </p>
    </section>

    <section class="stats-grid" aria-label="Resumo de progresso">
      <article class="stat-card">
        <span class="stat-label">Nível</span>
        <strong class="stat-value">1</strong>
        <p class="stat-description">Aprendiz de PHP</p>
      </article>

      <article class="stat-card">
        <span class="stat-label">XP</span>
        <strong class="stat-value">0 / 200</strong>
        <p class="stat-description">Progresso inicial</p>
      </article>

      <article class="stat-card">
        <span class="stat-label">Missões</span>
        <strong class="stat-value">3</strong>
        <p class="stat-description">Missões disponíveis</p>
      </article>
    </section>

    <section class="missions-section">
      <div class="section-header">
        <div>
          <p class="eyebrow">Quadro de missões</p>
          <h2>Missões iniciais</h2>
        </div>

        <button class="primary-button" type="button">
          Nova missão
        </button>
      </div>

      <div class="missions-list">
        <article class="mission-card">
          <div>
            <span class="mission-tag">PHP Básico</span>
            <h3>Estudar variáveis em PHP</h3>
            <p>Entender como criar, armazenar e exibir valores usando variáveis.</p>
          </div>

          <div class="mission-footer">
            <span>Fácil · 25 XP</span>
            <button type="button">Concluir</button>
          </div>
        </article>

        <article class="mission-card">
          <div>
            <span class="mission-tag">Formulários</span>
            <h3>Criar um formulário HTML</h3>
            <p>Montar um formulário simples que futuramente será enviado para o PHP.</p>
          </div>

          <div class="mission-footer">
            <span>Média · 50 XP</span>
            <button type="button">Concluir</button>
          </div>
        </article>

        <article class="mission-card mission-card-done">
          <div>
            <span class="mission-tag">Organização</span>
            <h3>Criar a estrutura inicial</h3>
            <p>Preparar pastas, arquivos e documentos principais do projeto.</p>
          </div>

          <div class="mission-footer">
            <span>Concluída · 25 XP</span>
            <button type="button" disabled>Feita</button>
          </div>
        </article>
      </div>
    </section>
  </main>
</body>
</html>