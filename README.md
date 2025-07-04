<h2># CodeIgniter 4 Application Starter</h2><br><br>

<h3>## What is CodeIgniter?</h3><br><br>

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.<br>
More information can be found at the [official site](https://codeigniter.com).<br><br>

This repository holds a composer-installable app starter.<br>
It has been built from the<br>
[development repository](https://github.com/codeigniter4/CodeIgniter4).<br><br>

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.<br><br>

You can read the [user guide](https://codeigniter.com/user_guide/)<br>
corresponding to the latest version of the framework.<br<br>

**## Installation & updates**<br><br>

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.<br><br>

When updating, check the release notes to see if there are any changes you might need to apply<br>
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.<br><br>

**## Setup**<br><br>

Copy `env` to `.env` and tailor for your app, specifically the baseURL<br>
and any database settings.<br><br>

**## Important Change with index.php**<br><br>

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,<br>
for better security and separation of components.<br><br>

This means that you should configure your web server to "point" to your project's *public* folder, and<br>
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the<br>
framework are exposed.<br><br>

**Please** read the user guide for a better explanation of how CI4 works!<br><br>

**## Repository Management**<br><br>

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.<br>
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss<br>
FEATURE REQUESTS.<br><br>

This repository is a "distribution" one, built by our release preparation script.<br>
Problems with it can be raised on our forum, or as issues in the main repository.<br<br>

**## Server Requirements**<br><br>

PHP version 8.1 or higher is required, with the following extensions installed:<br><br>

- [intl](http://php.net/manual/en/intl.requirements.php)<br>
- [mbstring](http://php.net/manual/en/mbstring.installation.php)<br><br>

> [!WARNING]<br>
> - The end of life date for PHP 7.4 was November 28, 2022.<br>
> - The end of life date for PHP 8.0 was November 26, 2023.<br>
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.<br>
> - The end of life date for PHP 8.1 will be December 31, 2025.<br><br>

Additionally, make sure that the following extensions are enabled in your PHP:<br><br>

- json (enabled by default - don't turn it off)<br>
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
#   c o d e i g n i t e r 4 
 
 
