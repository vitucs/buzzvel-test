<h1>Buzzvel Test</h1>

<p>This is a Laravel project that implements a form for creating user profiles. It includes basic validation for the form fields, saves the data to a MySQL database, simple tests with PHPUnit, docker and deploy.</p>

<h2>Requirements</h2>

<p>To run this project, you'll need the following installed on your system:</p>

<ul>
  <li>PHP 7.4 or higher</li>
  <li>MySQL 5.7 or higher</li>
  <li>Composer</li>
</ul>

<h2>Installation</h2>

<ol>
  <li>Clone this repository to your local machine using <code>git clone</code>.</li>
  <li>Navigate to the project directory and run <code>composer install</code> to install the project dependencies.</li>
  <li>Rename the <code>.env.example</code> file to <code>.env</code> and update the database settings as needed.</li>
  <li>Run <code>php artisan key:generate</code> to generate an application key.</li>
  <li>Run <code>php artisan migrate</code> to create the necessary database tables.</li>
  <li>Start the development server by running <code>php artisan serve</code>.</li>
</ol>

<h2>Usage</h2>

<p>To use the application, navigate to the home page (/) and click on the "Generate" button. Fill out the form and click the "Generate Image" button to save your profile and generate the QR Code.</p>

<h2>License</h2>

<p>This project is licensed under the MIT License. See the LICENSE file for more information.</p>

<h2>Contributing</h2>

<p>Contributions are welcome! Please feel free to open an issue or submit a pull request.</p>

<h2>Acknowledgements</h2>

<p>This project was created as part of the Buzzvel hiring process.</p>

<h2>Deploy</h2>

<p>The project is online on <a href="https://buzzvel-test.herokuapp.com">https://buzzvel-test.herokuapp.com</a>, go check! :)</p>
