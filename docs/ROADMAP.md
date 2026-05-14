# Roadmap — Missões do Dev

Este documento registra o planejamento de evolução do projeto por versões.

## ✅ v0.1.0 — Estrutura inicial e protótipo visual

### Objetivo

Criar a base inicial do projeto, com arquivos, pastas, documentação e uma primeira tela estática.

### Etapas

- [ ] Criar estrutura de pastas
- [ ] Criar `index.php`
- [ ] Criar `assets/css/style.css`
- [ ] Criar `data/missions.json`
- [ ] Criar `README.md`
- [ ] Criar `CHANGELOG.md`
- [ ] Criar `docs/ROADMAP.md`
- [ ] Montar primeira tela estática
- [ ] Criar cards visuais de missões
- [ ] Criar painel visual de XP e nível

### Resultado esperado

Uma página inicial estática, organizada e pronta para receber lógica PHP nas próximas versões.

---

## 🔜 v0.2.0 — Listagem com PHP e arrays

### Objetivo

Substituir missões escritas manualmente por uma listagem gerada com PHP.

### Etapas

- [ ] Criar array de missões
- [ ] Listar missões usando `foreach`
- [ ] Exibir status da missão
- [ ] Exibir dificuldade
- [ ] Exibir XP
- [ ] Calcular estatísticas básicas

### Resultado esperado

A tela passa a usar PHP para gerar os dados das missões.

---

## 🔜 v0.3.0 — Cadastro com formulário

### Objetivo

Permitir que o usuário cadastre missões pela interface.

### Etapas

- [ ] Criar formulário de cadastro
- [ ] Receber dados com `POST`
- [ ] Validar campos básicos
- [ ] Definir XP com base na dificuldade
- [ ] Exibir missão cadastrada temporariamente

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