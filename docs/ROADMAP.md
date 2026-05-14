# Roadmap — Missões do Dev

Este documento registra o planejamento de evolução do projeto por versões.

## ✅ v0.1.0 — Estrutura inicial e protótipo visual

### Objetivo

Criar a base inicial do projeto, com arquivos, pastas, documentação e uma primeira tela estática.

### Etapas

- [x] Criar estrutura de pastas
- [x] Criar `index.php`
- [x] Criar `assets/css/style.css`
- [x] Criar `data/missions.json`
- [x] Criar `README.md`
- [x] Criar `CHANGELOG.md`
- [x] Criar `docs/ROADMAP.md`
- [x] Montar primeira tela estática
- [x] Criar cards visuais de missões
- [x] Criar painel visual de XP e nível

### Resultado esperado

Uma página inicial estática, organizada e pronta para receber lógica PHP nas próximas versões.

---

## 🔜 v0.2.0 — Listagem com PHP e arrays

### Objetivo

Substituir missões escritas manualmente por uma listagem gerada com PHP.

### Etapas

- [x] Criar array de missões
- [x] Listar missões usando `foreach`
- [x] Exibir status da missão
- [x] Exibir dificuldade
- [x] Exibir XP
- [x] Calcular estatísticas básicas
- [x] Proteger exibição dos dados no HTML

### Resultado esperado

A tela passa a usar PHP para gerar os dados das missões.

---

## 🔜 v0.3.0 — Cadastro com formulário

### Objetivo

Permitir que o usuário cadastre missões pela interface.

### Etapas

- [x] Criar formulário de cadastro
- [x] Receber dados com `POST`
- [x] Validar campos básicos
- [x] Definir XP com base na dificuldade
- [x] Exibir missão cadastrada temporariamente

### Resultado esperado

O usuário consegue enviar dados por formulário usando PHP.

---

## 🔜 v0.4.0 — Persistência com JSON

### Objetivo

Salvar as missões em um arquivo JSON.

### Etapas

- [ ] Ler dados de `data/missions.json`
- [ ] Converter JSON em array PHP
- [ ] Salvar novas missões no JSON
- [ ] Manter dados após recarregar a página

### Resultado esperado

As missões passam a ficar salvas de forma persistente.

---

## 🔜 v0.5.0 — Ações nas missões

### Objetivo

Permitir concluir, excluir e filtrar missões.

### Etapas

- [ ] Concluir missão
- [ ] Excluir missão
- [ ] Filtrar por status
- [ ] Exibir mensagens de feedback
- [ ] Atualizar XP ao concluir missões

### Resultado esperado

A aplicação já pode ser usada de forma básica.

---

## 🔜 v0.6.0 — Organização do código

### Objetivo

Separar responsabilidades e evitar excesso de código no `index.php`.

### Etapas

- [ ] Criar pasta `includes`
- [ ] Criar arquivo de funções
- [ ] Criar arquivos de ações
- [ ] Separar cabeçalho e rodapé
- [ ] Melhorar legibilidade do código

### Resultado esperado

O projeto fica mais organizado e preparado para crescer.

---

## 🔜 v0.7.0 — Sistema de níveis e XP

### Objetivo

Melhorar a gamificação do projeto.

### Etapas

- [ ] Criar cálculo de nível
- [ ] Criar barra de progresso
- [ ] Criar títulos por nível
- [ ] Melhorar painel de estatísticas

### Resultado esperado

O usuário passa a visualizar melhor sua evolução.

---

## 🔜 v0.8.0 — Melhorias de usabilidade

### Objetivo

Deixar a aplicação mais agradável e intuitiva.

### Etapas

- [ ] Melhorar responsividade
- [ ] Criar formulário recolhível
- [ ] Melhorar cards de missão
- [ ] Adicionar confirmação antes de excluir
- [ ] Melhorar mensagens visuais

### Resultado esperado

A experiência de uso fica mais confortável.

---

## 🎯 v1.0.0 — Primeira versão completa

### Objetivo

Finalizar uma versão simples, funcional e apresentável.

### Funcionalidades esperadas

- [ ] Cadastrar missões
- [ ] Listar missões
- [ ] Concluir missões
- [ ] Excluir missões
- [ ] Filtrar missões
- [ ] Salvar dados em JSON
- [ ] Calcular XP
- [ ] Calcular nível
- [ ] Exibir barra de progresso
- [ ] Ter layout responsivo
- [ ] Ter README completo