<?php
$que = $Que->find($_GET['id']);
?>

<fieldset>
    <legend>目前位置:首頁 > 問卷調查 > <?= $que['text']; ?></legend>
    <h3><?= $que['text']; ?></h3>

    <?php
    $opts = $Que->all(['subject_id' => $_GET['id']]);
    foreach ($opts as $opt) {
        $total=($que['vote']!=0)?$que['vote']:1;

        $rate=round($opt['vote']/$total,2);

        echo "<div>";
        echo "<div>{$opt['text']}</div>";
        echo "<div style='width:".(40*$rate)."%;height:20px;background-color:#ccc'></div>";
        echo "<div>{$opt['vote']}票</div>";
        echo "</div>";
    }
    ?>

    <div class="ct">
        <input type="submit" value="我要投票">
    </div>

</fieldset>