# PetLovers

## Sobre o Projeto
PetLovers é um site completo para gerenciamento de serviços de pet shop, desenvolvido em PHP seguindo o padrão MVC. O projeto oferece uma interface intuitiva para agendamentos, serviços e contato com clientes.

## Estrutura do Projeto
```
petlovers/
├── css/          # Arquivos de estilo
├── img/          # Imagens do site
├── js/           # Scripts JavaScript
├── lib/          # Bibliotecas
├── mail/         # Sistema de envio de emails
├── scss/         # Arquivos SASS
├── src/          # Código fonte
└── vendor/       # Dependências
```

## Páginas Principais
- index.html      - Página inicial
- about.html      - Sobre nós
- booking.html    - Sistema de agendamentos
- contact.html    - Formulário de contato
- service.html    - Lista de serviços
- price.html      - Tabela de preços
- single.html     - Página de detalhes

## Tecnologias Utilizadas
- PHP 7.4+
- JavaScript
- Bootstrap
- SASS/SCSS
- jQuery

## Requisitos
- Servidor Apache
- PHP 7.4 ou superior
- MySQL 5.7+
- Composer

## Instalação
1. Clone o repositório
2. Execute `composer install`
3. Configure o banco de dados em `config/database.php`
4. Configure o servidor de email em `mail/contact.php`

## Funcionalidades
- Sistema de agendamento online
- Gerenciamento de serviços
- Formulário de contato
- Sistema de envio de emails
- Validação de formulários
- Design responsivo

## Configuração de Email
O sistema utiliza PHPMailer para envio de emails. Configure as credenciais em `mail/contact.php`.

## Licença
Este projeto está sob a licença especificada no arquivo LICENSE.txt

## Contato
Para mais informações ou suporte, entre em contato através do formulário no site.

Citations:
[1] https://pplx-res.cloudinary.com/image/upload/v1733577420/user_uploads/jmjcyzbcb/petlovers-dir.jpg