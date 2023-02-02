<?php
require __DIR__.'/../../../vendor/autoload.php';
include __DIR__.'/../layouts/header.php';
?>

<div class="py-4">
    <h1 class="fs-2 ">Criando Experiência</h1>
    <a href="/resources/views/levels/index.php" class="btn btn-primary ">Voltar</a>
</div>

<form id="form">
  <div class="mb-3">
    <label for="title" class="form-label">Título da Experiência</label>
    <input type="text" name="title" class="form-control" id="title">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Título da Experiência</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <button type="submit" class="btn btn-success">Salvar</button>
</form>

<script>
  $("form").submit(function(e){
    e.preventDefault();
    var form = $("form").serialize();
    var datas = {
        "title": "Teste",
    };
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      $.ajax({
        url: "/app/http/controllers/levelcourse/create.php",
        method: "POST",
        dataType: "JSON",
        data: form,
        success: function(response){ 
        console.log(JSON.stringify(response));

        //Redirect ---
        //window.location.href = "/resources/views/levels/index.php";
        },
        error: function(response){
        console.log(response);
        },
    });
  });
</script>
<?php include __DIR__.'/../layouts/footer.php'; ?> 