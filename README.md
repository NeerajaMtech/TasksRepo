# TasksRepo
# Assignment
# Tech Stack:
PHP 7+, Mysql, Laravel framework
Installed composer require guzzlehttp/guzzle package

Task #1: Weather API - AccionLabsProject.zip

1) Create a database in MySql 
2) Update .env file with respective Database details like db username and password
3) Run  php artisan migrate from the folder path 
	After executing the above artisan command a table "weatherapidata"
4) Below is the API to fetch weather data from https://openweathermap.org/ using the key and store data into database table "weatherapidata"
	URL: http://localhost/weather/fetchdata
	Method: GET
	Parameters: NA
7) Error handling - Any exception raised while fetching the data are stored in the log file.
8)  Displays message as successfully saved data or displays "Data has already been updated in the last one hour. Please try after" if tried to fetch data within 1 hour.



Task #2 : Palindrome

Demonstrates OOPS and Dependency Injection
1) Run below line from gitbash navigating to the application folder
php palindrome.php -- which displays the below output
	Returns whether given string is Palindrome or not 
	Returns the reverse string without using predefined functions

