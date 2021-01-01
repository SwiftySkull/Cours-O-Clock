Jean jacques goldman

INSERT INTO `Episode`
VALUE (NULL , 'e1' , 'Episode 1' , 'Premier Episode'
, 'Cours episode 1 saison 3', '3');
INSERT INTO `Episode`
VALUE (NULL , 'e2' , 'Episode 2' , 'Deuxième Episode'
, 'Cours cours episode 2 saison 3', '3');
INSERT INTO `Episode`
VALUE (NULL , 'e3' , 'Episode 3' , 'Troisième Episode'
, 'Cours cours cours episode 3 saison 3', '3');
INSERT INTO `Episode`
VALUE (NULL , 'e4' , 'Episode 4' , 'Quatrième Episode'
, 'Cours cours cours cours episode 4 saison 3', '3');
INSERT INTO `Episode`
VALUE (NULL , 'e5' , 'Episode 5' , 'Cinquième Episode'
, 'Cours cours cours cours cours episode 5 saison 3', '3');
INSERT INTO `Episode`
VALUE (NULL , 'e6' , 'Episode 6' , 'Sixième Episode'
, 'Cours cours cours cours cours cours episode 6 saison 3', '3');
INSERT INTO `Episode`
VALUE (NULL , 'e7' , 'Episode 7' , 'Septième Episode'
, 'Cours cours cours cours cours cours cours episode 7 saison 3', '3');
INSERT INTO `Episode`
VALUE (NULL , 'e8' , 'Episode 8' , 'Huitième Episode'
, 'Cours cours cours cours cours cours cours cours episode 8 saison 3', '3');

Affichage VIM

<section class="cours">
        <div class="container">
            <?php foreach ($catalogs as $info) : ?>
                <div class="col-lg-4">
                    <?php if ($info->getPicture()) : ?>
                        <div class="card border-0 text-center text-white"><img src="<?= $viewVars['baseURI'] ?>/<?= $info->getPicture() ?>" alt="Card image" class="card-img">
                    <?php else : ?>
                        <div class="card border-0 text-center text-white"><img src="<?= $viewVars['baseURI'] ?>/assets/images/carre.jpg" alt="Card image" class="card-img">
                    <?php endif ?>
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100">
                            <h2 class="display-4 mb-4"><?= $info->getName() ?></h2><a href="<?= $viewVars['baseURI'] ?>/catalog/<?= $style ?>/<?= $info->getId() ?>" class="btn btn-link text-white"><?= $info->getSubtitle() ?>
                            <i class="fa-arrow-right fa ml-2"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
