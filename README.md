[![development](https://github.com/saitoken241/heyprofessor/actions/workflows/laravel.yml/badge.svg?branch=develop)](https://github.com/saitoken241/heyprofessor/actions/workflows/laravel.yml)

# Question Voting System (HeyProfessor)

An interactive real-time Q&A platform where the community decides what is most relevant through voting. Ideal for **Q&A sessions, live classes, and webinars**.

---

# Features

## Secure Authentication
Social login via **GitHub OAuth** using Laravel Socialite.

## Question Management

- Create questions with character limits
- Edit questions
- Delete questions (only if they have no votes and are not published)

## Voting System

Users can vote on the most relevant questions so they rise in the ranking.

## Host Moderation

- Mark questions as **answered**
- Automatically archive answered questions

## Artificial Intelligence

Integration with the **OpenAI API** for:

- Semantic detection of duplicate questions
- Preventing repeated question spam

## Responsive Interface

Modern UI built with **Tailwind CSS** and **Flowbite**.

---

# Technologies

## Backend

- Laravel 12
- PHP 8.3

## Frontend

- Tailwind CSS
- Flowbite
- Vite

## Authentication

- Laravel Socialite
- GitHub OAuth

## Artificial Intelligence

- OpenAI API

## Database

- PostgreSQL
- MySQL

---

# Installation and Setup

## 1. Clone the repository

```bash
git clone https://github.com/saitoken241/heyprofessor.git
cd heyprofessor
````

---

## 2. Install PHP dependencies

```bash
composer install
```

---

## 3. Install frontend dependencies

```bash
npm install
```

---

## 4. Configure the environment

Copy the `.env.example` file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

---

## 5. Configure the database

In the `.env` file configure:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=heyprofessor
DB_USERNAME=root
DB_PASSWORD=
```

---

## 6. Run the migrations

```bash
php artisan migrate
```

Optionally run seeders:

```bash
php artisan db:seed
```

---

## 7. Compile frontend assets

Development mode:

```bash
npm run dev
```

Production build:

```bash
npm run build
```

---

## 8. Start the server

```bash
php artisan serve
```

The application will be available at:

```
http://localhost:8000
```

---

# GitHub Login Configuration

1. Go to:

```
https://github.com/settings/developers
```

2. Create a new **OAuth App**

Configure:

```
Homepage URL:
http://localhost:8000

Authorization callback URL:
http://localhost:8000/auth/github/callback
```

Then add to `.env`:

```
GITHUB_CLIENT_ID=
GITHUB_CLIENT_SECRET=
GITHUB_REDIRECT_URI=http://localhost:8000/auth/github/callback
```

---

# OpenAI Configuration

Add your API key to the `.env` file:

```
OPENAI_API_KEY=
```

This key will be used to detect semantically duplicated questions.

---

# Tests

Run automated tests:

```bash
php artisan test
```

or

```bash
./vendor/bin/pest
```

---

# Project Structure

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

# Roadmap

Planned features:

* Room system
* Real-time updates using WebSockets
* Tag system
* Notifications
* Analytics dashboard

---

# Contributing

Contributions are welcome.

1. Fork the repository
2. Create a new branch

```bash
git checkout -b feature/new-feature
```

3. Commit your changes

```bash
git commit -m "feat: new feature"
```

4. Push to your branch

```bash
git push origin feature/new-feature
```

5. Open a Pull Request

---

# License

This project is licensed under the **MIT License**.

---

# Author

ken

GitHub:

[https://github.com/saitoken241](https://github.com/saitoken241)

Linkedin: 

