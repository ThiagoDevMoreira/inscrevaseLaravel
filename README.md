# 📚 Inscreva-se!

**Projeto de demonstração** desenvolvido com Laravel e TailwindCSS, com foco em qualidade estrutural, organização de código e experiência do usuário.

Este projeto simula uma plataforma de cursos online, onde usuários podem se cadastrar como **alunos** ou **administradores**, se inscrever em cursos e acompanhar seu progresso. Foi idealizado como parte do meu portfólio com o objetivo de mostrar minha capacidade de desenvolver aplicações web completas, bem estruturadas e com interface agradável — tudo isso em poucas horas de trabalho.

---

## ✨ Destaques

- Interface clara, responsiva e com design leve (TailwindCSS).
- Sistema de autenticação seguro e moderno (Laravel Breeze).
- Pagina de entrada, **área do alunos** e **área administrativa**.
- Lógica real de inscrição em cursos, com controle de progresso e cancelamento.
- Administração de cursos: cadastro, edição, exclusão e listagem com contagem de inscritos.
- Código limpo, estruturado e preparado para crescer.

---

## 🚀 Como testar

1. Clone o repositório
2. Instale as dependências:
   ```bash
   composer install
   npm install && npm run dev

---

## 👤 Para quem é este projeto?

- **Recrutadores** buscando um desenvolvedor com visão completa (back e front-end).
- **Clientes** que desejam construir sistemas personalizados com lógica de negócio sob medida.
- Profissionais que valorizam **boa arquitetura, organização e entrega rápida**.

---

## 🛠️ Tecnologias

- **Laravel 10+**
- **TailwindCSS**
- **MySQL / SQLite**
- **Vite**
- **Blade Templates**

---

## 🧠 Boas práticas aplicadas

- Validação centralizada de dados em controllers.
- Separação clara entre lógica de apresentação (views) e lógica de negócio.
- Uso de Componentes Blade reutilizáveis como <x-alert /> e <x-app-layout />.
- Estrutura de diretórios organizada por papéis do usuário (AdmField, StudentField).
- Middleware de controle de acesso para proteger áreas administrativas.
- Sistema de flash messages para feedbacks de ações.

