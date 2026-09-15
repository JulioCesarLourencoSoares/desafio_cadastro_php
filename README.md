# desafio_cadastro_php
Atividade 3: Desafio "Verificação de Maioridade

# 🛡️ Sistema de Verificação de Acesso em PHP

Aplicação web simples desenvolvida em PHP que valida a idade do usuário com base no ano de nascimento e registra os acessos autorizados em um arquivo de log local.

---

## 🚀 Funcionalidades

- **Coleta de Dados:** Formulário simples para entrada de nome e ano de nascimento.
- **Cálculo de Idade:** Processamento automático no servidor com base no ano atual do sistema.
- **Validação de Maioridade:**
  - **≥ 18 anos:** Exibe mensagem de confirmação e grava o log de acesso.
  - **< 18 anos:** Exibe mensagem de acesso negado.
- **Armazenamento em Arquivo:** Salva o histórico de usuários autorizados no arquivo `log_acessos.txt`.

---

## 🛠️ Pré-requisitos

- **PHP 7.4** ou superior instalado na máquina.
- Servidor local (XAMPP, Laragon, WampServer) **ou** uso do servidor embutido do próprio PHP.

---

## 🔧 Como Executar o Projeto

1. **Baixe ou clone o código:**
   Certifique-se de salvar o código principal como `index.php`.

2. **Inicie o servidor embutido do PHP:**
   Abra o terminal na pasta onde está o arquivo `index.php` e rode:
   ```bash
   php -S localhost:8000
