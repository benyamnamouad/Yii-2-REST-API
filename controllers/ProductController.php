<?php
namespace app\controllers;
 use yii\rest\ActiveController;
 use yii\filters\auth\QueryParamAuth;


class ProductController extends ActiveController
{
    public $modelClass = 'app\models\Product';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className(),
        ];
        return $behaviors;
    }
}


