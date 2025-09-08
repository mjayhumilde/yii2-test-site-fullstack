# Test Site: Full-Stack Task (Internship at Virtual Wonders Web Solution)

This project, **Test Site**, is a full-stack application created as part of my internship at **Virtual Wonders Web Solution**. The task involves building a portfolio and blog system using the **Yii2 PHP Framework** with **Bootstrap 5** for styling and **MySQL/MariaDB** for the database.

## 🌐 Project Features

- **Portfolio Management (CRUD):** A portfolio system where users can create, read, update, and delete project information.
- **Blog Management (CRUD):** A blog system for managing blog posts, including titles, descriptions, and images.
- **Blog Search Functionality:** Case-insensitive search feature that allows users to search through blog titles and descriptions.
- **Admin Panel:** Secure backend for managing all portfolio and blog data, with authentication and authorization using Yii2's user management system.
- **Responsive Design:** The frontend uses **Bootstrap 5** to ensure the website is responsive and visually appealing across all devices.

## 🗃️ Database Schema

The database schema includes several key tables:

- **`portfolio`**: Stores project details such as title, description, and images.
- **`blog`**: Manages blog posts, including the title, content, and metadata.
- **`user`**: Handles user authentication for accessing the backend admin panel.

The **`user`** table is essential for securing the admin panel and managing other CRUD operations.

## 🛠️ Tech Stack

- **Framework:** Yii2
- **Backend:** PHP
- **Frontend:** HTML, CSS (Bootstrap 5), JavaScript
- **Database:** MySQL/MariaDB
- **Web Server:** Apache (XAMPP compatible)

---

## 🛠️ **How to Install Test Site: Full-Stack Task**

Follow these steps to set up the **Test Site** project on your local development environment.

### **1. Prerequisites**

Before starting, make sure you have the following installed:

- **PHP** (PHP 7.4 or later)
- **Composer** (for managing PHP dependencies)
- **MySQL or MariaDB** (for the database)
- **XAMPP/WAMP/MAMP** (recommended for local development)
- **phpMyAdmin** (optional, but recommended for database management)

---

### **2. Clone the Repository**

Clone the **Test Site** repository to your local machine:

```bash
git clone https://github.com/mjayhumilde/yii2-test-site-fullstack.git
cd yii2-test-site-fullstack
```

### **3. Install Dependencies**

After cloning the repository, install the necessary dependencies using Composer:

```bash
composer install
```

This will install all required PHP packages and dependencies.

### **4. Initialize the Application**

Initialize the Yii2 application by running:

```bash
php init
```

Select **Development** environment when prompted for local development.

### **5. Configure Database**

#### Create a Database:
1. Open **phpMyAdmin** (usually accessible at `http://localhost/phpmyadmin`)
2. Create a new database, e.g., `test_site_db`

#### Update Database Configuration:
Navigate to `common/config/` and create/update the `main-local.php` file:

```php
<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=test_site_db',
            'username' => 'root', // Your MySQL username (default: root for XAMPP)
            'password' => '',     // Your MySQL password (default: empty for XAMPP)
            'charset' => 'utf8',
        ],
    ],
];
```

Replace the username and password with your actual database credentials.

### **6. Run Migrations**

Run the Yii2 migrations to set up the database tables:

```bash
php yii migrate
```

This will create the necessary database tables including:
- `portfolio` table
- `blog` table  
- `user` table
- Other system tables

### **7. Set Up Virtual Hosts (Optional but Recommended)**

For better development experience, set up virtual hosts:

#### Apache Configuration:
Add to your `httpd-vhosts.conf` file:

```apache
<VirtualHost *:80>
    ServerName testsite.local
    DocumentRoot "C:/path/to/your/project/frontend/web"
    
    <Directory "C:/path/to/your/project/frontend/web">
        RewriteEngine on
        RewriteBase /
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteRule . index.php
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

<VirtualHost *:80>
    ServerName admin.testsite.local
    DocumentRoot "C:/path/to/your/project/backend/web"
    
    <Directory "C:/path/to/your/project/backend/web">
        RewriteEngine on
        RewriteBase /
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteRule . index.php
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

#### Update Hosts File:
Add to your `C:\Windows\System32\drivers\etc\hosts` file:

```
127.0.0.1 testsite.local
127.0.0.1 admin.testsite.local
```

### **8. Access the Application**

#### Without Virtual Hosts:
- **Frontend:** `http://localhost/your-project-name/frontend/web`
- **Backend (Admin):** `http://localhost/your-project-name/backend/web`

#### With Virtual Hosts:
- **Frontend:** `http://testsite.local`
- **Backend (Admin):** `http://admin.testsite.local`

### **9. Create Admin User (Optional)**

To access the admin panel, you may need to create an admin user. You can do this through the Yii2 console:

```bash
php yii user/create-admin
```

Or create a user directly in the database with appropriate permissions.

---

## 📁 Project Structure

```
yii2-test-site-fullstack/
├── backend/          # Admin panel
├── frontend/         # Public website
├── common/           # Shared components
├── console/          # Command line scripts
├── environments/     # Environment configurations
└── vendor/           # Composer dependencies
```

## 🔧 Development Notes

- The blog search functionality supports case-insensitive searching through blog titles and descriptions
- Bootstrap 5 is used for responsive design
- The project follows Yii2's MVC architecture
- All CRUD operations are secured through Yii2's built-in authentication system

## 🚀 Features Implemented

- ✅ Portfolio CRUD operations
- ✅ Blog CRUD operations
- ✅ Blog search functionality
- ✅ Responsive design with Bootstrap 5
- ✅ Admin authentication system
- ✅ Image upload and management
- ✅ Database migrations

## 🐛 Troubleshooting

### Common Issues:

1. **Database Connection Error:** Ensure your database credentials in `main-local.php` are correct
2. **Composer Dependencies:** Run `composer install` if you encounter missing class errors
3. **Permissions:** Ensure proper file permissions for web directories
4. **Search Not Working:** Verify you're using MySQL/MariaDB compatible syntax (not PostgreSQL)

### For Additional Help:
- Check Yii2 documentation: https://www.yiiframework.com/doc/guide/2.0/en
- Verify XAMPP/server configuration
- Check PHP and database error logs

---

**Created by:** Mark John Humilde as part of internship at Virtual Wonders Web Solution
