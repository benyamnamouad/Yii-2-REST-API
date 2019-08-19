<?php

// ...

use yii\filters\auth\HttpBearerAuth;

class BearerAuthController extends \yii\rest\ActiveController
{
    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'bearerAuth' => [
                'class' => HttpBearerAuth::className()
            ]
        ]);
    }
}