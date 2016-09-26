# User-Image
## This project show you how to upload and change user image in Laravel 5.2 by using Intervention package.
## So, What do you need to download this project and working well on your machine?
###First of all, Install composer after download this project

2. create database and put the name of the database in .env file

3. type this command: php artisan migrate

4. install intervention package by type this command: composer require intervention/image

5. In the $providers array add the service providers for this package.
  <br><b>Intervention\Image\ImageServiceProvider::class</b>
  <br>Add the facade of this package to the $aliases array
  <br><b>'Image' => Intervention\Image\Facades\Image::class</b>
  <br>Now the Image Class will be auto-loaded by Laravel

6. Publish configuration in Laravel 5
  <br><b>php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravel5"</b>

7. Type this command in you composer (<b>composer require "laravelcollective/html":"^5.2.0"</b>) to install forms and HTML packages. Check this link for more details https://laravelcollective.com/docs/5.2/html
