<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;
use yii\web\View;
use yii\widgets\Pjax;
?>
<?php Pjax::begin(); ?>
<?php
//    $chartTitle = "Top Clients";
    $year = date("Y");
    print "<h3>$chartTitle  "
        . Html::button($year, ['class' => 'btn btn-default active btn-xs'])
        . "</h3>";
?>


<div class="my-chart">

    <?php
    echo Highcharts::widget([
        'htmlOptions' => [
            'id' => 'chart',
        ],
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
            'series' => $data,

        ],
    ]);
    ?>
</div>
<div class="btn-group">

    <?= Html::a('Top Clients',['homepage/top-clients'],['class' => 'btn btn-default']);?>
    <?= Html::a('Paid/Unpaid',['homepage/paid-unpaid'],['class' => 'btn btn-default']);?>
    <?= Html::a('Year over Year',['homepage/year-over-year'],['class' => 'btn btn-default']);?>
</div>
<?php Pjax::end();?>