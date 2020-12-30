<head>
    <title>Clicker</title>
</head>

<main class="clicker">
<p>
    Click Clicker
</p>
<br>

<div class="game">
    <div id="counter">CLICK</div>
</div>
<br>
<div>
    <p>
        Votre collection de clicks
    </p>
    <div id="count">0</div>
    <div id="message_perso"></div>
    <br>
    <p>
        Voici ton dernier trophée !
    </p>
    <div id="last_trophy"></div>
    <p>
        Voici ta collection de trophées de Vrais Clicks
    </p>
    <div id="trophy"></div>
    <br>
    <div id="achats">
        <button id="double_click">Double clic</button>
    </div>
    <button id="clean_trophy">Effacer les trophées</button>
</div>
</main>




<script src="<?= $viewVars['baseURI'] ?>/assets/js/click.js"></script>