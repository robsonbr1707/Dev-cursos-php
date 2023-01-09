<?php
use App\Controllers\Dashboard;
require __DIR__.'/vendor/autoload.php';

include __DIR__.'/resources/views/layouts/header.php';
echo Dashboard::index();
include __DIR__.'/resources/views/layouts/footer.php'; 