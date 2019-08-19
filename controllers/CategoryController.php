<?php
namespace app\controllers;
use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;
class CategoryController extends ActiveController
{
    public $modelClass = 'app\models\Category';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className(),
        ];
        return $behaviors;
    }
}