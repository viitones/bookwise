# Bookwise

## Apresentação

Bookwise é um sistema de gerenciamento de livros onde os usuários podem cadastrar, visualizar e gerenciar seus livros favoritos. O projeto foi desenvolvido em PHP e utiliza um banco de dados SQLite para armazenar as informações dos livros.

## Funcionalidades

- **Cadastro de Usuários**: Permite que novos usuários se cadastrem no sistema.
- **Autenticação de Usuários**: Login e logout de usuários.
- **Cadastro de Livros**: Usuários autenticados podem cadastrar novos livros.
- **Visualização de Livros**: Todos os usuários podem visualizar a lista de livros cadastrados.
- **Validação de Dados**: Validação de dados de entrada para garantir a integridade das informações.

## Como Executar

### Pré-requisitos

- Herd
- Beekeeper Studio (opcional, para gerenciar o banco de dados)

### Passos para Configuração

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/viitones/bookwise.git
   cd bookwise
   ```

2. **Configure o banco de dados no Beekeeper Studio (opcional):**

   Abra o Beekeeper Studio e conecte-se ao banco de dados SQLite criado.

3. **Inicie o servidor:**

   Inicie o servidor web e acesse o projeto no navegador.

   ```bash
   php -t public/ -S localhost:8888 -d auto_prepend_file=server.php
   ```

4. **Acesse o sistema:**

   Abra o navegador e acesse `http://localhost:8888` para começar a usar o Bookwise.

## Estrutura do Projeto

- **controllers/**: Contém os controladores responsáveis por lidar com as requisições HTTP.
- **models/**: Contém as classes de modelo que representam as entidades do banco de dados.
- **views/**: Contém os arquivos de visualização (HTML, CSS, JS) que são renderizados para o usuário.
- **public/**: Contém os arquivos públicos acessíveis pelo navegador, como imagens e arquivos CSS.
- **Validacao.php**: Classe responsável pela validação dos dados de entrada.

## Contribuição

Se você deseja contribuir com o projeto, sinta-se à vontade para abrir uma issue ou enviar um pull request no repositório do GitHub.
