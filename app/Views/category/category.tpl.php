<h1>Nos réalisation catégorie "<?=$category->getName();?>"</h1>
<a href="<?= $router->generate('category-list'); ?>" id ="return-btn" class="btn btn-dark float-left">Retour</a>
<div class="row row row-cols-1 row-cols-md-2 row-cols-xl-3">
    <?php foreach ($realisation as $currentRealisation):?>
        <div class="">
            <div id="projet-overlay-image" class=" overlay-image _b0 ">
                <a href="<?= $router->generate('projet-projet') . $currentRealisation->getId()?>">
                    <img class=" image _b1 " src="<?=$currentRealisation->getPicture()?>">
                    <div class=" normal _b3 ">
                        <div class=" text _2 "></div>
                    </div>
                    <div class=" hover _b2 ">
                        <div class=" text _2 ">Découvrir</div>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>


