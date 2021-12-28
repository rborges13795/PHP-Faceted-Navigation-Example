# PHP-Faceted-Navigation-Example
An implementation of Faceted Navigation using PHP on the Symfony framework
## Installation
You can clone the repository to a path of your choice or donwload the zip file and then extract it.
```
https://github.com/rborges13795/PHP-Faceted-Navigation-Example.git
```
## Configuration
- First thing that needs to be done is to change the `.env.example` file to just `.env` and add a string to `APP_SECRET`.
- Finally, run composer install with
```
composer install 
```
### Usage
Initiate your server and check the routes in /config/routes.yaml and copy the path under 'index'. From there you can explore the options and search for books and authors, among others.
To initiate a server:
```
php -S localhost:8080 -t public
```
## The Data
This app uses the 'Google Books Api' ([TMDb](https://www.themoviedb.org)) api as the source of the data and images used. You can find it ([here](https://developers.google.com/books/docs/v1/getting_started)).
## Requirements
- PHP >= 7.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
