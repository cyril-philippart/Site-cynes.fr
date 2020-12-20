<div class="row row row-cols-1 row-cols-md-2 row-cols-xl-3">
    <?php foreach ($allprojet as $currentProjet) : ?>
        <div class="col mb-4">
            <div class=" overlay-image _b0 ">
                <a href="URL_LIEN">
                    <img class=" image _b1 " src="" alt="Alt text" />
                    <div class=" normal _b3 ">
                        <div class=" text _2 "></div>
                    </div>
                    <div class=" hover _b2 ">
                        <div class=" text _2 "><?= $currentProjet->getName() ?></div>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>