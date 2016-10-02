<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $datejoin
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['datejoin'], 'safe'],
            [['username', 'password'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 40],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'datejoin' => 'Datejoin',
        ];
    }
    public  function checkLogin($username, $password)
    {
        $select = User::find()->where(['username'=>$username,'password'=>$password])->count();
        if ($select==1)
            return true;
        else
            return false;
    }

}
