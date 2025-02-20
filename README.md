# Event RSVP

A simple Laravel 10 application for managing event RSVPs, allowing users to register for events and manage their attendance.

## 🚀 Project Setup

Follow these steps to set up the project on your local machine:

### 1️⃣ Clone the Repository
```sh
git clone <repository-url>
cd event-rsvp
```

### 2️⃣ Install Dependencies
```sh
composer update
```

### 3️⃣ Configure the `.env` File
- Copy `.env.example` to `.env`
```sh
cp .env.example .env
```
- Update the database credentials in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eventrsvp
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Run Migrations and Seed Data
```sh
php artisan migrate --seed
```
This will create the required database tables and seed some initial data.

### 5️⃣ Serve the Application
```sh
php artisan serve
```
The application will be available at `http://127.0.0.1:8000/`

## 📌 Features
- Guest user can check Events
- User authentication
- RSVP system for loggedin users to attend / Withdraw events

## 🛠️ Technologies Used
- Laravel 10
- MySQL
- Livewire (for interactive UI components)
- Bootstarp CSS (for styling)