<!-- <?php dump($realisation) ?> -->
<a id="return" onclick="history.go(-1)"></a>
<div class="projet-title">
    <h4 class="title">Projet <?= $projet->getName(); ?></h4>
</div>
<div class="row row row-cols-1 row-cols-md-1 row-cols-xl-1">
    <div class="long-img-wrap">
        <div id="projet-overlay-image" class=" overlay-image _b0 " style="width: 95%">
            <a href="<?= $realisation[0]->getPicture() ?>" data-lightbox="image-1" ><img class=" image _b1" src="<?= $realisation[0]->getPicture() ?>" alt="Alt text" /></a>
            <div class=" normal _b3 ">
                <div class=" text _2 "></div>
            </div>
            <div class=" hover _b2 ">
                <div class=" text _2 "><?= $realisation[0]->getName() ?></div>
            </div>
        </div>
    </div>
</div>
<div id="lightboxOverlay" class="lightboxOverlay"></div>
<div id="lightbox" class="lightbox">
    <div class="lb-outerContainer" style="width: 232px; height: 330px;">
        <div class="lb-container">
            <img class="lb-image" src="<?= $realisation[0]->getPicture() ?>" style="display: block; width: 400px; height: 322px;">
            <div class="lb-nav" style="display: block;">
                <a class="lb-prev" href="" style="display: none;"></a>
                <a class="lb-next" href="" style="display: block;"></a>
            </div>
            <div class="lb-loader" style="display: none;">
                <a class="lb-cancel"></a>
            </div>
        </div>
    </div>
    <div class="lb-dataContainer" style="display: block; width: 232px;">
        <div class="lb-data">
            <div class="lb-closeContainer">
                <a class="lb-close"></a>
            </div>
        </div>
    </div>
</div>
<?php if (!empty($realisation[1])) : ?>
<div class="row row row-cols-1 row-cols-md-2 row-cols-xl-2">
    <div class="long-img-wrap">
        <div id="projet-overlay-image" class=" overlay-image _b0 ">
            <a href="<?= $realisation[1]->getPicture() ?>" data-lightbox="image-1" ><img class=" image _b1" src="<?= $realisation[1]->getPicture() ?>" alt="Alt text" /></a>
            <div class=" normal _b3 ">
                <div class=" text _2 "></div>
            </div>
            <div class=" hover _b2 ">
                <div class=" text _2 "><?= $realisation[1]->getName() ?></div>
            </div>
        </div>
    </div>
<div id="lightboxOverlay" class="lightboxOverlay"></div>
<div id="lightbox" class="lightbox">
    <div class="lb-outerContainer" style="width: 232px; height: 330px;">
        <div class="lb-container">
            <img class="lb-image" src="<?= $realisation[1]->getPicture() ?>" style="display: block; width: 400px; height: 322px;">
            <div class="lb-nav" style="display: block;">
                <a class="lb-prev" href="" style="display: none;"></a>
                <a class="lb-next" href="" style="display: block;"></a>
            </div>
            <div class="lb-loader" style="display: none;">
                <a class="lb-cancel"></a>
            </div>
        </div>
    </div>
    <div class="lb-dataContainer" style="display: block; width: 232px;">
        <div class="lb-data">
            <div class="lb-closeContainer">
                <a class="lb-close"></a>
            </div>
        </div>
    </div>
</div>
    <?php endif; ?>
    <?php if (!empty($realisation[2])) : ?>
        <div class="long-img-wrap">
            <div id="projet-overlay-image" class=" overlay-image _b0 ">
                <a href="<?= $realisation[2]->getPicture() ?>" data-lightbox="image-1"><img class=" image _b1" src="<?= $realisation[2]->getPicture() ?>" alt="Alt text" /></a>
                <div class=" normal _b3 ">
                    <div class=" text _2 "></div>
                </div>
                <div class=" hover _b2 ">
                    <div class=" text _2 "><?= $realisation[2]->getName() ?></div>
                </div>
            </div>
        </div>
