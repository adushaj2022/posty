# Posty

Posty is a social site where users can make posts, like each others posts, and view others profiles

# Tech Stack

Laravel <br>
PostgreSQL <br>
Tailwind <br>

## Installation

Make sure Php, composer and postgres are installed locally

```bash
git clone https://github.com/adushaj2022/posty.git
Run composer install or php composer.phar install
Run php artisan key:generate
Run php artisan migrate
Run php artisan db:seed to run seeders, if any.
```
Rename .env.example file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
## Usage

```bash
Run php artisan serve

```
## Features
<ul>
  <li>Pagination</li>
  <li>Liking and unliking posts</li>
  <li>Protected Auth Routes</li>
  <li>Demo SMTP server</li>
</ul>

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.
