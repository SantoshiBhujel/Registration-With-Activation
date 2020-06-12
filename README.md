Bootstrap and Vue scaffolding:
composer require laravel/ui

// Generate login / registration scaffolding...
php artisan ui vue --auth

Configure the mail serice in .env file
You may use Mailtrap, Google, Mailgun and many more.

To create mail along with its blade, use:
    php artisan make:mail ActivationEmail -m emails.user_activation

blade file is stored in :
resource->emails:
user_activation.blade.php

Mail is queued

To create queued jobs table:
        php artisan queue:table {this created jobs table migration}

To run queued jobs :
    php artisan queue:work    OR
    php artisan queue:listen