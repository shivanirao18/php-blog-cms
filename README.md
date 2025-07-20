PHP Blog CMS
A lightweight and customizable blog content management system built with vanilla PHP and MySQL.
Features:
- Admin panel for managing posts, categories, and users
- User authentication and role-based access
- Rich text editor for writing blog content
- SEO-friendly URLs
- Responsive front-end design
Tech Stack:
- PHP (Vanilla)
- MySQL
- HTML/CSS/JS
- TinyMCE (or CKEditor for rich text editing)
Setup:
1.Clone the repo
```bash
git clone https://github.com/yourusername/php-blog-cms.git
cd php-blog-cms
```
2.Import the database
- Import `blog.sql` into your MySQL database using phpMyAdmin or the MySQL CLI.
3.Configure database connection
- Open `config/db.php` and update:
```php
$host = "localhost";
$dbname = "your_db_name";
$username = "your_username";
$password = "your_password";
```
4.Run the app
- Start a local server:
```bash
php -S localhost:8000
```
Admin Panel:
- Default admin credentials:
- **Username:** admin
- **Password:** admin123
Be sure to change this in production!
TODO:
- Add media/image manager
- Add comments with moderation
- Enable tagging and search
License:
MIT
