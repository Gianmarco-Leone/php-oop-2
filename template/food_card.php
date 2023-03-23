<div class="col">
    <div class="card">
        <img src="<?= $food_product->poster ?>" class="card-img-top" alt="<?= $food_product->title ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $food_product->title ?>
            </h5>
            <h6 class="card-text text-danger">
                <?= $food_product->getPrice()  ?> €
            </h6>
            <h6 class="card-text">
                <?= $food_product->category->icon ?>
            </h6>
            <h6 class="card-text">
                <?= $food_product->type ?>
            </h6>
            <a href="#" class="btn btn-warning">Acquista</a>
        </div>
    </div>
</div>