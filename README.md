Laravel Registration Webpage
============================

This is a Laravel project for creating a registration webpage with user validation and database integration. The project allows users to register by providing their personal details and stores the information in a MySQL database. It also includes features such as client-side and server-side validations, uploading user images, and utilizing an external API to display actors born on the same day.

Features
--------

*   User registration form with the following fields:
    
    *   Full Name
    *   Username
    *   Birthdate
    *   Phone Number
    *   Address
    *   Password
    *   Confirm Password
    *   User Image
    *   Email
*   Client-side validations for mandatory fields, correct field types (email and birthdate), and password strength requirements.
    
*   Server-side validation to check if the username is already registered.
    
*   Header and footer pages for consistent design across the application.
    
*   User image upload functionality with server-side processing.
    
*   Integration with the "MDBI API" to retrieve a list of actors born on the same day as the user's birthdate.
    

Project Structure
-----------------

The project is structured as follows:

*   `Header.php`: Includes the header HTML code.
    
*   `Footer.php`: Includes the footer HTML code.
    
*   `Index.php`: Main page that includes the header and footer. It contains the user registration form.
    
*   `DB_Ops.php`: Contains database operations such as connecting to the MySQL database, inserting data, and performing server-side validation.
    
*   `Upload.php`: Handles the processing of uploaded user images.
    
*   `API_Ops.php` (or `API_Ops.js`): Contains the necessary code to connect to the MDBI API and retrieve data related to actors born on the same day.
    

Requirements
------------

To run this project, you need to have the following:

*   PHP (>=7.2)
*   Laravel (>=8.0)
*   MySQL database

Installation
------------

1.  Clone the repository:
    
    bash
    
    ```bash
    git clone https://github.com/your-username/your-repository.git
    ```
    
2.  Navigate to the project directory:
    
    bash
    
    ```bash
    cd your-repository
    ```
    
3.  Install the dependencies:
    
    bash
    
    ```bash
    composer install
    ```
    
4.  Create a `.env` file by duplicating the `.env.example` file and update the necessary configurations, such as the database credentials.
    
5.  Generate an application key:
    
    bash
    
    ```bash
    php artisan key:generate
    ```
    
6.  Run the database migrations:
    
    bash
    
    ```bash
    php artisan migrate
    ```
    
7.  Start the development server:
    
    bash
    
    ```bash
    php artisan serve
    ```
    
8.  Open your web browser and visit `http://localhost:8000` to access the registration webpage.
    

Contributing
------------

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or create a pull request.

License
-------

This project is licensed under the [MIT License](LICENSE). Feel free to use and modify the code according to your needs.

Credits
-------

This project was developed as an assignment for the IS333 Web-based information systems course at the Faculty of Computers and Artificial Intelligence, Cairo University.
