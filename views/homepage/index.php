<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use miloschuman\highcharts\Highcharts;
?>
<div class="my-chart">

    <?
    echo Highcharts::widget([
        'options' => [
            'chart' => [
                'type' => 'column',
            ],
            'plotOptions' => [
                'column' => [
                    'stacking' => 'normal',
                ]
            ],
            'title' => ['text' => 'Top Client'],
            'xAxis' => [
                'categories' => ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
            ],
            'series' => [
                [
                    'name' => 'sample1',
                    'data' => [250000,250000,200000,250000,300000,100000,250000,250000,250000,250000,250000,250000]
                ],
                [
                    'name' => 'sample2',
                    'data' => [150000,250000,200000,250000,300000,440000,250000,250000,250000,250000,250000,250000]
                ],
            ],

        ],
    ]);
    ?>
</div>
