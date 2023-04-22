# Restaurante para todos
Para executar o projeto "restaraunte-para-todos" que está disponível no GitHub, você precisa ter alguns pré-requisitos e seguir os seguintes passos:

Pré-requisitos:
- Node.js instalado na sua máquina
- Banco de dados MySQL instalado e configurado
- Um editor de código, como o Visual Studio Code ou o Sublime Text

Passos para executar o projeto:

1. Faça o download do projeto em https://github.com/RaphaCalixto/restaraunte-para-todos
2. Abra o terminal na pasta raiz do projeto e execute o comando `npm install` para instalar as dependências necessárias.
3. Crie um banco de dados MySQL vazio com o nome `restaurante_para_todos`.
4. Duplique o arquivo `.env.example` e renomeie a cópia para `.env`. Em seguida, configure as variáveis de ambiente de acordo com o seu ambiente.
5. Execute o comando `npm run knex:migrate` para executar as migrations e criar as tabelas do banco de dados.
6. Execute o comando `npm run knex:seed` para popular as tabelas com os dados iniciais.
7. Finalmente, execute o comando `npm start` para iniciar o servidor.

Com isso, o projeto será executado e você poderá acessá-lo em `http://localhost:3000`.
