<?php

namespace vendor\marian\barcodeImg;

use Yii;

class BarcodeImgController extends \yii\base\Controller
{
    /**
     * (AJAX Action) 
     * Action to get generated barcode as Image
     */
    public function actionGenerate() 
    {
		$inputCode = Yii::$app->getRequest()->getQueryParam("code");
		$bc = new BarcodeImg;
		$bc->init('png');
		$bc->build($inputCode);
    }
}
