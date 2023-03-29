*Buzzvel Test*

This is a simple Laravel project that implements a form for creating user profiles. It includes basic validation for the form fields and saves the data to a MySQL database.

Requirements

To run this project, you'll need the following installed on your system:

    PHP 7.4 or higher
    MySQL 5.7 or higher
    Composer

Installation

    Clone this repository to your local machine using git clone.
    Navigate to the project directory and run composer install to install the project dependencies.
    Rename the .env.example file to .env and update the database settings as needed.
    Run php artisan key:generate to generate an application key.
    Run php artisan migrate to create the necessary database tables.
    Start the development server by running php artisan serve.

Usage

To use the application, navigate to the home page (/) and click on the "Generate" button. Fill out the form and click the "Generate Image" button to save your profile and generate the QR Code.

License

This project is licensed under the MIT License. See the LICENSE file for more information.

Contributing

Contributions are welcome! Please feel free to open an issue or submit a pull request.

Acknowledgements

This project was created as part of the Buzzvel hiring process.
