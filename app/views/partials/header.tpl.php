<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $viewVars['baseURI'] ?>/assets/css/reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $viewVars['baseURI'] ?>/assets/css/style.css">
</head>

<body>
    <header>
        <img class="logo" src="<?= $viewVars['baseURI'] ?>/assets/images/Poulpy.jpg" alt="Logo">
        <nav class="top-menu">
            <div id="menu_status" class="open-menu">
                --------<br>
                --------<br>
                --------<br>
            </div>
            <div id="home" class="hide">
            	<a class="xl-link" href="<?=$viewVars['baseURI']?>/home"><p class="menu men Ho">Home</p></a>
            </div>
            <div id="cours" class="hide">
                <a class="xl-link" href="<?=$viewVars['baseURI']?>/cours"><p class="menu men Co">Cours</p></a>
            </div>
            <div id="clicker" class="hide">
                <a class="xl-link" href="<?=$viewVars['baseURI']?>/clicker"><p class="menu men Cl">Clicker</p></a>
            </div>
        </nav>

    </header>