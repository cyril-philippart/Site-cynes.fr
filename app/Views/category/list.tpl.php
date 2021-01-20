<div id="identité-visuelle" class="card-expertise mt-5">
  <div class="row no-gutters mt-0">
    <div class="col-md-6">
      <a href="<?= $router->generate('category-category') . $allCategory[0]->getId(); ?>"><img src="<?=$allCategory[0]->getPicture()?>" class="card-img" alt="..."></a>
    </div>
    <div class="col-md-6">
      <div class="card-body-expertise">
        <h5 class="title-category"><?=$allCategory[0]->getName()?></h5>
        <p class="card-text"><?=$allCategory[0]->getSubtitle()?></p>
        <a href="<?= $router->generate('category-category') . $allCategory[0]->getId(); ?>"><button type="button" class="btn btn-light">Découvrir</button></a>
      </div>
    </div>
  </div>
</div>
<div id="design" class="card-expertise">
  <div class="row no-gutters mt-0">
    <div class="col-md-6">
      <div class="card-body-expertise">
        <h5 class="title-category"><?=$allCategory[1]->getName()?></h5>
        <p class="card-text"><?=$allCategory[1]->getSubtitle()?></p>
        <a href="<?= $router->generate('category-category') . $allCategory[1]->getId(); ?>"><button type="button" class="btn btn-light">Découvrir</button></a>
      </div>
    </div>
    <div id="img-order" class="col-md-6">
      <a href="<?= $router->generate('category-category') . $allCategory[1]->getId(); ?>"><img src="<?=$allCategory[1]->getPicture()?>" class="card-img" alt="..."></a>
    </div>
  </div>
</div>
<div id="digital" class="card-expertise">
  <div class="row no-gutters mt-0">
    <div class="col-md-6">
      <a href="<?= $router->generate('category-category') . $allCategory[2]->getId(); ?>"><img src="<?=$allCategory[2]->getPicture()?>" class="card-img" alt="..."></a>
    </div>
    <div class="col-md-6">
      <div class="card-body-expertise">
        <h5 class="title-category"><?=$allCategory[2]->getName()?></h5>
        <p class="card-text"><?=$allCategory[2]->getSubtitle()?></p>
        <a href="<?= $router->generate('category-category') . $allCategory[2]->getId(); ?>"><button type="button" class="btn btn-light">Découvrir</button></a>
      </div>
    </div>
  </div>
</div>
<div id="web" class="card-expertise">
  <div class="row no-gutters mt-0">
    <div class="col-md-6">
      <div class="card-body-expertise">
        <h5 class="title-category"><?=$allCategory[3]->getName()?></h5>
        <p class="card-text"><?=$allCategory[3]->getSubtitle()?></p>
        <a href="<?= $router->generate('category-category') . $allCategory[3]->getId(); ?>"><button type="button" class="btn btn-light">Découvrir</button></a>
      </div>
    </div>
    <div id="img-order" class="col-md-6">
      <a href="<?= $router->generate('category-category') . $allCategory[3]->getId(); ?>"><img src="<?=$allCategory[3]->getPicture()?>" class="card-img" alt="..."></a>
    </div>
  </div>
</div>