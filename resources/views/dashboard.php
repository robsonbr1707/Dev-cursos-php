<div class="mt-4">
    <?php foreach($levels as $key => $level): ?>
        <?= $level['title'] ?>
    <?php endforeach ?>

    <?php if(count($levels) == 0): ?>
        <p>Nenhum nivel de experiencia encontrado!</p>
    <?php endif ?>
</div> 