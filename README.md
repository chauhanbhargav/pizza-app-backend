#Pizza Application Backend Services

### Instructions to Run

- Make sure you are using XAMPP, WAMPP or any other Web Server with MySQL enabled for this application to work, the Server should be up and running.
- Clone the project and put it inside htdocs (or whatever directory your server is using).

Don't forget the following commands:


      ```
      composer install
      composer update
      php artisan jwt:generate
      php artisan migrate
      php artisan db:seed
      cp public/images storage/app/public/
      php artisan storage:link
      
      ```

You can start the server by running ``php artisan serve`` in the project directory.

The API will be up on `localhost:8000/api/v1`