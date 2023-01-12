<?php

use App\Controllers\LevelCourse\LevelCourseController;

require __DIR__.'/../../../vendor/autoload.php';
echo LevelCourseController::index();

include __DIR__.'/../layouts/header.php';
?>


<?php if($levels): ?>
    <h1>Nenhuma experiencia encontrada!</h1>
<?php endif ?>


<?= include __DIR__.'/../layouts/footer.php' ?>