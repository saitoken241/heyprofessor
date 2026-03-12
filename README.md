[![development](https://github.com/saitoken241/heyprofessor/actions/workflows/laravel.yml/badge.svg?branch=develop)](https://github.com/saitoken241/heyprofessor/actions/workflows/laravel.yml)

# 🗳️ Question Voting System (HeyProfessor)

Uma plataforma interativa de perguntas e respostas em tempo real, onde a comunidade decide o que é mais relevante através de votos. Ideal para sessões de **Q&A, aulas ao vivo e webinars**.

---

# 🚀 Funcionalidades

### 🔐 Autenticação Segura
Login social exclusivo via **GitHub** utilizando Laravel Socialite.

### ❓ Gestão de Perguntas
- Criação de perguntas com limite de caracteres
- Edição de perguntas
- Exclusão de perguntas (somente se ainda não tiver votos ou não estiver publicada)

### 👍 Sistema de Votos
Usuários podem votar nas perguntas mais relevantes para que elas subam no ranking.

### 🎤 Moderação do Host
- Marcar perguntas como **Respondidas**
- Arquivamento automático de perguntas respondidas

### 🤖 Inteligência Artificial
Integração com **OpenAI API** para:

- Detecção semântica de perguntas duplicadas
- Evitar spam de perguntas repetidas

### 📱 Interface Responsiva
Interface moderna construída com **Tailwind CSS** e **Flowbite**.

---

# 🛠️ Tecnologias

### Backend
- Laravel 12
- PHP 8.3

### Frontend
- Tailwind CSS
- Flowbite
- Vite

### Autenticação
- Laravel Socialite
- GitHub OAuth

### Inteligência Artificial
- OpenAI API

### Banco de Dados
- PostgreSQL
- MySQL

---

# 📦 Instalação e Configuração

## 1️⃣ Clone o repositório

```bash
git clone https://github.com/saitoken241/heyprofessor.git
cd heyprofessor
```

---

## 2️⃣ Instale as dependências do PHP

```bash
composer install
```

---

## 3️⃣ Instale as dependências do frontend

```bash
npm install
```

---

## 4️⃣ Configure o ambiente

Copie o arquivo `.env.example`:

```bash
cp .env.example .env
```

Depois gere a chave da aplicação:

```bash
php artisan key:generate
```

---

## 5️⃣ Configure o banco de dados

No arquivo `.env` configure:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=heyprofessor
DB_USERNAME=root
DB_PASSWORD=
```

---

## 6️⃣ Execute as migrations

```bash
php artisan migrate
```

Opcionalmente rode os seeders:

```bash
php artisan db:seed
```

---

## 7️⃣ Compile os assets do frontend

Modo desenvolvimento:

```bash
npm run dev
```

Modo produção:

```bash
npm run build
```

---

## 8️⃣ Inicie o servidor

```bash
php artisan serve
```

A aplicação estará disponível em:

```
http://localhost:8000
```

---

# 🔐 Configuração do Login com GitHub

1. Acesse:

```
https://github.com/settings/developers
```

2. Crie um **OAuth App**

Configure:

```
Homepage URL:
http://localhost:8000

Authorization callback URL:
http://localhost:8000/auth/github/callback
```

Depois adicione no `.env`:

```
GITHUB_CLIENT_ID=
GITHUB_CLIENT_SECRET=
GITHUB_REDIRECT_URI=http://localhost:8000/auth/github/callback
```

---

# 🤖 Configuração da OpenAI

Adicione sua chave no `.env`:

```
OPENAI_API_KEY=
```

Essa chave será usada para detectar perguntas duplicadas semanticamente.

---

# 🧪 Testes

Execute os testes automatizados:

```bash
php artisan test
```

ou

```bash
./vendor/bin/pest
```

---

# 📂 Estrutura do Projeto

```
app/
 ├── Models
 ├── Http
 │   ├── Controllers
 │   ├── Requests

database/
 ├── migrations
 ├── factories
 ├── seeders

resources/
 ├── views
 ├── css
 ├── js
```

---

# 📈 Roadmap

Funcionalidades planejadas:

- [ ] Sistema de salas
- [ ] Atualização em tempo real com WebSockets
- [ ] Sistema de tags
- [ ] Notificações
- [ ] Dashboard de analytics

---

# 🤝 Contribuição

Contribuições são bem-vindas!

1. Fork o projeto
2. Crie uma branch

```bash
git checkout -b feature/nova-feature
```

3. Commit suas mudanças

```bash
git commit -m "feat: nova funcionalidade"
```

4. Push para o repositório

```bash
git push origin feature/nova-feature
```

5. Abra um Pull Request

---

# 📜 Licença

Este projeto está sob a licença **MIT**.

---

# 👨‍💻 Autor

ken

GitHub:

https://github.com/saitoken241
