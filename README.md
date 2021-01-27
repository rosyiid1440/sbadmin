
install this

composer require rosyiid1440/sbadmin


add provider to config/app.php

Rosyiid1440\Sbadmin\Sbadmin::class,


publish view

php artisan vendor:publish --provider="Rosyiid1440\Sbadmin\Sbadmin"

File example.blade.php in template/sbadmin/layouts for your main content

*disable route logout in template/sbadmin/layouts/app.blade.php if you don't have auth
