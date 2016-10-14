<?php

namespace app\controllers;

class HomepageController extends \yii\web\Controller
{
    public $layout = 'homepage';
    public $topClientsData = [
        [
            'name' => 'sample1',
            'data' => [250000,250000,200000,250000,300000,100000,250000,250000,250000,250000,250000,250000]
        ],
        [
            'name' => 'sample2',
            'data' => [150000,250000,200000,250000,300000,440000,250000,250000,250000,250000,250000,250000]
        ],
    ];
    public $paidUnpaidData = [
        [
            'name' => 'sample3',
            'data' => [110000,250000,300000,250000,300000,400000,250000,250000,150000,250000,250000,250000]
        ],
        [
            'name' => 'sample4',
            'data' => [150000,110000,200000,400000,300000,330000,150000,250000,250000,250000,250000,250000]
        ],
    ];
    public $yearOverYearData = [
        [
            'name' => 'sample3',
            'data' => [210000,250000,300000,250000,600000,400000,250000,250000,150000,850000,250000,250000]
        ],
        [
            'name' => 'sample4',
            'data' => [750000,110000,200000,400000,300000,330000,150000,250000,250000,250000,150000,250000]
        ],
    ];
    public function actionIndex()
    {
        return $this->render('index',[
            'chartTitle' => 'Top Clients',
            'data' => $this->topClientsData
        ]);
    }
    public function actionTopClients()
    {
        return $this->render('index',[
            'chartTitle' => 'Top Clients',
            'data' => $this->topClientsData
        ]);
    }
    public function actionPaidUnpaid()
    {
        return $this->render('index',[
            'chartTitle' => 'Paid/Unpaid',
            'data' => $this->paidUnpaidData,
        ]);
    }
    public function actionYearOverYear()
    {
        return $this->render('index',[
            'chartTitle' => 'Year Over Year',
            'data' => $this->yearOverYearData,
        ]);
    }

}
