<?php 
foreach ($homes as $home) : ?>

<div class="card text-center shadow my-3">

    <div class="card-header bg-dark text-white">
        <h2 class="card-title">
            <?= ucwords($home["titre"]) ?>
        </h2>
    </div>

    <div class="card-body">

        <img src="<?= $home["photo"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $home["titre"] ?>">
        <hr>

        <p>Adresse:
        <span><?= ucwords($home["adress"])?></span>
        </p>

        <p>Ville:
        <span><?= ucwords($home["Ville"])?></span>
        </p>

        <p>Code Postal:
        <span><?= $appart["cp"] ?></span>
        </p>

        <p>Surface:
        <span><?= $appart["surface"] ?></span>
        </p>
        
        <p>Prix:
        <span><?= $appart["prix"] ?></span>
        </p>

        <p>Type:
         <span><?= $appart["type"] ?></span>
        </p>

       <p>Description :
        <?php if ($appart["description"]) : ?>
        <span><?= $appart["description"] ?></span>
        <?php else : ?>
        <span>NC</span>
        <?php endif; ?>
    </p>

        <button class="btn btn-success mx-2 border">
            <i class="fas fa-thumbs-up"></i>
        </button>

        <button class="btn btn-danger border">
            <i class="fas fa-thumbs-down"></i>
        </button>

    </div>
</div>
<hr>

<?php endforeach 
?>