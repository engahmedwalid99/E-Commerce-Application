# 🛒 E-Commerce Full Stack Application

<div align="center">

### 🚀 Modern Full-Stack E-Commerce Platform Built with Laravel

A complete e-commerce web application built with **Laravel, PHP, SQLite, Blade, Tailwind CSS, JavaScript, and Vite**.

</div>

---

## 📌 About The Project

**E-Commerce Laravel Application** is a full-stack e-commerce platform built with **Laravel**.

The project is designed to provide a complete shopping platform with multiple user roles and dedicated dashboards for **Administrators and Users**.

It includes a complete authentication system, social authentication, user profile management, product management, an admin dashboard, a shopping cart and checkout flow, newsletter subscriptions, in-app notifications, validation, and role-based functionality.

The application follows the **Laravel MVC architecture** and uses Laravel Form Requests for validation and Eloquent Models for database interaction.

---

# ✨ Features

## 🔐 Authentication

The application includes a complete authentication system:

* 🔑 Traditional Login
* 📝 User Registration
* 🔒 Password Update
* 🚪 Logout
* 🛡️ Form Request Validation

---

## 🌐 Social Authentication

Users can authenticate using external social providers through **Laravel Socialite**:

* 🔵 Google Login
* ⚫ GitHub Login

---

## 👤 User Features

Registered users have access to their personal account:

* 👤 User Profile
* ✏️ Edit Profile Information
* 🔐 Change Password
* 🚪 Logout
* 🛍️ Browse Products
* 🔎 View Product Details
* 🛒 Shopping Cart
* 📦 Checkout & Orders
* 🔔 Notifications
* 🚫 Blocked User Handling

---

## 👨‍💻 Admin Dashboard

Administrators have access to a dedicated administration panel.

Admin features include:

* 📊 Admin Dashboard
* 🛍️ Product Management (Add / Update / List)
* 🗂️ Category Management
* 📦 Orders Management
* 👥 Users Management
* 🔔 Send & Manage Notifications
* 📧 Manage Newsletter Subscribers
* 🛡️ Role-Based Access Control (Middleware)

---

## 🛍️ Products

The application includes a product system with:

* 📋 Products Listing
* 🔎 Product Details
* 🗂️ Product Categories
* ➕ Add Products (Admin)
* 🗄️ Database Product Storage
* 🖼️ Product Image Upload Support
* ✅ Product Validation

---

## 🛒 Cart & Orders

* ➕ Add / Remove Items from Cart
* 💳 Checkout Flow
* 📦 Order Listing
* 🔎 Order Details

---

## 📧 Newsletter

The application includes a newsletter subscription system.

Features:

* 📩 Subscribe using email
* ✅ Email validation
* 🚫 Prevent duplicate email subscriptions
* 🗄️ Store newsletter subscribers in the database

Each email address can be registered for the newsletter only once.

---

## 🔔 Notifications

* 📬 Admin can send notifications to users
* 👁️ Users can view their notifications
* ✏️ Update / 🗑️ Delete notifications

---

# 🛡️ Security & Validation

The project uses several Laravel security and validation features:

* 🔒 CSRF Protection
* ✅ Laravel Form Requests
* 🔐 Password Authentication (Hashing)
* 🛡️ Role-based Access (Admin Middleware)
* 🚫 Blocked / Status-based User Access (User Middleware)
* 🚫 Duplicate Email Prevention
* 🔑 Environment Variables for Sensitive Configuration

---

# 🛠️ Technologies Used

| Technology            | Usage                          |
| --------------------  | ------------------------------ |
| 🐘 PHP 8.2+           | Backend Programming            |
| 🚀 Laravel            | Application Framework          |
| 🗄️ SQLite / MySQL     | Database                       |
| 🎨 Blade              | Server-Side Templates          |
| 💨 Tailwind CSS       | UI & Styling                   |
| ⚡ JavaScript         | Frontend Interactions          |
| 🔧 Vite               | Frontend Build Tool            |
| 📦 Composer           | PHP Dependency Management      |
| 📦 NPM                | Frontend Dependency Management |
| 🔐 Laravel Socialite  | Social Authentication          |
| 🐙 Git & GitHub       | Version Control                |

