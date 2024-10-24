# Project Setup ✨

This project uses Docker and Laravel Sail to provide a consistent development environment. It includes services for running a Laravel app and a PostgreSQL database.

## Prerequisites 🤓☝️

Make sure you have the following installed:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Laravel Sail](https://laravel.com/docs/8.x/sail)

## Getting Started 

### 1. Clone the repository

```bash
git clone https://github.com/Yoru-cyber/sistema-consultorio.git
cd project-name
```

### 2. Configure Environment

Copy the example `.env` file and adjust environment variables if necessary.

```bash
cp .env.example .env
```

Make sure the database environment variables match the configuration for the PostgreSQL service:

- `DB_CONNECTION=pgsql`
- `DB_HOST=pgsql`
- `DB_PORT=5432`
- `DB_DATABASE=your_database_name`
- `DB_USERNAME=your_database_user`
- `DB_PASSWORD=your_database_password`

### 3. Start the Application

Use Laravel Sail to start the Docker containers, if the containers aren't built this command will do it automatically:

```bash
./vendor/bin/sail up
```

To render correctly the client, you need to run this too:
```bash
./vendor/bin/sail npm run dev
```

Now if you run this command

```bash
Docker ps
```
You should have this services running:

- **laravel.test** (Laravel application)
- **pgsql** (PostgreSQL database)


### 4. Run Database Migrations

Migrate the database using Laravel's migration system:

```bash
./vendor/bin/sail artisan migrate
```

### 5. Access the Application

The Laravel app will be accessible at `http://localhost` by default. If you have modified the `APP_PORT` environment variable, use that port instead.

If you are running Vite for frontend assets, it will be accessible at `http://localhost:5173`.

### 6. Shutting Down

To stop and remove the containers, run:

```bash
./vendor/bin/sail stop
```

## Useful Commands

- **Access the Laravel container:**

  ```bash
  ./vendor/bin/sail shell
  ```

- **Run PHPUnit tests:**

  ```bash
  ./vendor/bin/sail test
  ```

- **Rebuild the containers:**

  If you make changes to the Dockerfile or environment, you may need to rebuild the containers:

  ```bash
  ./vendor/bin/sail build
  ```
<h2 align="center">That's all, au revoir!</h2>
<p align="center">
<img width="400" src="https://i.pinimg.com/736x/04/68/26/046826e8c2d4ff9c8e5ef9dc9ea47f70.jpg" alt="nami-swan" style="border-radius: 300px">
</p>
