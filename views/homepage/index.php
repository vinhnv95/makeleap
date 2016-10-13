<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;
?>
<?php
    $chartTitle = "Top Clients";
    $year = date("Y");
    print "<h2>$chartTitle  "
        . Html::button($year, ['class' => 'btn btn-default active btn-xs'])
        . "</h2>";
?>



<div class="my-chart">

    <?php
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
<?= Html::button('Top Clients', ['class' => 'btn btn-default']);?>
<?= Html::button('Paid/Unpaid', ['class' => 'btn btn-default']);?>
<?= Html::button('Year over Year', ['class' => 'btn btn-default']);?>


