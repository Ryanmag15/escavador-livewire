
# Projeto Laravel com Livewire e Sail

Este é um guia completo para configurar e rodar seu projeto Laravel com Livewire utilizando o Laravel Sail como ambiente de desenvolvimento com Docker.

## 🧱 Requisitos

- Docker instalado ([Instalar Docker](https://www.docker.com/get-started))
- Docker Compose instalado (vem junto com Docker Desktop)
- PHP não é necessário localmente (Sail usa containers)
- Node.js e npm/yarn se for usar frontend

## 🚀 Iniciando o Projeto

### 1. Clonar o Repositório (ou criar novo)

```bash
git clone https://github.com/Ryanmag15/escavador-livewire.git
cd escavador-livewire
```

### 2. Instalar Dependências

```bash
composer install
```

### 3. Subir os containers

```bash
./vendor/bin/sail up -d
```

### 4. Rodar as migrations

```bash
./vendor/bin/sail artisan migrate
```

### 5. (Opcional) Rodar seeders

```bash
./vendor/bin/sail artisan db:seed
```

### 6. Acessar o projeto

Abra o navegador em [http://localhost](http://localhost)

## 🔧 Outras Configurações

### Criar nova migration

```bash
./vendor/bin/sail artisan make:migration create_example_table
```

### Criar nova seeder

```bash
./vendor/bin/sail artisan make:seeder ExampleSeeder
```

### Rodar testes

```bash
./vendor/bin/sail artisan test
```

### Acessar o MySQL via CLI

```bash
./vendor/bin/sail mysql
```

## ⚙️ Serviços Configurados

- **PHP 8.4** (baseado em imagem `sail-8.4/app`)
- **MySQL 8.0** (`mysql/mysql-server:8.0`)
- **Livewire** já instalado no Laravel

## 📦 Portas mapeadas

- Laravel: `localhost:${APP_PORT:-80}`
- Vite (frontend): `localhost:${VITE_PORT:-5173}`
- MySQL: `localhost:${FORWARD_DB_PORT:-3306}`

## 🧠 Dicas úteis

- Para resetar o banco de dados:  
  ```bash
  ./vendor/bin/sail artisan migrate:fresh --seed
  ```

- Para rodar comandos com Sail mais rapidamente (alias):
  ```bash
  alias sail="./vendor/bin/sail"
  ```

---

Projeto pronto para desenvolvimento com Laravel, Sail e Livewire 🚀
