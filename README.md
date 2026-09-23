# IMB Educação — versão simples para estudo

Esta pasta é uma reconstrução do layout do projeto criado no Lovable usando tecnologias que você já conhece:

- PHP
- HTML
- CSS
- JavaScript

## O que foi retirado

Não dependemos mais de:

- React
- TypeScript / TSX
- Vite
- Bun
- TanStack Router
- Radix UI
- componentes específicos do Lovable

## O que foi mantido

A estrutura visual principal da landing page foi recriada, incluindo:

- Navbar responsiva
- Hero
- Estatísticas
- Sobre
- Diferenciais
- Como funciona
- Cursos
- Benefícios
- Depoimentos
- Blog
- FAQ
- CTA
- Rodapé
- imagens originais do projeto

## Como abrir

### Opção 1 — XAMPP

1. Coloque esta pasta dentro de `C:\xampp\htdocs\`
2. Inicie o Apache no XAMPP.
3. Abra no navegador:

`http://localhost/IMB-Educacao-PHP/`

### Opção 2 — servidor PHP

Abra o terminal dentro desta pasta e rode:

`php -S localhost:8000`

Depois acesse:

`http://localhost:8000`

## Próxima etapa

Esta versão é propositalmente simples para você conseguir entender e modificar.

Depois podemos transformar esta mesma estrutura em Laravel:

- `index.php` → Blade
- formulários → Controllers
- cursos → Models + MySQL
- login → autenticação Laravel
- área do aluno → rotas protegidas
- blog → banco de dados
- certificados → geração de certificados
- pagamentos → integração posterior

A ideia é não perder o layout enquanto transformamos o projeto em uma plataforma real.
