<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agrupaciones".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $anio_ac
 * @property integer $categoria_id
 */
class Agrupacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agrupaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['descripcion'], 'string'],
            [['anio_ac'], 'safe'],
            [['categoria_id'], 'integer'],
            [['nombre'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'anio_ac' => 'Anio Ac',
            'categoria_id' => 'Categoria ID',
        ];
    }
}
