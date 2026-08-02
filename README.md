# Issue Tracker

A modern issue tracking system built with Laravel for managing projects, tracking issues, assigning tasks, and collaborating with team members.

> **Note:** This project is currently under active development.

## 🚀 Features

### Authentication
* User Registration & Login
* Laravel Breeze authentication
* API authentication using Laravel Sanctum
* Token-based API access

### Project Management
* Create projects
* Project ownership using user relationships
* Project status management
* API resource responses
* Form request validation

### Upcoming Features
* Issue Management
* Issue Assignment
* Comments & Discussions
* Dashboard & Statistics

## 🛠️ Tech Stack

* Laravel 13
* PHP 8.3
* MySQL
* Laravel Breeze
* Laravel Sanctum
* Blade
* Tailwind CSS
* Vite

## 📦 Installation

```bash
git clone https://github.com/<your-username>/issue-tracker.git

cd issue-tracker

composer install

cp .env.example .env

php artisan key:generate

# Configure your database in .env

php artisan migrate

npm install

npm run dev

php artisan serve
