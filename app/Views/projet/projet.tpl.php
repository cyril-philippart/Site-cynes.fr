<h1>Vous êtes dans le projet <?= $projet->getName(); ?></h1>
<a href="<?= $router->generate('projet-list'); ?>" id ="return-btn" class="btn btn-dark">Retour</a>
<div class="row row row-cols-1 row-cols-md-2 row-cols-xl-3">
    <div class="">
        <div id="projet-overlay-image" class=" overlay-image _b0 ">
            <img class=" image _b1 " src="<?= $realisation[0]->getPicture() ?>" alt="Alt text" />
            <div class=" normal _b3 ">
                <div class=" text _2 "></div>
            </div>
            <div class=" hover _b2 ">
                <div class=" text _2 "><?= $realisation[0]->getName()?></div>
            </div>
        </div>
    </div>
</div>