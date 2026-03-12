[![development](https://github.com/saitoken241/heyprofessor/actions/workflows/laravel.yml/badge.svg?branch=develop)](https://github.com/saitoken241/heyprofessor/actions/workflows/laravel.yml)


Question Voting System (HeyProfessor)

Uma plataforma interativa de perguntas e respostas em tempo real, onde a comunidade decide o que é mais relevante através de votos. Ideal para sessões de Q&A, aulas ao vivo e webinars.
🚀 Funcionalidades

    Autenticação Segura: Login social exclusivo via GitHub.

    Gestão de Perguntas:

        Criação de perguntas com limite de caracteres.

        Edição e exclusão de perguntas (disponível apenas enquanto a pergunta não for publicada ou não possuir votos).

    Sistema de Votos: Usuários podem votar nas melhores perguntas para que elas subam no ranking.

    Moderação do Host:

        Marcar perguntas como "Respondidas".

        Arquivamento automático de perguntas respondidas (saem da lista principal).

    Inteligência Artificial (OpenAI):

        Verificação inteligente de duplicidade: O sistema analisa semanticamente se uma pergunta similar já foi feita antes de permitir a postagem.

    Interface Responsiva: Design moderno construído com Tailwind CSS e Flowbite.

🛠️ Tecnologias

    Backend: Laravel 11 (PHP 8.3)

    Frontend: Tailwind CSS & Flowbite

    Autenticação: Laravel Socialite (GitHub Driver)

    IA: OpenAI API (Model: gpt-3.5-turbo ou gpt-4o)

    Banco de Dados: PostgreSQL / MySQL (Suporte a múltiplos drivers)

📦 Instalação e Configuração

    Clone o repositório:
    Bash

    git clone https://github.com/seu-usuario/seu-repositorio.git
    cd seu-repositorio

    Instale as dependências:
    Bash

    composer install
    npm install

    Configure o ambiente:
    Bash

    cp .env.example .env
    php artisan key:generate

    Configure as chaves de terceiros no .env:
    Code snippet

    # GitHub OAuth
    GITHUB_CLIENT_ID=seu_id
    GITHUB_CLIENT_SECRET=seu_secret
    GITHUB_REDIRECT_URI=http://localhost:8000/auth/github/callback

    # OpenAI API
    OPENAI_API_KEY=sua_chave_aqui

    Rode as migrações e o servidor:
    Bash

    php artisan migrate
    npm run dev
    php artisan serve

🧠 Integração com OpenAI

Para evitar que o host receba 10 perguntas diferentes que significam a mesma coisa, implementamos uma camada de análise semântica.
Quando um usuário envia uma pergunta, o sistema:

    Recupera as perguntas ativas no banco de dados.

    Envia para a API da OpenAI para comparar a intenção do usuário.

    Retorna um alerta caso uma pergunta idêntica ou muito similar já tenha sido registrada.

🛡️ Segurança

    Proteção contra SQL Injection e XSS nativa do Laravel.

    Middleware de Autenticação: Apenas usuários logados via GitHub podem interagir.

    Políticas de Acesso (Policies): Garantem que um usuário só edite suas próprias perguntas antes de receberem votos.

📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.
