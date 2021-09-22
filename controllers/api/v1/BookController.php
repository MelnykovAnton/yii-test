<?php

namespace app\controllers\api\v1;

use yii\db\Query;
use yii\rest\ActiveController;
use yii\web\Response;

class BookController extends ActiveController
{
    public $modelClass = 'app\models\Book';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
        $behaviors['verbFilter']['actions']['update'] = ['POST'];
        return $behaviors;
    }

    public function actionList() {
        return (new Query())
            ->select('book.*, author.name as author_name ')
            ->from('book')
            ->leftJoin('author', 'author.id = book.author_id')
            ->all();
    }
}
