<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is a demo using Yii2 framework to dig the data that is leaked by the fucking Chinese attack to Vietnam Airline Database on 29-Jul-2016.<br>
        The source data is an XLSX file that they uploaded <a href="http://pastebin.com/SKc1j5PC">HERE</a>
    </p>
</div>
