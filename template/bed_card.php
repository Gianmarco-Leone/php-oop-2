<div class="col">
    <div class="card">
        <img src="<?= $bed_product->poster ?>" class="card-img-top" alt="<?= $bed_product->title ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $bed_product->title ?>
            </h5>
            <h6 class="card-text">
                <?= $bed_product->price  ?> €
            </h6>
            <h6 class="card-text">
                <?= $bed_product->category->icon ?>
            </h6>
            <h6 class="card-text">
                <?= $bed_product->type ?>
            </h6>
            <a href="#" class="btn btn-warning">Acquista</a>
        </div>
    </div>
</div>