<?php

require __DIR__.'/../../../vendor/autoload.php';
use App\Models\LevelCourse;

$levelCourse = new LevelCourse;
$levels = $levelCourse->select('', '', '')->fetchAll();

include __DIR__.'/../layouts/header.php';
?>

<div class="py-4">
    <h1 class="fs-2">Nivel de Experiência</h1>
    <a href="/resources/views/levels/create.php" class="btn btn-success">Criar</a>
</div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($levels as $level): ?>
    <tr>
      <th><?= $level['id'] ?></th>
      <td><?= $level['title'] ?></td>
      <td class="" style="width: 200px;">
        <a href="#" class="btn btn-primary">Editar</a>
        <a href="#" class="btn btn-danger">Excluir</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
  
</table>
<?php if(count($levels) == 0): ?>
    <p class="text-center">Nenhum nivel de experiencia encontrado!</p>
<?php endif ?>
<?php include __DIR__.'/../layouts/footer.php'; ?> 