---

# 📦 Main Laravel Packages

The project currently uses packages including:

* `laravel/framework`
* `laravel/socialite`
* `laravel/tinker`
* `laravel/pail`
* `laravel/pint`
* `laravel/sail`
* `fakerphp/faker`
* `phpunit/phpunit`

---

# 📂 Project Structure

```text
E-commarce/
│
├── app/
│   ├── Console/
│   │   └── Commands/
│   │       └── create_admin.php
│   │
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/
│   │   │   ├── Auth/
│   │   │   ├── Card/
│   │   │   ├── News/
│   │   │   ├── Notifications/
│   │   │   ├── profile/
│   │   │   ├── User/
│   │   │   ├── CartController.php
│   │   │   └── OrderController.php
│   │   │
│   │   ├── Middleware/
│   │   │   ├── Admin/
│   │   │   └── User/
│   │   │
│   │   └── Requests/
│   │       ├── Admin/
│   │       ├── Auth/
│   │       ├── News/
│   │       ├── Notifications/
│   │       ├── Orders/
│   │       └── profile/
│   │
│   ├── Models/
│   │   ├── User.php
│   │   ├── Product.php
│   │   ├── Order.php
│   │   ├── OrderItem.php
│   │   ├── news.php
│   │   └── notification.php
│   │
│   └── View/
│       └── Components/
│           ├── footer.php
│           ├── navbar.php
│           └── success.php
│
├── bootstrap/
│
├── config/
│
├── database/
│   ├── migrations/
│   ├── factories/
│   └── seeders/
│
├── public/
│
├── resources/
│   └── views/
│       ├── Admin/
│       ├── Auth/
│       ├── Card/
│       ├── components/
│       ├── Contact/
│       ├── Extends/
│       ├── Notification/
│       ├── Orders/
│       ├── Pages/
│       ├── Products/
│       ├── User/
│       ├── 404.blade.php
│       └── welcome.blade.php
│
├── routes/
│   ├── web.php
│   └── console.php
│
├── storage/
│
├── tests/
│
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── vite.config.js
└── README.md
```

---

# 👥 User Roles

The application is built around two main roles:

```text
                    E-Commerce Application
                            │
                ┌───────────┴───────────┐
                │                       │
              Admin                    User
                │                       │
         Admin Dashboard             Profile
         Manage Products             Browse Products
         Manage Categories           Product Details
         Manage Orders               Cart & Checkout
         Manage Users                Orders
         Send Notifications          Notifications
         Manage Newsletter
```

### 👨‍💻 Admin

Administrators can manage products, categories, orders, users, notifications, and newsletter subscribers.

### 👤 User

Regular users can register, login, manage their profile, browse products, add items to their cart, checkout, and view their orders and notifications.

---

# 🌐 Main Routes

The application currently includes routes for:

### 🏠 Main Application

```text
/
products
product-details/{id}
profile
cart
checkout
orders
notifications
```

### 🔐 Authentication

```text
/login
/register
/logout
```

### 🌐 Social Login

```text
/auth/{driver}/redirect
/auth/{driver}/callback
```

Supported providers include:

```text
Google
GitHub
```

### 👨‍💻 Admin

```text
/admin/dashboard
/admin/products
/admin/orders
/admin/users
/admin/notifications
```

### 📧 Newsletter

```text
/subscribe
```

---

# 💻 Requirements

Before installing the project, make sure you have:

* PHP 8.2 or higher
* Composer
* MySQL (or SQLite for local development)
* Node.js
* NPM
* Git

Check your installed versions:

```bash
php -v
```

```bash
composer -V
```

```bash
node -v
```

```bash
npm -v
```

```bash
git --version
```

---

# 📥 Installation

## 1. Clone the Repository

