# contactform
Laravel package to add contact page to your website

# How to integrate?
- Step 1: create folder named packages in your laravel project
the folder structure like that:
```
-- app
-- bootstrap
-- config
...
-- packages
-- public
...
```

- Step 2: move to folder packages, clone the project by link
https://github.com/dotuan0601/contactform.git
The folder after clone git like that:
```
-- app
-- bootstrap
-- config
...
-- packages
   -- contactform
-- public
...
```

- Step 3:
Back to root folder, add package info to your composer.json file
```
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            ...
            "Tuandv\\Contactform\\": "packages/contactform/src"
        },
        "classmap": [
            "database/seeds",
            "database/factories"
        ]
    },
    
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/",
            ....
            "Tuandv\\Contactform\\": "packages/contactform/src"
        }
    },
```

 . Dump the composer autoloader
 ```
 composer dump-autoload
 ```
 
 Next, we need to add our new Service Provider in our config/app.php inside the providers array
```
    'providers' => [
         ...,
            App\Providers\RouteServiceProvider::class,
            // Our new package class
            Tuandv\Contactform\ContactFormServiceProvider::class,
        ],
```

- Step 4:
Migrate the database tables
```
php artisan migrate
```

And check the result at:
```
yourdomain/contact
(Example: http://localhost:8000/contact)
```
