# Contact Us Package

## This package will help to send emal on submission of any form to the admin/owner.
## Also the information filled on the form will be stored on database.

# Installation 
 ```
    composer require mrbhola/contact
 ```
 # Package Discovery 
 * Add fllowing line to the providers array inside config/app.php file 

 ```
        /*
         * Package Service Providers...
         */
            Mrbhola\Contact\ContactServiceProvider::class,
 ```

# Publish configurations

```
    $php artisan vendor:publish
```

## Now you are good to go.
