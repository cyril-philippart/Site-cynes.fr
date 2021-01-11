<!-- <?php dump($realisation) ?> -->
<a id="return" onclick="history.go(-1)"></a>
<div class="projet-title">
    <h4 class="title">Projet <?= $projet->getName(); ?></h4>
</div>
<div class="row row row-cols-1 row-cols-md-1 row-cols-xl-1">
    <div class="long-img-wrap">
        <div id="projet-overlay-image" class=" overlay-image _b0 " style="width: 95%">
            <img class=" image _b1" src="<?= $realisation[0]->getPicture() ?>" alt="Alt text" />
            <div class=" normal _b3 ">
                <div class=" text _2 "></div>
            </div>
            <div class=" hover _b2 ">
                <div class=" text _2 "><?= $realisation[0]->getName() ?></div>
            </div>
        </div>
    </div>
</div>
<?php if (!empty($realisation[1])) : ?>
<div class="row row row-cols-1 row-cols-md-2 row-cols-xl-2">
    <div class="long-img-wrap">
        <div id="projet-overlay-image" class=" overlay-image _b0 ">
            <img class=" image _b1" src="<?= $realisation[1]->getPicture() ?>" alt="Alt text" />
            <div class=" normal _b3 ">
                <div class=" text _2 "></div>
            </div>
            <div class=" hover _b2 ">
                <div class=" text _2 "><?= $realisation[1]->getName() ?></div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($realisation[2])) : ?>
        <div class="long-img-wrap">
            <div id="projet-overlay-image" class=" overlay-image _b0 ">
                <img class=" image _b1" src="<?= $realisation[2]->getPicture() ?>" alt="Alt text" />
                <div class=" normal _b3 ">
                    <div class=" text _2 "></div>
                </div>
                <div class=" hover _b2 ">
                    <div class=" text _2 "><?= $realisation[2]->getName() ?></div>
                </div>
            </div>
        </div>
</div>
<?php endif; ?>
<?php if (!empty($realisation[3])) : ?>
    <div class="row row row-cols-1 row-cols-md-1 row-cols-xl-1">
        <div class="long-img-wrap">
            <div id="projet-overlay-image" class=" overlay-image _b0 " style="width: 95%">
                <img class=" image _b1" src="<?= $realisation[3]->getPicture() ?>" alt="Alt text" />
                <div class=" normal _b3 ">
                    <div class=" text _2 "></div>
                </div>
                <div class=" hover _b2 ">
                    <div class=" text _2 "><?= $realisation[3]->getName() ?></div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if (!empty($realisation[4])) : ?>
    <div class="row row row-cols-1 row-cols-md-2 row-cols-xl-2">
        <div class="long-img-wrap">
            <div id="projet-overlay-image" class=" overlay-image _b0 ">
                <img class=" image _b1" src="<?= $realisation[4]->getPicture() ?>" alt="Alt text" />
                <div class=" normal _b3 ">
                    <div class=" text _2 "></div>
                </div>
                <div class=" hover _b2 ">
                    <div class=" text _2 "><?= $realisation[4]->getName() ?></div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if (!empty($realisation[5])) : ?>
        <div class="long-img-wrap">
            <div id="projet-overlay-image" class=" overlay-image _b0 ">
                <img class=" image _b1" src="<?= $realisation[5]->getPicture() ?>" alt="Alt text" />
                <div class=" normal _b3 ">
                    <div class=" text _2 "></div>
                </div>
                <div class=" hover _b2 ">
                    <div class=" text _2 "><?= $realisation[5]->getName() ?></div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>