# 🚀 Linux Microsserviços — Docker Swarm Stack

Projeto prático de arquitetura distribuída utilizando Docker Swarm para simular um ambiente real de microsserviços com proxy reverso, aplicação backend e banco de dados isolado em rede interna.

---

## 📌 Objetivo

Demonstrar na prática a construção e organização de uma stack containerizada contendo:

- Orquestração de serviços
- Comunicação entre containers
- Rede overlay
- Proxy reverso
- Isolamento de banco de dados
- Deploy distribuído

Projeto criado com foco em aprendizado prático de **DevOps, Cloud e Infraestrutura Moderna**.

---

## 🏗 Arquitetura

Usuário → Nginx (Proxy) → App PHP → MySQL


Fluxo:

1. Requisição HTTP chega no Nginx
2. Nginx encaminha para serviço PHP
3. Aplicação processa lógica
4. App consulta banco MySQL via rede interna
5. Resposta retorna ao cliente

---

## 🧰 Stack utilizada

- Docker
- Docker Swarm
- Nginx
- PHP 8.2
- MySQL 8
- Linux

---

## 📁 Estrutura do projeto

Linux-microsservi-os/
│
├── app/ → aplicação PHP
├── database/ → script inicial SQL
├── nginx/ → config proxy reverso
├── docs/ → documentação extra
├── docker-compose.yml → stack swarm
└── Dockerfile → build da aplicação


---

## ⚙️ Como executar

### 1 — Iniciar swarm

docker swarm init


---

### 2 — Build das imagens

docker build -t app-php:1.0 .
docker build -t nginx-proxy:1.0 ./nginx


---

### 3 — Deploy da stack

docker stack deploy -c docker-compose.yml microsservicos


---

### 4 — Verificar serviços

docker service ls


---

### 5 — Acessar

http://localhost


---

## 🧪 Testes internos

Testar comunicação entre containers:

docker exec -it <container> sh
curl http://app


---

## 📚 Conceitos aplicados

- Arquitetura de microsserviços
- Proxy reverso
- Orquestração de containers


---

## 🎯 Aprendizados

Durante o desenvolvimento foram praticados:

- Diagnóstico de containers
- Análise de logs
- Resolução de falhas de serviço
- Organização de infraestrutura
- Padronização de ambientes

---

## 👨‍💻 Autor

Desenvolvido por **Xandnn**  
Projeto educacional e demonstrativo...

---


