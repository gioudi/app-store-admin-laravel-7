Api Laravel Vue
Api rest basica que permite la realizacion de Crud por medio de laravel , que se consume en componentes de Vue.js:

Clonar repo
Requrimientos

Composer
Node js
Laragon , Wamp, Xampp
Laravel 7^*
Php 7.14^*
Mysql
Apache
En la carpeta raiz de su entorno de desarrollo digite git clone 
Instale dependencias digitando npm i y luego composer i
Renombre el archivo .env.example a .env
Aisgne la base de datos homestead y sus credenciales
En la terminal digite php artisan key:generate

A continuacion digite php artisan migrate:rollback --seed

Al digitar php artisan route:list podra visulizar las rutas actuales en este casi ubicadas en config/api.php

Inicie servicios digitando php artisan serve -- En una terminal diferente digite npm run watch para que se inicie la compilacion del webpack (css,js,bootstrap,componentes)

Acceda a la url http://127.0.0.1:3000/dashboard

Estructura
El projecto se realizo mediante la aplicacion de un scafolding de front end Laravel 7 , por lo tanto las vistas las encontra en la carpeta Resources/views , estas a su vez se renderizan por medio del archivo routes.js que se ejecuta dentro del archivo resources/app.js .

Migrations , Seeders and Model
Actualmente existen dos modelos , User y Article este ultimo es el que use en la realizacion de la api rest , cada uno tiene una migration CreateArticlesTable y CreateUsersTable,tambien un seeder ArticlesTableSeeder y UsersTableSeeder estos a su vez son llamados en DatabaseSeeder.

En el modelo aplique la proteccion fillable

Controladores
Api/AuthController y Article Controller son usados para la ejecucion del Crud por medio de los metodos get , post , put , y delete de acuerdo a lo solicitado en el documento .
