
# Salingbantu
Crowdfunding apps built with laravel

## Setup:
All you need is to run these commands:

```bash
git clone https://github.com/hellodit/salingbantu.git
cd salingbantu
composer install # Install backend dependencies
sudo chmod 777 storage/ -R # Chmod Storage
php artisan storage:link # Enable link to storage
cp .env.example .env # Update database credentials configuration
php artisan key:generate # Generate new keys for Laravel
php artisan migrate:fresh --seed  # Run migration and seed users and categories for testing

```
  
  

## Demo:

- Local demo:

`php artisan serve # Check installation (optional)`

Open browser at [localhost:8000/](http://localhost:8000/admin)
  

##Login Info:
Username: hellodit
Password: hellodit