</div>
<div id="lightboxOverlay" class="lightboxOverlay"></div>
<div id="lightbox" class="lightbox">
    <div class="lb-outerContainer" style="width: 232px; height: 330px;">
        <div class="lb-container">
            <img class="lb-image" src="<?= $realisation[2]->getPicture() ?>" style="display: block; width: 400px; height: 322px;">
            <div class="lb-nav" style="display: block;">
                <a class="lb-prev" href="" style="display: none;"></a>
                <a class="lb-next" href="" style="display: block;"></a>
            </div>
            <div class="lb-loader" style="display: none;">
                <a class="lb-cancel"></a>
            </div>
        </div>
    </div>
    <div class="lb-dataContainer" style="display: block; width: 232px;">
        <div class="lb-data">
            <div class="lb-closeContainer">
                <a class="lb-close"></a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if (!empty($realisation[3])) : ?>
    <div class="row row row-cols-1 row-cols-md-1 row-cols-xl-1">
        <div class="long-img-wrap">
            <div id="projet-overlay-image" class=" overlay-image _b0 " style="width: 95%">
                <a href="<?= $realisation[3]->getPicture() ?>" data-lightbox="image-1"><img class=" image _b1" src="<?= $realisation[3]->getPicture() ?>" alt="Alt text" /></a>
                <div class=" normal _b3 ">
                    <div class=" text _2 "></div>
                </div>
                <div class=" hover _b2 ">
                    <div class=" text _2 "><?= $realisation[3]->getName() ?></div>
                </div>
            </div>
        </div>
    </div>
    <div id="lightboxOverlay" class="lightboxOverlay"></div>
<div id="lightbox" class="lightbox">
    <div class="lb-outerContainer" style="width: 232px; height: 330px;">
        <div class="lb-container">
            <img class="lb-image" src="<?= $realisation[3]->getPicture() ?>" style="display: block; width: 400px; height: 322px;">
            <div class="lb-nav" style="display: block;">
                <a class="lb-prev" href="" style="display: none;"></a>
                <a class="lb-next" href="" style="display: block;"></a>
            </div>
            <div class="lb-loader" style="display: none;">
                <a class="lb-cancel"></a>
            </div>
        </div>
    </div>
    <div class="lb-dataContainer" style="display: block; width: 232px;">
        <div class="lb-data">
            <div class="lb-closeContainer">
                <a class="lb-close"></a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if (!empty($realisation[4])) : ?>
    <div class="row row row-cols-1 row-cols-md-2 row-cols-xl-2">
        <div class="long-img-wrap">
            <div id="projet-overlay-image" class=" overlay-image _b0 ">
                <a href="<?= $realisation[4]->getPicture() ?>" data-lightbox="image-1"><img class=" image _b1" src="<?= $realisation[4]->getPicture() ?>" alt="Alt text" /></a>
                <div class=" normal _b3 ">
                    <div class=" text _2 "></div>
                </div>
                <div class=" hover _b2 ">
                    <div class=" text _2 "><?= $realisation[4]->getName() ?></div>
                </div>
            </div>
        </div>
        <div id="lightboxOverlay" class="lightboxOverlay"></div>
<div id="lightbox" class="lightbox">
    <div class="lb-outerContainer" style="width: 232px; height: 330px;">
        <div class="lb-container">
            <img class="lb-image" src="<?= $realisation[4]->getPicture() ?>" style="display: block; width: 400px; height: 322px;">
            <div class="lb-nav" style="display: block;">
                <a class="lb-prev" href="" style="display: none;"></a>
                <a class="lb-next" href="" style="display: block;"></a>
            </div>
            <div class="lb-loader" style="display: none;">
                <a class="lb-cancel"></a>
            </div>
        </div>
    </div>
    <div class="lb-dataContainer" style="display: block; width: 232px;">
        <div class="lb-data">
            <div class="lb-closeContainer">
                <a class="lb-close"></a>
            </div>
        </div>
    </div>
</div>
    <?php endif; ?>
    <?php if (!empty($realisation[5])) : ?>
        <div class="long-img-wrap">
            <div id="projet-overlay-image" class=" overlay-image _b0 ">
                <a href="<?= $realisation[5]->getPicture() ?>" data-lightbox="image-1"><img class=" image _b1" src="<?= $realisation[5]->getPicture() ?>" alt="Alt text" /></a>
                <div class=" normal _b3 ">
                    <div class=" text _2 "></div>
                </div>
                <div class=" hover _b2 ">
                    <div class=" text _2 "><?= $realisation[5]->getName() ?></div>
                </div>
            </div>
        </div>
        <div id="lightboxOverlay" class="lightboxOverlay"></div>
<div id="lightbox" class="lightbox">
    <div class="lb-outerContainer" style="width: 232px; height: 330px;">
        <div class="lb-container">
            <img class="lb-image" src="<?= $realisation[5]->getPicture() ?>" style="display: block; width: 400px; height: 322px;">
            <div class="lb-nav" style="display: block;">
                <a class="lb-prev" href="" style="display: none;"></a>
                <a class="lb-next" href="" style="display: block;"></a>
            </div>
            <div class="lb-loader" style="display: none;">
                <a class="lb-cancel"></a>
            </div>
        </div>
    </div>
    <div class="lb-dataContainer" style="display: block; width: 232px;">
        <div class="lb-data">
            <div class="lb-closeContainer">
                <a class="lb-close"></a>
            </div>
        </div>
    </div>
</div>
    <?php endif; ?>
</div>