<?php require './include/header.inc.php'; ?>

<h1>Урок 1</h1>

    <?php
    require './function.php';
    $clas = new Multiplication;
    ?>

    <table border="1">
        <tr>
            <?php
            $clas->line_1();
            ?>
        </tr>
        <tr>
            <?php
            $clas->line_2();
            ?>
        </tr>
    </table>

<?php require './include/footer.inc.php'; ?>