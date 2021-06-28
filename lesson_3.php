<?php require './include/header.inc.php'; ?>

<h1>Урок 3</h1>

<?php require './function.php'; ?>

<form method="post">
    <input type="text" name="text" value="Привет NIX Education">
    <input type="submit" name="" value="Enter">
</form>
<?php

if( !empty($_POST['text']) ){

    $result = new ReverseText($_POST['text']);

    echo '<p><b>Строка в обратном порядке => </b>' . $result->setText() . '</p>';
}

?>


<?php require './include/footer.inc.php'; ?>