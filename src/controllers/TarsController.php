<?php

namespace app\controllers;

use app\tars\cservant\PHPTest\Yii2Tars\tarsObj\TestTafServiceServant;
use Lxj\Yii2\Tars\Config;
use Yii;
use yii\web\Controller;

class TarsController extends Controller
{
    public function actionHttp()
    {
        Yii::info('test yii2 tars log');
        return '接入Yii2 Router 成功,get入参:' . json_encode(\Yii::$app->request->get()) .
            ',post入参:' . json_encode(\Yii::$app->request->post());
    }

    public function actionTars()
    {
        $config = Config::communicatorConfig(\Yii::$app->params['tars']['deploy_cfg']);
        return (new TestTafServiceServant($config))->test();
    }
}
