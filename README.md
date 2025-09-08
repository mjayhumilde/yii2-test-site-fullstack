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

### **8. Create Admin Account**

To access the backend admin panel, follow these steps to create and verify an admin account:

#### Step 1: Create Account via Frontend
1. Go to `http://localhost/your-project-name/frontend/web/site/signup` (or `http://testsite.local/site/signup` if using virtual hosts)
2. Fill out the signup form with your desired admin credentials
3. Submit the form

#### Step 2: Get Verification Token
1. Navigate to your project directory and go to `frontend/runtime/email/`
2. Find the verification email file (usually the latest .eml file)
3. Open the email file and look for the verification URL
4. Copy the `verification_token` parameter from the URL

#### Step 3: Update Token in Database
1. Open **phpMyAdmin** and navigate to your database
2. Go to the `user` table
3. Find your newly created user account
4. Copy the `verification_token` value from the database

#### Step 4: Verify Account
1. Take the verification URL from the email file
2. Remove any special characters that might have been added
3. Replace the token in the URL with the `verification_token` from the database
4. Paste the corrected URL in your browser and access it
5. Your account should now be verified and activated

#### Step 5: Access Admin Panel
1. Go to `http://localhost/your-project-name/backend/web` (or `http://admin.testsite.local` if using virtual hosts)
2. Login with the credentials you created during signup
3. You can now start creating blogs and portfolio projects that will be displayed on the frontend

### **9. Access the Application**

#### Without Virtual Hosts:
- **Frontend:** `http://localhost/your-project-name/frontend/web`
- **Backend (Admin):** `http://localhost/your-project-name/backend/web`

#### With Virtual Hosts:
- **Frontend:** `http://testsite.local`
- **Backend (Admin):** `http://admin.testsite.local`

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
5. **Email Verification Issues:** Make sure the `frontend/runtime/email/` directory has proper write permissions
6. **Admin Access Problems:** Double-check that the verification token matches exactly between the email file and database
7. **Security Concern:** Remember that all verified users currently have admin access because im only 1 month as an intern and have a very short amount of time studying there techstack

### For Additional Help:
- Check Yii2 documentation: https://www.yiiframework.com/doc/guide/2.0/en
- Verify XAMPP/server configuration
- Check PHP and database error logs

---

**Created by:** Mark John Humilde as part of internship at Virtual Wonders Web Solution
