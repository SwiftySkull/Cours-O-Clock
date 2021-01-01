<?php $saisons = $viewVars['saisons']; ?>

<head>
    <title>Cours</title>
</head>
<main class="cours">
    <?php foreach ($saisons as $value) : ?>
        <?php $url = $router->generate(
            'cours',
            [
                'courses' => $value->getId()
            ]
            )?>
        <div class="container">
            <a href="<?= $viewVars['baseURI'] ?>/cours/<?= $value->getNumber() ?>" class="b">
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
</main>