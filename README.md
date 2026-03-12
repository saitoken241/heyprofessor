[![development](https://github.com/saitoken241/heyprofessor/actions/workflows/laravel.yml/badge.svg?branch=develop)](https://github.com/saitoken241/heyprofessor/actions/workflows/laravel.yml)


# 🗳️ Question Voting System (HeyProfessor)

Uma plataforma interativa de perguntas e respostas em tempo real, onde a comunidade decide o que é mais relevante através de votos. Ideal para sessões de Q&A, aulas ao vivo e webinars.

## 🚀 Funcionalidades

* **Autenticação Segura**: Login social exclusivo via **GitHub**.
* **Gestão de Perguntas**: 
    * Criação de perguntas com limite de caracteres.
    * Edição e exclusão de perguntas (disponível apenas enquanto a pergunta não for publicada ou não possuir votos).
* **Sistema de Votos**: Usuários podem votar nas melhores perguntas para que elas subam no ranking.
* **Moderação do Host**: 
    * Marcar perguntas como "Respondidas".
    * Arquivamento automático de perguntas respondidas (saem da lista principal).
* **Inteligência Artificial (OpenAI)**: 
    * Verificação inteligente de duplicidade: O sistema analisa semanticamente se uma pergunta similar já foi feita antes de permitir a postagem.
* **Interface Responsiva**: Design moderno construído com **Tailwind CSS** e **Flowbite**.

---

## 🛠️ Tecnologias

* **Backend**: [Laravel 11](https://laravel.com/) (PHP 8.3)
* **Frontend**: [Tailwind CSS](https://tailwindcss.com/) & [Flowbite](https://flowbite.com/)
* **Autenticação**: [Laravel Socialite](https://laravel.com/docs/socialite) (GitHub Driver)
* **IA**: [OpenAI API](https://openai.com/api/)
* **Banco de Dados**: PostgreSQL / MySQL

---

## 📦 Instalação e Configuração

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
