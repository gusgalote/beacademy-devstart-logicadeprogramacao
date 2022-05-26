<main class="container customText">
    <h1 class="mt-4 mb-2"><?= $exercise->title ?></h1>

    <hr/>

    <article class="card bg-dark text-bg-dark">
        <div class="card-body">
            <h2 class="card-title">Card title</h2>
            <p class="card-text"><?=$exercise->description?></p>
        </div>
        <div class="card-body">
            <a href="exercise/<?=$exercise->title?>.php" class="card-link">Open exercise</a>
        </div>
    </article>
    <h2><?= var_dump($exercise) ?></h2>
</main>