## Getting Started

These instructions will help you set up and deploy the project on your local machine.

### Prerequisites

Make sure you have the following installed on your machine:

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Composer](https://getcomposer.org/download/)

### Installation

1. Clone the repository:

   ```bash
   git clone git@github.com:hauzenberge/tz_from_IndagoDev.git

2. Change into the project directory: cd your-laravel-project

3. Install Composer dependencies: composer install

4. Copy the environment file and generate the application key: cp .env.example .env && php artisan key:generate

### Running with Laravel Sail

1. Start the Docker containers: ./vendor/bin/sail up

2. Open a new terminal window and run the database migrations and seed the database: ./vendor/bin/sail artisan migrate:refresh --seed

### Usage

Access your Laravel application at http://localhost

### Postman Collection and Environment

A Postman collection (TZ.postman_collection.json) and environment (TZ.postman_environment.json) for testing the API endpoints are provided in this repository.