# My Portfolio: A Project-Based Learning Experience (Yii2 Advanced Template)

This is a personal portfolio website created as a side project to learn **Yii2 PHP framework**. The project is specifically designed to provide hands-on experience with the core technologies used at my internship:

- **Yii2 Framework:** Understanding the Model-View-Controller (MVC) architecture and its core components.
- **SQL Database:** Gaining practical experience with database design, data storage, and interaction.
- **Gii Code Generator:** Utilizing Yii2's powerful code generator to rapidly build and manage models, views, and controllers, which accelerates development and reinforces best practices.

By building this project, I am focusing on a practical application of these technologies to create a functional, modern website with a separation of concerns for the frontend and a secure backend.

---

## ⚙️ Project Features and Database Schema

The project includes a full **CRUD** (Create, Read, Update, Update, Delete) implementation for managing a portfolio. The database schema, visible in phpMyAdmin, consists of the following key tables:

- **`file`**: Manages uploaded files.
- **`migration`**: Tracks database changes.
- **`project`**: Stores portfolio project details.
- **`project_image`**: Stores images associated with projects.
- **`testimonial`**: Manages testimonials or endorsements.
- **`user`**: Handles user authentication and management for the backend.

The **`user`** table is used for securing the admin panel where the other tables' data can be managed.

---

## 🛠️ Tech Stack

- **Framework:** **Yii2**
- **Backend:** **PHP**
- **Frontend:** **HTML**, **CSS** (Bootstrap 5)
- **Database:** **SQL** (e.g., MySQL)

---

## 📦 Installation

Follow these steps to get a local copy of the project up and running.

1.  **Clone the repository:**

    ```bash
    git clone [https://github.com/your-username/your-repo-name.git](https://github.com/your-username/your-repo-name.git)
    cd your-repo-name
    ```

2.  **Initialize the project:**

    ```bash
    php init
    ```

    Choose the `Development` environment and confirm the initialization.

3.  **Install Composer dependencies:**

    ```bash
    composer install
    ```

4.  **Configure the database:**

    - Create a new **SQL** database named `portfolio`.
    - Update the database connection details in **`common/config/main-local.php`**.
    - Run database migrations to create the necessary tables.

    ```bash
    php yii migrate
    ```

5.  **Set up the web server:**
    - Point the document root for your frontend to the **`frontend/web`** directory.
    - Point the document root for your backend to the **`backend/web`** directory.
    - Ensure pretty URLs are enabled in your web server configuration for both applications.

---

## 🤝 Contributing

This project is a personal portfolio. However, if you find any issues or have suggestions, feel free to open an issue.

---

## 📄 License

This project is licensed under the MIT License - see the `LICENSE` file for details.
