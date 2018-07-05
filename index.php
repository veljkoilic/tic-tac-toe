<?php
include './tictactoelogic.php';
include 'partials/header.partial.php';
?>

<div class="wrapper">
<h1>TIC-TAC-TOE</h1>
    <h3>Winner: <span><?= $winner ?></span></h3>
    <form action="" method="get" >
        <input id="a1" type="text" name="a1" value="<?= isset($_GET['a1']) ?  $singleFields['a1'] : ""?>" onchange="submitForm()" onclick="changetoX()">
        <input id="a2" type="text" name="a2" value="<?= isset($_GET['a2']) ?  $singleFields['a2'] : ""?>" onchange="submitForm()" onclick="changetoX()">
        <input id="a3" type="text" name="a3" value="<?= isset($_GET['a3']) ?  $singleFields['a3'] : ""?>" onchange="submitForm()" onclick="changetoX()">
        <br>
        <input id="b1" type="text" name="b1" value="<?= isset($_GET['b1']) ?  $singleFields['b1'] : ""?>" onchange="submitForm()" onclick="changetoX()">
        <input id="b2" type="text" name="b2" value="<?= isset($_GET['b2']) ?  $singleFields['b2'] : ""?>" onchange="submitForm()" onclick="changetoX()">
        <input id="b3" type="text" name="b3" value="<?= isset($_GET['b3']) ?  $singleFields['b3'] : ""?>" onchange="submitForm()" onclick="changetoX()">
        <br>
        <input id="c1" type="text" name="c1" value="<?= isset($_GET['c1']) ?  $singleFields['c1'] : ""?>" onchange="submitForm()" onclick="changetoX()">
        <input id="c2" type="text" name="c2" value="<?= isset($_GET['c2']) ?  $singleFields['c2'] : ""?>" onchange="submitForm()" onclick="changetoX()">
        <input id="c3" type="text" name="c3" value="<?= isset($_GET['c3']) ?  $singleFields['c3'] : ""?>" onchange="submitForm()" onclick="changetoX()">
        <a href="index.php">RESET</a>
    </form>
</div>


<?php
include 'partials/footer.partial.php';
?>

