<?php

require __DIR__.'/../vendor/autoload.php';

include __DIR__.'/../resources/views/layouts/header.php';
echo App\Http\Controllers\Dashboard::index();
include __DIR__.'/../resources/views/layouts/footer.php'; 