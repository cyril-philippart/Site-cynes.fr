<div class="card-expertise mt-5">
  <div class="row no-gutters mt-0">
    <div class="col-md-6">
      <img src="<?=$allCategory[0]->getPicture()?>" class="card-img" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body-expertise">
        <h5 class="card-title"><?=$allCategory[0]->getName()?></h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quo. Provident inventore asperiores laboriosam error exercitationem ad dolorem, eligendi at dolores rerum ea optio eveniet corporis libero nostrum magni magnam. Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        <a href="<?= $router->generate('category-category') . $allCategory[0]->getId(); ?>"><button type="button" class="btn btn-light">Découvrir</button></a>
      </div>
    </div>
  </div>
</div>
<div class="card-expertise">
  <div class="row no-gutters mt-0">
    <div class="col-md-6">
      <div class="card-body-expertise">
        <h5 class="card-title"><?=$allCategory[1]->getName()?></h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum rem eius repellat porro aspernatur delectus. Dolor magni et praesentium suscipit ipsa officia sapiente expedita voluptas voluptatibus repellat molestias, repudiandae possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="<?= $router->generate('category-category') . $allCategory[1]->getId(); ?>"><button type="button" class="btn btn-light">Découvrir</button></a>
      </div>
    </div>
    <div id="img-order" class="col-md-6">
      <img src="<?=$allCategory[1]->getPicture()?>" class="card-img" alt="...">
    </div>
  </div>
</div>
<div class="card-expertise">
  <div class="row no-gutters mt-0">
    <div class="col-md-6">
      <img src="<?=$allCategory[2]->getPicture()?>" class="card-img" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body-expertise">
        <h5 class="card-title"><?=$allCategory[2]->getName()?></h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quo. Provident inventore asperiores laboriosam error exercitationem ad dolorem, eligendi at dolores rerum ea optio eveniet corporis libero nostrum magni magnam. Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        <a href="<?= $router->generate('category-category') . $allCategory[2]->getId(); ?>"><button type="button" class="btn btn-light">Découvrir</button></a>
      </div>
    </div>
  </div>
</div>
<div class="card-expertise">
  <div class="row no-gutters mt-0">
    <div class="col-md-6">
      <div class="card-body-expertise">
        <h5 class="card-title"><?=$allCategory[3]->getName()?></h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum rem eius repellat porro aspernatur delectus. Dolor magni et praesentium suscipit ipsa officia sapiente expedita voluptas voluptatibus repellat molestias, repudiandae possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="<?= $router->generate('category-category') . $allCategory[3]->getId(); ?>"><button type="button" class="btn btn-light">Découvrir</button></a>
      </div>
    </div>
    <div id="img-order" class="col-md-6">
      <img src="<?=$allCategory[3]->getPicture()?>" class="card-img" alt="...">
    </div>
  </div>
</div>