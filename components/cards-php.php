<?php
include_once __DIR__ . '/../server/db.php';
foreach ($disks["response"] as $disk) : ?>
    <div class="card">
        <div><img src="<?= $disk["poster"]; ?>" alt=""></div>
        <h2><?= $disk["title"]; ?></h2>
        <h3><?= $disk["author"]; ?></h3>
        <h3><?= $disk["year"]; ?></h3>
    </div>
<?php
endforeach;
?>