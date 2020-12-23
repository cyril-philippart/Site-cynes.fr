<h1 class="title-projet" >Projet <?= $projet->getName(); ?></h1>
<input class="btn btn-dark" type = "button" value = "Retour"  onclick = "history.go(-1)">
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

