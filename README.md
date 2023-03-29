<h1>Buzzvel Test</h1>
<p>This is a simple Laravel project that implements a form for creating user profiles. It includes basic validation for the form fields, saves the data to a MySQL database, simple tests with PHPUnit, docker and deploy.</p>
<h4>Requirements</h4>
<p>To run this project, you'll need the following installed on your system:</p>
<ul>
  <li>PHP 7.4 or higher</li>
  <li>MySQL 5.7 or higher</li>
  <li>Composer</li>
</ul>
<h4>Installation</h4>
<ol>
  <li>Clone this repository to your local machine using git clone.</li>
  <li>Navigate to the project directory and run composer install to install the project dependencies.</li>
  <li>Rename the .env.example file to .env and update the database settings as needed.</li>
  <li>Run php artisan key:generate to generate an application key.</li>
  <li>Run php artisan migrate to create the necessary database tables.</li>
  <li>Start the development server by running php artisan serve.</li>
</ol>
<h4>Usage</h4>
<p>To use the application, navigate to the home page (/) and click on the "Generate" button. Fill out the form and click the "Generate Image" button to save your profile and generate the QR Code.</p>
<h4>License</h4>
<p>This project is licensed under the MIT License. See the LICENSE file for more information.</p>
<h4>Contributing</h4>
<p>Contributions are welcome! Please feel free to open an issue or submit a pull request.</p>
<h4>Acknowledgements</h4>
<p>This project was created as part of the Buzzvel hiring process.</p>
<h4>Deploy</h4>
<p>The project is online on <a href="https://buzzvel-test.herokuapp.com">https://buzzvel-test.herokuapp.com</a>, go check! :)</p>
