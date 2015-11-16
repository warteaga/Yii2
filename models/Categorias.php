<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorias".
 *
 * @property integer $idcategoria
 * @property integer $idestatus
 * @property string $categoria
 *
 * @property Estatus $idestatus0
 * @property Productos[] $productos
 */
class Categorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idestatus', 'categoria'], 'required'],
            [['idestatus'], 'integer'],
            [['categoria'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcategoria' => Yii::t('app', 'Idcategoria'),
            'idestatus' => Yii::t('app', 'Idestatus'),
            'categoria' => Yii::t('app', 'Categoria'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdestatus0()
    {
        return $this->hasOne(Estatus::className(), ['idestatus' => 'idestatus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Productos::className(), ['idcategoria' => 'idcategoria']);
    }
}
