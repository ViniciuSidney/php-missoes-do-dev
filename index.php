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
      <span class="hero-badge">Projeto de aprendizado em PHP</span>

      <h1>Missões do Dev</h1>

      <p>
        Complete missões, ganhe XP e acompanhe sua evolução enquanto aprende PHP na prática.
      </p>
    </section>

    <section class="dashboard" aria-label="Resumo de progresso">
      <article class="dashboard-card">
        <span>Nível atual</span>
        <strong>1</strong>
        <p>Aprendiz de PHP</p>
      </article>

      <article class="dashboard-card">
        <span>XP acumulado</span>
        <strong>0 / 200</strong>
        <p>Progresso até o próximo nível</p>
      </article>

      <article class="dashboard-card">
        <span>Missões</span>
        <strong>3</strong>
        <p>Missões disponíveis no momento</p>
      </article>
    </section>

    <section class="progress-section">
      <div class="progress-info">
        <span>Progresso do nível</span>
        <strong>0%</strong>
      </div>

      <div class="progress-bar" aria-label="Barra de progresso de XP">
        <div class="progress-fill"></div>
      </div>
    </section>

    <section class="missions-section">
      <header class="section-header">
        <div>
          <span class="section-badge">Quadro de missões</span>
          <h2>Missões iniciais</h2>
        </div>

        <button class="primary-button" type="button">
          + Nova missão
        </button>
      </header>

      <div class="missions-list">
        <article class="mission-card">
          <div class="mission-content">
            <span class="mission-tag">PHP Básico</span>

            <h3>Estudar variáveis em PHP</h3>

            <p>
              Entender como criar, armazenar e exibir valores usando variáveis.
            </p>
          </div>

          <footer class="mission-footer">
            <span>Fácil · 25 XP</span>

            <button type="button">
              Concluir
            </button>
          </footer>
        </article>

        <article class="mission-card">
          <div class="mission-content">
            <span class="mission-tag">Formulários</span>

            <h3>Criar um formulário HTML</h3>

            <p>
              Montar um formulário simples que futuramente será enviado para o PHP.
            </p>
          </div>

          <footer class="mission-footer">
            <span>Média · 50 XP</span>

            <button type="button">
              Concluir
            </button>
          </footer>
        </article>

        <article class="mission-card mission-card-done">
          <div class="mission-content">
            <span class="mission-tag">Organização</span>

            <h3>Criar a estrutura inicial</h3>

            <p>
              Preparar pastas, arquivos e documentos principais do projeto.
            </p>
          </div>

          <footer class="mission-footer">
            <span>Concluída · 25 XP</span>

            <button type="button" disabled>
              Feita
            </button>
          </footer>
        </article>
      </div>
    </section>
  </main>
</body>
</html>