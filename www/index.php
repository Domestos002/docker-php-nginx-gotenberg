<?php
use Gotenberg\Gotenberg;
use Gotenberg\Stream;

require 'vendor/autoload.php';

$request = Gotenberg::chromium('http://gotenberg:3000')
    ->html(Stream::path('./index.html'));

$filename = Gotenberg::save($request, './');

//curl \
//--request POST 'http://localhost:3000/forms/chromium/convert/html' \
//--form 'files=@"/home/lamer/work-bf/docker-php-nginx-gotenberg/www/index.html"' \
//-o my.pdf
