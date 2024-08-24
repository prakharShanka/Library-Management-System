# Library Management System

This project is a web-based Library Management System built with PHP and MySQL. It allows admins to manage books and users, handle book requests, and perform various administrative tasks, while users can browse, request, and view books.

## Project Structure

- **LICENSE**: Contains the licensing information for the project.
- **README.md**: Overview of the project and instructions on how to use it.
- **requirements.txt**: Lists the PHP version, MySQL version, and required PHP extensions.

### Directories:
- **src/**: Contains all the PHP scripts and assets for running the project.
  - **style/**: CSS styles for the web application.
  - **assets/**: Images and icons used in the application.
- **uploads/**: Directory for user-uploaded content, such as book images.
- **database/**: SQL script for setting up the database schema.

## Requirements

This project requires the following:
- PHP >= 7.4
- MySQL >= 5.7
- Required PHP Extensions: pdo_mysql, mbstring, openssl, tokenizer, xml, ctype, json

## Installation

1. Clone the repository to your local machine.
2. Set up the database using the `library_management.sql` file located in the `database/` directory.
3. Configure your web server (e.g., Apache or Nginx) to serve the project files.
4. Ensure that the required PHP extensions are enabled.

## Usage

1. Navigate to the application in your web browser.
2. Admin users can log in to manage books and users, while regular users can browse and request books.
3. The application is accessible at `http://your-server-address/index.php`.

## License

This project is licensed under the MIT License. See the LICENSE file for more details.
