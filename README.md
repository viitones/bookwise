-- filepath: /c:/Users/viton/OneDrive/Área de Trabalho/Dev/PHP/bookwise/README.md
# Bookwise

## Apresentação

Bookwise é um sistema de gerenciamento de livros onde os usuários podem cadastrar, visualizar e gerenciar seus livros favoritos. O projeto foi desenvolvido em PHP e utiliza um banco de dados para armazenar as informações dos livros.

## Funcionalidades

- **Cadastro de Usuários**: Permite que novos usuários se cadastrem no sistema.
- **Autenticação de Usuários**: Login e logout de usuários.
- **Cadastro de Livros**: Usuários autenticados podem cadastrar novos livros.
- **Visualização de Livros**: Todos os usuários podem visualizar a lista de livros cadastrados.
- **Edição e Exclusão de Livros**: Usuários podem editar e excluir seus próprios livros.
- **Validação de Dados**: Validação de dados de entrada para garantir a integridade das informações.

## Como Executar

### Pré-requisitos

- PHP 7.4 ou superior
- Servidor web (Apache, Nginx, etc.)
- Banco de dados MySQL ou MariaDB

### Passos para Configuração

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/seu-usuario/bookwise.git
   cd bookwise
   ```

2. **Configure o banco de dados:**

   Crie um banco de dados no MySQL ou MariaDB e importe o arquivo `database.sql` para criar as tabelas necessárias.

   ```sql
   CREATE DATABASE bookwise;
   USE bookwise;
   SOURCE /caminho/para/database.sql;
   ```

3. **Configure o arquivo de ambiente:**

   Renomeie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente, como as credenciais do banco de dados.

   ```env
   DB_HOST=localhost
   DB_NAME=bookwise
   DB_USER=seu-usuario
   DB_PASS=sua-senha
   ```

4. **Instale as dependências:**

   Se você estiver usando Composer, instale as dependências do projeto.

   ```bash
   composer install
   ```

5. **Inicie o servidor:**

   Inicie o servidor web e acesse o projeto no navegador.

   ```bash
   php -S localhost:8000
   ```

6. **Acesse o sistema:**

   Abra o navegador e acesse `http://localhost:8000` para começar a usar o Bookwise.

## Estrutura do Projeto

- **controllers/**: Contém os controladores responsáveis por lidar com as requisições HTTP.
- **models/**: Contém as classes de modelo que representam as entidades do banco de dados.
- **views/**: Contém os arquivos de visualização (HTML, CSS, JS) que são renderizados para o usuário.
- **public/**: Contém os arquivos públicos acessíveis pelo navegador, como imagens e arquivos CSS.
- **Validacao.php**: Classe responsável pela validação dos dados de entrada.

## Contribuição

Se você deseja contribuir com o projeto, sinta-se à vontade para abrir uma issue ou enviar um pull request no repositório do GitHub.

## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
