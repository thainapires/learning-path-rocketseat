<h3 align="center">
  ⚡ Projeto: Using docker in a simple app (nestjs boilerplate)
</h3>

## :rocket: Sobre o projeto

Este projeto é um simples boilerplate de uma aplicação NestJS simples. Nela, foram adicionadas as configurações necessárias para utilizar Docker.

## :computer: Tecnologias utilizadas

<table>
  <tr>
    <td><img src="https://img.shields.io/badge/nestjs-%23E0234E.svg?style=for-the-badge&logo=nestjs&logoColor=white" alt="NestJS Badge"></td>
    <td><img src="https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white" alt="Docker Badge"></td>
  </tr>
</table>

### 1. Comandos

Alguns comandos utilizados no decorrer do aprendizado.

#### 1. Redes

docker run -p 3001:3000 -d api

docker network connect id da rede id do container
docker network connect 3922f8c07003 440d7577461d

docker network inspect 3922f8c07003
docker container inspect 440d7577461d

docker run --network=primeira-network -p 3001:3000 -d api

#### 2. Volumes

docker exec -it 440d7577461d bash

docker volume create primeiro-volume
docker volume inspect primeiro-volume

## 📌 Como rodar?

Sem network e volumes:

```docker run -p 3001:3000 -d api```