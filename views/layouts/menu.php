<?php
/**
 * Created by PhpStorm.
 * User: vinh
 * Date: 29/09/2016
 * Time: 15:10
 */
use yii\helpers\Html;
?>
<div class="collapse navbar-collapse" id="menu">
    <ul class="nav navbar-nav">
        <li><a href="#"><?= Html::img('@web/image/overview.png',['class' => 'icon-image'])?> Overview</a></li>
        <li><a href="#"><?= Html::img('@web/image/your_company.png',['class' => 'icon-image'])?> Your Company</a></li>
        <li><a href="#"><?= Html::img('@web/image/document-setting.png',['class' => 'icon-image'])?> Document Settings</a></li>
        <li><a href="#"><?= Html::img('@web/image/report.png',['class' => 'icon-image'])?> Reports</a></li>
        <li><a href="#"><?= Html::img('@web/image/history.png',['class' => 'icon-image'])?> History</a></li>
    </ul>
</div>
