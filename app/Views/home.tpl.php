    <div class="card text-white">
        <img src="<?= $allElement[0]->getPicture() ?>" class="main-img img-fluid" alt="...">
        <div class="card-img-overlay">
            <h2 class="card-title-overlay">La simplicité est la clé de l'élégance</h2>
        </div>
    </div>
    <div class="card mb-3">
        <div id="intro" class="row no-gutters">
            <div class="col md-6">
                <div class="card-body">
                    <p class="card-text">CYNES est une agence de communication créative, qui partage les convictions de Monsieur Albert
                        Camus: “Créer c’est vivre deux fois". Nous vous accompagnons dans la création et le
                        développement de votre image et de votre notoriété. Pour nous, concevoir une identité
                        visuelle, c’est traduire une personnalité et un univers, puis le retranscrire graphiquement avec
                        justesse et savoir-faire.</p>
                </div>
            </div>
            <div class="col md-6">
                <div class="card-body">
                    <span class="citation">Le design<br> est l'ambassadeur silencieux de votre marque</span>
                </div>
            </div>
        </div>
    </div>
    <div class="trait"></div>
    <div id="marg" class="row row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col mb-4">
            <div class=" overlay-image _b0 ">
                <a href="<?= $router->generate('category-list'); ?>">
                    <img class=" image _b1 " src="<?= $allElement[1]->getPicture() ?>" alt="Alt text" />
                    <div class=" normal _b3 ">
                        <div class=" text _2 "></div>
                    </div>
                    <div class=" hover _b2 ">
                        <div class=" text _2 "><?= $allElement[1]->getName() ?></div>
                    </div>
                </a>
            </div>
        </div>
        <div id="background-black-order" class="col mb-4">
            <div class=" overlay-image _b0 ">
                <a href="<?= $router->generate('category-list'); ?>">
                    <div class="text">
                        <div class=" text _2 "><?= $allElement[2]->getName() ?></div>
                    </div>
                    <div class=" normal _b3 ">
                        <div class=" text _2 "></div>
                    </div>
                    <div class=" hover _b2 ">
                        <img class=" image _b1 " src="<?= $allElement[2]->getPicture() ?>" alt="Alt text" />
                    </div>
                </a>
            </div>
        </div>
        <div class="col mb-4">
            <div class=" overlay-image _b0 ">
                <a href="<?= $router->generate('category-list'); ?>">
                    <img class=" image _b1 " src="<?= $allElement[3]->getPicture() ?>" alt="Alt text" />
                    <div class=" normal _b3 ">
                        <div class=" text _2 "></div>
                    </div>
                    <div class=" hover _b2 ">
                        <div class=" text _2 "><?= $allElement[3]->getName() ?></div>
                    </div>
                </a>
            </div>
        </div>
        <div id="background-black" class="col mb-4">
            <div class=" overlay-image _b0 ">
                <a href="<?= $router->generate('category-list'); ?>">
                    <div class="text">
                        <div class=" text _2 "><?= $allElement[4]->getName() ?></div>
                    </div>
                    <div class=" normal _b3 ">
                        <div class=" text _2 "></div>
                    </div>
                    <div class=" hover _b2 ">
                        <img class=" image _b1 " src="<?= $allElement[4]->getPicture() ?>" alt="Alt text" />
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="expertise" class="card mb-4">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img src="<?= $allElement[5]->getPicture() ?>" id="card-img" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h3><?= $allElement[5]->getName() ?></h3>
                    <p class="card-text">A l'image d'un grand couturier, CYNES imagine et conçoit des créations sur mesure qui repondent à vos attentes. Notre leitmotiv: "Trois réponses attendues à une pièce de design –> OUI, NON, WAOUH ! "WAOUH",  la réaction que nous recherchons pour vous.
                    </p>
                    <a href="<?= $router->generate('contact'); ?>"><button type="button" class="btn btn-dark">Contactez-nous</button></a>
                    <span class="phone-number">+33 6 69 56 74 44</span>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel">
        <h5 class="carousel-title">Ils nous font confiance</h5>
        <div class="carousel-trait"></div>
        <ul class="carousel-ul">
            <?php foreach ($allLogo as $currentLogo) : ?>
                <li class="carousel-list"><img class="logo-customer" src="<?= $currentLogo->getPicture() ?>"></li>
            <?php endforeach; ?>
        </ul>
    </div>
