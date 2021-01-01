<head>
    <title>Cours</title>
</head>
<main class="cours">

        <!-- DANS LE CAS OU ON AFFICHE TOUS LES NUMEROS DES COURS / LECONS -->

    <?php if ($viewVars['episodes'] !== []): ?>
        <?php $episodes = $viewVars['episodes']?>
        <?php   $saison = $viewVars['saisons']?>
        <?php $url = $router->generate(
                'cours'
                ) ?>
    <section class="title">
        <div class="container contain_bis">
            <a href="<?=$url?>">
                <section class="lesson">
                    <img src="<?= $viewVars['baseURI'] ?>/assets/images/<?=$saison->getPicture()?>.png" alt="<?=$saison->getPicture()?>" class="image">
                    <div class="vignette">
                        <h2 class="name">
                            <?=$saison->getNumber()?>
                        </h2>
                        <h3>
                            <?=$saison->getName()?>
                        </h3>
                        <h3>
                            <?=$saison->getSubtitle()?>
                        </h3>
                    </div>
                </section>
            </a>
        </div>
    </section>
    <section class="full_lessons">
        <?php foreach ($episodes as $value) : ?>
            <?php $url_class = $router->generate(
                'lessons',
                [
                    'lessons' => $saison->getNumber(),
                    'classe' => $value->getNumber()
                ]
                ) ?>
            <div class="container contain_lesson">
                <a href="<?=$url_class?>">
                    <section class="lesson">
                        <img src="<?= $viewVars['baseURI'] ?>/assets/images/Crash.png" alt="Crash" class="image">
                        <div class="vignette">
                            <h2 class="name">
                                <?= $value->getName() ?>
                            </h2>
                            <h3>
                                <?= $value->getSubtitle() ?>
                            </h3>
                        </div>
                    </section>
                </a>
            </div>
        <?php endforeach ?>
    </section>
    <?php else : ?>

        <!-- DANS LE CAS OU ON AFFICHE TOUS LES NUMEROS DES SAISON -->

    <?php   $saisons = $viewVars['saisons']; ?>
    <section class="full_lessons">
        <?php foreach ($saisons as $value) : ?>
            <?php $url_season = $router->generate(
                'cours',
                [
                    'lessons' => $value->getNumber()
                ]
                ) ?>
            <div class="container">
                <a href="<?=$url_season?>">
                    <section class="lesson">
                        <img src="<?= $viewVars['baseURI'] ?>/assets/images/<?= $value->getPicture() ?>.png" alt="<?= $value->getPicture() ?>" class="image">
                        <div class="vignette">
                            <h2 class="name">
                                <?= $value->getNumber() ?>
                            </h2>
                            <h3>
                                <?= $value->getName() ?>
                            </h3>
                            <h3>
                                <?= $value->getSubtitle() ?>
                            </h3>
                        </div>
                    </section>
                </a>
            </div>
        <?php endforeach ?>
    </section>
    <?php endif?>
</main>