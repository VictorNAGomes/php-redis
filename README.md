# Projeto de Estudos com PHP Vanilla e Tecnologias Relacionadas

Este é um projeto de estudos que utiliza PHP Vanilla, Docker para configurar os containers da aplicação, cache com Redis, Nginx e Load Balancer.

## Objetivo

O objetivo deste projeto é explorar e aprender sobre a criação e configuração de uma aplicação utilizando PHP Vanilla e tecnologias associadas, incluindo Docker para gerenciamento de containers, Redis para cache, Nginx para servidor web e um Load Balancer para distribuição de carga.

## Tecnologias Utilizadas

- **PHP Vanilla**: Utilizado como linguagem principal de programação, sem o uso de frameworks ou bibliotecas adicionais.
- **Docker**: Utilizado para criar e gerenciar os containers da aplicação, facilitando o desenvolvimento e implantação.
- **Redis**: Utilizado para implementar um sistema de cache, melhorando a performance da aplicação.
- **Nginx**: Utilizado como servidor web para servir os arquivos estáticos e direcionar o tráfego para a aplicação.
- **Load Balancer**: Utilizado para distribuir a carga de tráfego entre os diferentes containers da aplicação, garantindo escalabilidade e alta disponibilidade.

## Como Executar o Projeto

Para executar este projeto localmente, siga estas etapas:

1. Clone este repositório para o seu ambiente local.
2. Navegue até o diretório raiz do projeto.
3. Execute o comando `docker compose up` para construir e iniciar os containers da aplicação.
4. Após os containers estarem funcionando, acesse o host http://localhost:3306 para se conectar ao servidor MySQL localmente, utilizando o usuário `root` e a senha `secret`. Em seguida, importe o arquivo database.sql. Isso criará o banco de dados necessário para a aplicação.
5. Acesse a aplicação em seu navegador através do endereço `http://localhost`.

Certifique-se de ter as portas necessárias abertas em seu ambiente local para acessar a aplicação.
