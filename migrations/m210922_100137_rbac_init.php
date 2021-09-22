<?php

use app\models\User;
use yii\db\Migration;

/**
 * Class m210922_100137_rbac_init
 */
class m210922_100137_rbac_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->assign($admin, User::findByUsername('admin')->getId());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210922_100137_rbac_init cannot be reverted.\n";
        $auth = Yii::$app->authManager;

        $auth->removeAll();
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210922_100137_rbac_init cannot be reverted.\n";

        return false;
    }
    */
}
