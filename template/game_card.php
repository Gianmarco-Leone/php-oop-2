<div class="col">
    <div class="card">
        <img src="<?= $game_product->poster ?>" class="card-img-top" alt="<?= $game_product->title ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $game_product->title ?>
            </h5>
            <h6 class="card-text">
                <?= $game_product->price  ?> €
            </h6>
            <h6 class="card-text">
                <?= $game_product->category->icon ?>
            </h6>
            <h6 class="card-text">
                <?= $game_product->type ?>
            </h6>
            <a href="#" class="btn btn-warning">Acquista</a>
        </div>
    </div>
</div>