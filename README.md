## Create Project
```bash
   composer create-project laravel/laravel project_name
```

## Change Locale Configuration
  Modify the file config/app.php to change application locale.

 'locale' => 'es', 

## Change Application Timezone
 Modify the  timezone for your application in the file config/app.php

 'timezone' => 'Europe/Madrid',

## Run the application 
```bash
php artisan serve
```
## Create model, table and controller
```bash
php artisan make:model NameModel -mcr
```
Example if NameModel is Post we have:
<ol>
 <li>PostController.php in folder app/Http/Controllers</li>
 <li>Post.php in folder app/Models</li>
 <li>2022_06_08_193555_create_posts_table.php in folder app/database/migrations</li>
</ol>


