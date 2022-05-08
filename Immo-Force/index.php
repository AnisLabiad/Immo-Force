<?php require_once "partials/header.php" ?>
<?php require_once "./partials/page.test.php"?>

<div class="container">
    <div class="jumbotron my-5 text-center">
        <h1 class="display-3 text-danger">
            Immo-Force
        </h1>
        <p class="lead">Vous propose des appartements/lofts d'exception à des prix raisonables.</p>
        <hr class="my-4">
        <p>Allez-y, consultez notre catalogue de luxe pour vos prochaines vacances.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="./" role="button">Luxury Homes</a>
        </p>
    </div>

    <h2 class="my-5 text-center">Nos Appartements de luxe</h2>

    <div class="card-deck flex-lg-row flex-md-row flex-xl-row flex-column">

        </div>

        <p>Surface :
        <?php if ($homes["surface"]) : ?>
        <span><?= $homes["surface"] ?></span>
        <?php else : ?>
        <span>NC</span>
        <?php endif; ?>
        </p>

        <p>Prix :
        <?php if ($homes["prix"]) : ?>
        <span><?= $homes["prix"] ?>$</span>
        <?php else : ?>
        <span>NC</span>
        <?php endif; ?>
        </p>

        <p>Type :
        <?php if ($homes["type"]) : ?>
        <span><?= $homes["type"] ?></span>
        <?php else : ?>
        <span>NC</span>
        <?php endif; ?>
        </p>

        
        <p>Description :
        <?php if ($homes["description"]) : ?>
        <span><?= $homes["description"] ?></span>
        <?php else : ?>
        <span>NC</span>
        <?php endif; ?>
        </p>





</div>

<?php require "partials/footer.php" ?>

</body>

</html>