Open your terminal and run:

```bash
git clone <repository-url>
```

Enter the project directory:

```bash
cd E-commarce
```

---

## 2. Install PHP Dependencies

```bash
composer install
```

---

## 3. Install Frontend Dependencies

```bash
npm install
```

---

## 4. Create `.env`

### Windows

```bash
copy .env.example .env
```

### Linux / macOS

```bash
cp .env.example .env
```

---

## 5. Generate Application Key

```bash
php artisan key:generate
```

---

# 🗄️ Database Configuration

By default, the project uses **SQLite** (`database/database.sqlite`).

If you prefer MySQL, create a database, for example:

```text
ecommerce
```

Then configure your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=
```

> Update the database username and password according to your MySQL configuration.

---

# 🔑 Authentication Configuration

If you want to use social authentication, configure the required credentials in `.env`.

Example:

```env
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_REDIRECT_URI=

GITHUB_CLIENT_ID=
GITHUB_CLIENT_SECRET=
GITHUB_REDIRECT_URI=
```

---

# 📧 Mail Configuration

Some application features may send emails.

Configure your mail settings in `.env`:

```env
MAIL_MAILER=
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME=
```

---

# 🗃️ Run Database Migrations

Run:

```bash
php artisan migrate
```

If you want to reset the database and run all migrations again:

```bash
php artisan migrate:fresh
```

If seed data is available:

```bash
php artisan migrate --seed
```

---

# 👑 Create an Admin User

The project includes a custom Artisan command to create an admin account:

```bash
php artisan create:admin
```

---

# 🔗 Storage Link

Since the application uses uploaded product images:

```bash
php artisan storage:link
```

---

# 🎨 Run Frontend

For development:

```bash
npm run dev
```

Keep this terminal running.

---

# 🚀 Start Laravel

Open another terminal and run:

```bash
php artisan serve
```

The application will normally be available at:

```text
http://127.0.0.1:8000
```

Open the URL in your browser.

---

# ⚡ Quick Start

After cloning the project, you can run:

```bash
git clone <repository-url>

cd E-commarce

composer install

npm install

copy .env.example .env

php artisan key:generate

php artisan migrate

php artisan storage:link

npm run dev
```

Then open another terminal:

```bash
php artisan serve
```

Or simply use the built-in dev script (runs server, queue, and Vite together):

```bash
composer run dev
```

---

# 🔐 Environment & Security

**Never upload your real `.env` file to GitHub.**

The `.env` file may contain sensitive information such as:

* Database credentials
* Application keys
* Mail credentials
* Google credentials
* GitHub credentials

The repository contains:

```text
.env.example
```

which should be used as a template.

---

# 📸 Application Pages

The project includes multiple interfaces and pages:

### Public Pages

* 🏠 Home
* 🛍️ Products
* 🔎 Product Details
* 📧 Newsletter Subscription
* 📄 FAQ / Privacy Policy / Terms / Shipping / Return Policy
* 📞 Contact

### Authentication Pages

* 🔐 Login
* 📝 Register

### User Pages

* 👤 Profile
* 🔐 Update Password
* 🛒 Cart
* 💳 Checkout
* 📦 Orders
* 🔔 Notifications

### Admin Pages

* 👨‍💻 Admin Dashboard
* 🛍️ Products Management
* 🗂️ Categories
* 📦 Orders Management
* 👥 Users Management
* 🔔 Notifications Management

---

# 🤝 Contributing

Contributions, improvements, and suggestions are welcome.

### 1. Fork the repository

### 2. Create a new branch

```bash
git checkout -b feature/new-feature
```

### 3. Make your changes

### 4. Commit your changes

```bash
git add .
git commit -m "Add new feature"
```

### 5. Push your branch

```bash
git push origin feature/new-feature
```

### 6. Open a Pull Request

---

# ⭐ Support

If you find this project useful or interesting, consider giving the repository a ⭐ on GitHub.

---

## 📄 License

This project is open-source and available for educational and development purposes.