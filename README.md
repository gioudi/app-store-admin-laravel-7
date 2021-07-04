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
En la carpeta raiz de su entorno de desarrollo digite git clone https://github.com/Semi-dios/serempre.git
Instale dependencias digitando npm i y luego composer i
Renombre el archivo .env.example a .env
Asigne la base de datos prueba y sus credenciales
En la terminal digite php artisan key:generate

A continuacion digite php artisan migrate:rollback --seed

Al digitar php artisan route:list podra visulizar las rutas actuales en este casi ubicadas en config/api.php

Inicie servicios digitando php artisan serve -- En una terminal diferente digite npm run watch para que se inicie la compilacion del webpack (css,js,bootstrap,componentes y admin-lte)

Acceda a la url http://127.0.0.1:3000/
Credenciales  de login :
 
            'name'=>'User1',
            'email'=>'user1@gmail.com',
            'password'=> password
      
        
            'name'=>'User2',
            'email'=>'user2@gmail.com',
            'password'=> password
       
    
            'name'=>'User3',
            'email'=>'user3@gmail.com',
            'password'=> password
      
    
            'name'=>'User4',
            'email'=>'user4@gmail.com',
            'password'=> password
       
     
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=> 123456
     




Estructura
El projecto se realizo mediante el consumo de rutas Api o end point de  Laravel 7  a tra vez de componentes elaborados en vue , por lo tanto las vistas las encontra en la carpeta Resources/js/views , estas a su vez se renderizan por medio del archivo routes.js que se ejecuta dentro del archivo resources/app.js .

Migrations , Seeders and Model
Actualmente existen tres modelos , Client , User y City usados en la  realizacion de la api rest , cada uno tiene una migration ytambien un seeder CitiesTableSeeder ClientsTableSeeder y UsersTableSeeder estos a su vez son llamados en DatabaseSeeder.

En el modelo aplique la proteccion fillable

Controladores
Api/AuthController, UsersController  , CityController  y ClienteController son usados para la ejecucion del Crud por medio de los metodos get , post , put , y delete de acuerdo a lo solicitado en el documento .
