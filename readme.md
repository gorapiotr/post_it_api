## Post-it app

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/gorapiotr/post_it_api.svg?branch=master" alt="Build Status"></a>
</p>

[Post-it app front-end](https://github.com/gorapiotr/post_it_front).

## App installation steps for docker

```
composer install
cp .env.docker .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan jwt:generate

```

## .env for docker

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:gUdR4td8id6EE6DhXYnO7IGFOfI1PHDxiyeKaAl9Ook=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=database
DB_PORT=3306
DB_DATABASE=test
DB_USERNAME=root
DB_PASSWORD=test

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

JWT_SECRET=hhmKf7kXY9lQmf8gt9VjvnBkaFnXiGbI
```
