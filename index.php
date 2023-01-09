<?php

require __DIR__.'/vendor/autoload.php';

use App\Controllers\Dashboard;

include __DIR__.'/resources/views/layouts/header.php';

echo Dashboard::index();

include __DIR__.'/resources/views/layouts/footer.php'; 