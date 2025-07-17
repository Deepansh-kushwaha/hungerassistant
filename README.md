# 🍽️ HungerAssistant

**HungerAssistant** is a PHP-based food ordering assistant that enables users to browse menus, place orders, and manage deliveries using a simple web interface and backend PHP scripts.

## 🔢 Features

- Display menu items with descriptions and pricing
- User registration and authentication
- Add items to cart and place orders
- Admin panel to manage menu and view orders

## 📂 Project Structure

```
/
├── src/                # PHP application files
│   ├── public/         # Web-accessible files (index.php, CSS, JS)
│   ├── includes/       # Database connection and shared code
│   ├── vendor/         # Composer dependencies
│   └── templates/      # Header, footer, and layout templates
├── sql/
│   └── schema.sql      # (Optional) Database schema
├── backup/
│   └── hungerassistant_backup.sql  # Main database file
├── .env.example        # Sample environment variables
└── README.md           # Project documentation
```

## ✅ Requirements

- PHP 7.4 or higher
- Composer
- Web server (Apache or Nginx)
- MySQL or MariaDB database

## ⚖️ Installation & Setup

### 1. Clone the repository

```bash
git clone https://github.com/Deepansh-kushwaha/hungerassistant.git
cd hungerassistant
```

### 2. Install Composer dependencies

```bash
composer install
```

*If **`composer.json`** is missing, skip this step.*

### 3. Create the database

```sql
CREATE DATABASE hungerassistant CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 4. Import database from backup

```bash
mysql -u <db_user> -p hungerassistant < backup/hungerassistant_backup.sql
```

### 5. Configure environment

Copy `.env.example` and update database credentials:

```env
DB_HOST=127.0.0.1
DB_NAME=hungerassistant
DB_USER=your_db_user
DB_PASS=your_db_password
```

### 6. Set document root

Point your web server to the `src/public` directory.

#### Apache:

```apache
DocumentRoot /path/to/hungerassistant/src/public
<Directory "/path/to/hungerassistant/src/public">
    AllowOverride All
    Require all granted
</Directory>
```

#### Nginx:

```nginx
root /path/to/hungerassistant/src/public;
index index.php index.html;
```

### 7. Composer Autoload

```bash
cd src
composer dump-autoload
```

### 8. Start the application

**Development mode:**

```bash
cd src/public
php -S localhost:8000
```

Visit [http://localhost:8000](http://localhost:8000) in your browser.

## 💡 Usage

- Register a new user or log in
- Browse menu items, add to cart, and check out
- Admins can navigate to `/admin` to manage content

## ⚙️ Configuration

| Variable | Description       | Example            |
| -------- | ----------------- | ------------------ |
| DB\_HOST | Database host     | 127.0.0.1          |
| DB\_NAME | Database name     | hungerassistant    |
| DB\_USER | Database username | root               |
| DB\_PASS | Database password | your\_db\_password |

## 📄 Database Schema

- `users` - Stores user information
- `menu_items` - Contains menu details
- `orders` - Tracks orders
- `order_items` - Links orders with menu items

Schema details can be found in `backup/hungerassistant_backup.sql`.

## 📚 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/YourFeature`)
3. Commit your changes
4. Push to the branch (`git push origin feature/YourFeature`)
5. Open a Pull Request

## 🗓️ License

This project is licensed under the [MIT License](LICENSE).

## 📱 Contact

For queries or suggestions, open an issue or reach out via GitHub Discussions.

