# dw1-loja-php

Atividades das aulas de Desenvolvimento Web I. PHP 8.5 + Apache, MySQL 9.7 e phpMyAdmin via Docker Compose.

## Como rodar

```bash
cp .env.example .env   # preencha DATABASE_DATABASE e DATABASE_PASSWORD
docker compose up -d --build
```

- Aplicação: <http://localhost>
- phpMyAdmin: <http://localhost:8080> (usuário `root`, senha do `.env`)

Só a pasta `src/` é servida pelo Apache.

## Estrutura

- `aula1/`: fundamentos (variáveis, arrays, funções, formulários, PDO)
- `src/`: orientação a objetos (classes, getters/setters, membros estáticos, herança, `static::`)
- `sql/001-init.sql`: executado na primeira inicialização do MySQL

## Xdebug

Habilitado em toda requisição, porta `9003`. Mapeamento de caminho: `/var/www/html` → `src/`.
