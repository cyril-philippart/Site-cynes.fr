<?= dump($allPicture)?>
<div class="card text-white">
  <img src="assets/img/img-principale.jpg" class="main-img img-fluid" alt="...">
  <div class="card-img-overlay">
    <h2 class="card-title">La simplicité est la clé de <br>l'élégance</h2>
  </div>
</div>
    <div class="card mb-3">
        <div id="intro" class="row no-gutters">
            <div class="col md-6">
                <div class="card-body">
                    <p class="card-text">CYNES est une agence de communication créative, qui partage les convictions de Monsieur Albert
                        Camus “Créer c’est vivre deux fois".<br>Nous vous accompagnons dans la création et le
                        développement de votre image et de votre notoriété.<br>Pour nous, concevoir une identité
                        visuelle, c’est traduire une personnalité et un univers, puis le retranscrire graphiquement avec
                        justesse et savoir-faire.</p>
                </div>
            </div>
            <div class="col md-6">
                <div class="card-body">
                    <p class="citation">Le design<br> est l'ambassadeur silencieux de votre marque</p>
                </div>
            </div>
        </div>
    </div>
    <div class="trait"></div>
    <div id="marg" class="row row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div id="background-black" class="col mb-4">
            <div class=" overlay-image _b0 ">
                <a href="URL_LIEN">
                    <div class="text">
                        <div class=" text _2 "><?=$allPicture[0]->getName()?></div>
                    </div>
                    <div class=" normal _b3 ">
                        <div class=" text _2 "></div>
                    </div>
                    <div class=" hover _b2 ">
                        <img class=" image _b1 " src="<?=$allPicture[0]->getPicture()?>" alt="Alt text" />
                    </div>
                </a>
            </div>
        </div>
        <div class="col mb-4">
            <div class=" overlay-image _b0 ">
                <a href="URL_LIEN">
                    <img class=" image _b1 " src="<?=$allPicture[1]->getPicture()?>" alt="Alt text" />
                    <div class=" normal _b3 ">
                        <div class=" text _2 "></div>
                    </div>
                    <div class=" hover _b2 ">
                        <div class=" text _2 "><?=$allPicture[1]->getName()?></div>
                    </div>
                </a>
            </div>
        </div>
        <div id="background-black-order" class="col mb-4">
            <div class=" overlay-image _b0 ">
                <a href="URL_LIEN">
                    <div class="text">
                        <div class=" text _2 "><?=$allPicture[2]->getName()?></div>
                    </div>
                    <div class=" normal _b3 ">
                        <div class=" text _2 "></div>
                    </div>
                    <div class=" hover _b2 ">
                        <img class=" image _b1 " src="<?=$allPicture[2]->getPicture()?>" alt="Alt text" />
                    </div>
                </a>
            </div>
        </div>
        <div class="col mb-4">
            <div class=" overlay-image _b0 ">
                <a href="URL_LIEN">
                    <img class=" image _b1 " src="<?=$allPicture[3]->getPicture()?>" alt="Alt text" />
                    <div class=" normal _b3 ">
                        <div class=" text _2 "></div>
                    </div>
                    <div class=" hover _b2 ">
                        <div class=" text _2 "><?=$allPicture[3]->getName()?></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="expertise" class="card mb-4">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img src="assets/img/img-expertuse-sur-mesure.png" id="card-img" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h3>Une expertise sur mesure</h3>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi sint necessitatibus repellendus nulla, id pariatur nihil. Repellat, veritatis necessitatibus impedit in qui aspernatur, consequuntur distinctio nobis dolorum optio, expedita iure! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ratione laboriosam, molestiae laudantium saepe maxime incidunt magni in animi error nesciunt tempora, impedit rerum magnam labore maiores quidem esse tempore?
                    </p>
                    <a href="<?= $router->generate('contact'); ?>"><button type="button" class="btn btn-dark">Contactez-nous</button></a>
                </div>
            </div>
        </div>
    </div>