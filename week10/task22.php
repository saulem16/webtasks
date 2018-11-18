<?php
	$makers = $_REQUEST["makers"];
	$year = $_REQUEST["year"];
	$model = $_REQUEST["model"];
	$engine = $_REQUEST["engine"];
	$price = $_REQUEST["price"];
    $tax=$_REQUEST["tax"];
    $tcheck=$_REQUEST["tcheck"];
    $invest=$_REQUEST["invest"];nb
?>
<html>
<head>
    <title>

    </title>
    <link rel="stylesheet" href="mail.css" type="text/css">
</head>
<body>
<main>
    <label>You added new item:</label>
    <span><b><?php echo $makers; ?></b></span><br>
    <label>produced in <? $year?>(<?php echo  2018-intval($year) ?>years old)</label>

    <label>with <?php echo $engine ?></label><br>
    <label>Tax payed:<?php echo $tax?></label><br>
    <label>Technical check passed:</label>
    <span><?php echo $tcheck?></span><br>
    <label >Doesn't require investment:</label>
    <span><?php $invest?></span><br>
    <label><?php echo $price?>$</label>
</main>
</body>
</html>

