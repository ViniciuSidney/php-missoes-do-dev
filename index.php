<?php
$missions = [
  [
    "title" => "Estudar variáveis em PHP",
    "description" => "Entender como criar, armazenar e exibir valores usando variáveis.",
    "category" => "PHP Básico",
    "difficulty" => "Fácil",
    "xp" => 25,
    "status" => "pending"
  ],
  [
    "title" => "Criar um formulário HTML",
    "description" => "Montar um formulário simples que futuramente será enviado para o PHP.",
    "category" => "Formulários",
    "difficulty" => "Média",
    "xp" => 50,
    "status" => "pending"
  ],
  [
    "title" => "Criar a estrutura inicial",
    "description" => "Preparar pastas, arquivos e documentos principais do projeto.",
    "category" => "Organização",
    "difficulty" => "Fácil",
    "xp" => 25,
    "status" => "done"
  ]
];

$totalMissions = count($missions);
$completedMissions = 0;
$totalXp = 0;

foreach ($missions as $mission) {
  if ($mission["status"] === "done") {
    $completedMissions++;
    $totalXp += $mission["xp"];
  }
}

$xpToNextLevel = 200;
$currentLevel = floor($totalXp / $xpToNextLevel) + 1;
$currentXp = $totalXp % $xpToNextLevel;
$progressPercentage = ($currentXp / $xpToNextLevel) * 100;

$levelTitle = "Aprendiz de PHP";
?>

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
         <strong><?= $currentLevel ?></strong>
         <p><?= $levelTitle ?></p>
      </article>

      <article class="dashboard-card">
        <span>XP acumulado</span>
<strong><?= $currentXp ?> / <?= $xpToNextLevel ?></strong>
<p>Progresso até o próximo nível</p>
      </article>

      <article class="dashboard-card">
        <span>Missões</span>
<strong><?= $totalMissions ?></strong>
<p><?= $completedMissions ?> concluída(s)</p>
      </article>
    </section>

    <section class="progress-section">
      <div class="progress-info">
        <span>Progresso do nível</span>
<strong><?= round($progressPercentage) ?>%</strong>
      </div>

      <div class="progress-bar" aria-label="Barra de progresso de XP">
<div class="progress-fill" style="width: <?= $progressPercentage ?>%;"></div>
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
<?php foreach ($missions as $mission): ?>
  <?php
    $isDone = $mission["status"] === "done";
    $cardClass = $isDone ? "mission-card mission-card-done" : "mission-card";
    $statusLabel = $isDone ? "Concluída" : $mission["difficulty"];
    $buttonLabel = $isDone ? "Feita" : "Concluir";
  ?>

  <article class="<?= $cardClass ?>">
    <div class="mission-content">
      <span class="mission-tag">
        <?= $mission["category"] ?>
      </span>

      <h3>
        <?= $mission["title"] ?>
      </h3>

      <p>
        <?= $mission["description"] ?>
      </p>
    </div>

    <footer class="mission-footer">
      <span>
        <?= $statusLabel ?> · <?= $mission["xp"] ?> XP
      </span>

      <button type="button" <?= $isDone ? "disabled" : "" ?>>
        <?= $buttonLabel ?>
      </button>
    </footer>
  </article>
<?php endforeach; ?>
      </div>
    </section>
  </main>
</body>
</html>