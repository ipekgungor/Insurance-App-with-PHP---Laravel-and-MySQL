# Insurance App with PHP - Laravel and MySQL

This project is a web-based Insurance Management System developed with Laravel, designed to manage insurance policies, companies, and types effectively. The application allows users to view insurance policies, filter them by type, and explore policies by company.

## Features

**Policy Listing:** All insurance policies can be viewed in a table, including detailed information such as name, description, company, price, and more.
**Filter by Type:** Policies can be filtered based on their type.
**Company View:** Users can view insurance policies offered by a specific company.
**Policy Detail:** Users can access detailed information about a specific policy, including its coverage, terms, and benefits.

## Requirements

- **PHP:** 8.0 or later
- **Laravel:** PHP Framework 
- **Composer**
- **MySQL:** Database management system
- **Bootstrap**

## Installation Instructions

To run this project locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/ipekgungor/Insurance-App-with-PHP---Laravel-and-MySQL.git
2. Navigate to the Project Directory:
   ```bash
    cd Insurance-App-with-PHP---Laravel-and-MySQL
3. Install Dependencies:
   ```bash
   composer install
4. Configure the .env file and update database.php file:
    '''bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=insurance_db
    DB_USERNAME=root
    DB_PASSWORD=password

    'database' => env('DB_DATABASE', 'insurance_company'),
6. Run the migration:
   ```bash
   php artisan migrate
7. Start the development server
   ```bash
   php artisan serve
   
## Contact
- **Developer:** İpek Güngör
- **Email:** ipekgungor2001@gmail.com
- **GitHub Profile:** ipekgungor

## Notes
- **I used xampp during PHP and MySQL installation. You can check your tables from phpMyAdmin and don't forget start Apache and MySQL. Additionally, the project should be inside the xampp/htdocs directory.**
- **You can find sql queries in the 'insert_policies.sql' file in the database folder.**
