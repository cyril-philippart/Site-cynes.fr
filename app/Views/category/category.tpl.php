<a id ="return" onclick="history.go(-1)"></a>
<div class="projet-title">
    <h4 class="title">Nos réalisation "<?= $category->getName(); ?>"</h4>
</div>
<div class="row row row-cols-1 row-cols-md-2 row-cols-xl-3">
    <?php foreach ($realisation as $currentRealisation) : ?>
        <div class="">
            <div id="projet-list-overlay-image" class=" overlay-image _b0 ">
                <a href="<?= $router->generate('projet-projet') . $currentRealisation->getProjet_id() ?>">
                    <img class=" image _b1 " src="<?= $currentRealisation->getPicture() ?>">
                    <div class=" normal _b3 ">
                        <div class=" text _2 "></div>
                    </div>
                    <div class=" hover _b2 ">
                        <div class=" text _2 ">Découvrir le projet</div>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>