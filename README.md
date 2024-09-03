# Laravel Inertia Vue SPA

This is a Single Page Application (SPA) built using Laravel, Inertia.js, and Vue.js. The application features multiple pages, including Home, Features, Pricing, FAQs, and About.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Contributing](#contributing)
- [License](#license)

## Installation

To get started with this project, follow these steps:

### 1. Clone the repository
```bash
git clone https://github.com/s1kopath/spa_layout-laravel_11-inertia-vue_3
```


```bash
cd spa_layout-laravel_11-inertia-vue_3
```

### 2. Install dependencies

#### Composer Dependencies


```bash
composer install
```

#### NPM Dependencies


```bash
npm install
```

### 3. Set up environment variables

Copy the `.env.example` file to `.env` and configure the necessary environment variables:


```bash
cp .env.example .env
```

### 4. Generate application key

Generate the application key, which is used for encryption:


```bash
php artisan key:generate
```

### 5. Set up the database

Update the `.env` file with your database credentials and run the migrations:


```bash
php artisan migrate
```

### 6. Build the front-end assets

Compile the front-end assets using Vite:


```bash
npm run dev
```

For production, use:


```bash
npm run build
```

### 7. Run the development server

Finally, start the Laravel development server:


```bash
php artisan serve
```

Now, you can access the application in your web browser at `http://localhost:8000`.

## Usage

This application provides a simple SPA with the following pages:

- Home
- Features
- Pricing
- FAQs
- About

You can navigate between these pages without a full page reload, thanks to Inertia.js.

## Configuration

Ensure that your `.env` file is correctly configured, particularly the following settings:

- `APP_NAME` - The name of your application
- `APP_URL` - The URL where your application is hosted

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request for any improvements.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
