<?php $episode = $viewVars['episode'] ?>
<?php $saison = $viewVars['saison'] ?>
<?php $allEpisodes = $viewVars['allEpisodes'] ?>

<head>
    <title>Leçon <?= $saison->getNumber() ?>-<?= ucfirst($episode->getNumber()) ?></title>
</head>


<main class="lessons">

    <div class="buttons">
        <!-- Permet de revenir à la page regroupant tous les épisodes de la saison -->

        <section class="full_lessons">
        <?php $url_saison = $router->generate(
                'cours',
                [
                    'lessons' => $saison->getNumber(),
                ]
            ) ?>
            <div class="container">
                <a href="<?= $url_saison?>">
                    <section class="lesson">
                        <img src="<?= $viewVars['baseURI'] ?>/assets/images/Crash.png" alt="Crash" class="image">
                        <div class="vignette">
                            <h2>
                                Revenir
                            </h2>
                            <h2>
                                à la page
                            </h2>
                            <h2>
                                Episodes
                            </h2>
                        </div>
                    </section>
                </a>
            </div>
        </section>

        <!-- Permet d'afficher tous les épisodes -->

        <section id="lesson_status" class="full_lessons open_lessons">
            <div class="container">
                <div>
                    <section class="lesson">
                        <img src="<?= $viewVars['baseURI'] ?>/assets/images/Crash.png" alt="Crash" class="image">
                        <div class="vignette">
                            <h2 class="name">
                                Afficher
                            </h2>
                            <h2>
                                tous les
                            </h2>
                            <h2>
                                épisodes
                            </h2>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <!-- Affiche la saison dans laquelle on est actuellement et revenir à la page de toutes les saisons -->

        <section class="full_lessons">
        <?php $url = $router->generate(
                'cours',
            ) ?>
            <div class="container">
                <a href="<?= $url?>">
                    <section class="lesson">
                        <img src="<?= $viewVars['baseURI'] ?>/assets/images/<?= $saison->getPicture()?>.png" alt="<?= $saison->getPicture()?>" class="image">
                        <div class="vignette">
                            <h2 class="name">
                            <?= $saison->getNumber()?>
                            </h2>
                            <h2 class="name">
                            <?= $saison->getName()?>
                            </h2>
                            <h2 class="name">
                            <?= $saison->getSubtitle()?>
                            </h2>
                        </div>
                    </section>
                </a>
            </div>
        </section>
    </div>
        <!-- Cette partie n'apparait qu'une fois qu'on appuie sur le bouton "Afficher tous les épisodes" -->

    <!-- Affichage dynamique de tous les noms d'épisodes -->
    <section id="all_lessons" class="full_lessons hide">
        <?php foreach ($allEpisodes as $value) : ?>
            <?php $url_class = $router->generate(
                'lessons',
                [
                    'lessons' => $saison->getNumber(),
                    'classe' => $value->getNumber()
                ]
            ) ?>
            <div class="container">
                <a href="<?= $url_class ?>">
                    <section class="lesson">
                        <img src="<?= $viewVars['baseURI'] ?>/assets/images/Crash.png" alt="Crash" class="image">
                        <div class="vignette">
                            <h2>
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
    <div id="contenu_cours">
        <p>
            <?= $episode->getContent() ?>
        </p>
    </div>
</main>