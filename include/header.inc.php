<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link href="css/style_in.css" rel="stylesheet">
    <title>Practice NIX Solutions</title>
</head>

<body>
    <header>
        
        <section id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <h1>
                            <a style="background:none" href="./">
                                <img src="./img/php-logo.svg" width="48" height="24" alt="Logo alt">
                            </a>
                        </h1>
                        <div class="navigation ">
                            <nav>
                                <?php
                                require "menu.inc.php";
                                ?>
                                <ul class="sf-menu">
                                    <?php foreach ($menu as $key => $menuItem) : ?>
                                        <?php if ($key === 0) : ?>
                                            <li class="current"> <a href="<?= $menuItem['href'] ?>"><?= $menuItem['link'] ?></a> </li>
                                        <?php else : ?>
                                            <li> <a href="<?= $menuItem['href'] ?>"><?= $menuItem['link'] ?></a> </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </nav>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>