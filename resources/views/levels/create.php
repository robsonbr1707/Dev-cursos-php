<?php
require __DIR__.'/../../../vendor/autoload.php';
include __DIR__.'/../layouts/header.php';
?>

<div class="py-4">
    <h1 class="fs-2 ">Criando Experiência</h1>
    <a href="/resources/views/levels/index.php" class="btn btn-primary ">Voltar</a>
</div>

<form action="" method="post">
  <div class="mb-3">
    <label for="title" class="form-label">Título da Experiência</label>
    <input type="text" name="title" class="form-control" id="title">
  </div>
  <button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php include __DIR__.'/../layouts/footer.php'; ?> 