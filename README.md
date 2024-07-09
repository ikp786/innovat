# Innovat Laravel Application

This is a Laravel-based application named Innovat. Below are the steps to set up and configure the application.

## Prerequisites

- PHP >= 8.2
- Composer
- MySQL

## Installation

### Step 1: Clone the repository

<pre>
<code>git clone https://github.com/ikp786/innovat.git && 
cd innovat
</code>

</pre>

### Step 2: Install Composer dependencies

<pre>
<code>composer install</code>
</pre>

### Step 3: Set up the environment configuration

<pre>
<code>cp .env.example .env</code>
</pre>

Update the `.env` file with the following:

<pre>
<code>APP_NAME=Innovat
APP_ENV=local
APP_KEY=
APP_DEBUG=false
APP_TIMEZONE=UTC
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=
ADMIN_EMAIL=
</code>
</pre>

### Step 4: Generate application key

<pre>
<code>php artisan key:generate</code>
</pre>

### Step 5: Run migrations

<pre>
<code>php artisan migrate</code>
</pre>

## Running the Application

Start the Laravel development server:

<pre>
<code>php artisan serve</code>
</pre>

The application will be accessible at [http://localhost:8000](http://localhost:8000).

## Additional Configuration

### Mail Configuration

Ensure the mail settings are properly configured in the `.env` file:

<pre>
<code>MAIL_MAILER=smtp
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=
ADMIN_EMAIL=
</code>
</pre>

### Database Configuration

Ensure the database settings are properly configured in the `.env` file:

<pre>
<code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
</code>
</pre>

## Deployment

For deployment, ensure the following:

- Set `APP_ENV` to `production` in `.env`.
- Set `APP_DEBUG` to `false` in `.env`.
- Configure a web server (Apache/Nginx) to serve the application.
- Configure a proper database and update `.env` accordingly.
- Ensure all necessary environment variables are set.

## License

This project is licensed under the MIT License.