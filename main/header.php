<!DOCTYPE html>
<html lang="ru">
<head><title></title>

	<? $APPLICATION->ShowHead(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

	
    <?php

	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/common.css");
    ?>

</head>
<body>
    <div id="panel">
        <? $APPLICATION->ShowPanel(); ?>
    </div>

