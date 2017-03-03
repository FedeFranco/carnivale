<?php
namespace app\models;
use yii\base\Model;
class AgrupacionForm extends Model
{
    public $nombre;
    public $descripcion;
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            ['descripcion', 'safe']
        ];
    }
    public function attributeLabels()
    {
        return [
            'nombre'=> 'nombre',
            'descripcion'=> 'Descripción de la Argrupación',
        ];
    }
}
