#!/bin/bash

apache2-foreground
cd /var/www/html/
php artisan opcache:clear && /bin/bash