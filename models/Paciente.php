<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paciente".
 *
 * @property integer $id
 * @property string $dni
 * @property string $apellido
 * @property string $nombre
 * @property string $nacimiento
 * @property string $domicilio
 * @property string $localidad
 * @property string $telefono
 * @property string $email
 */
class Paciente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paciente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dni', 'apellido', 'nombre', 'nacimiento'], 'required'],
            [['id'], 'integer'],
            [['nacimiento'], 'safe'],
            [['dni'], 'string', 'max' => 8],
            [['apellido', 'nombre', 'domicilio', 'localidad', 'telefono'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 100],
            [['dni'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dni' => 'Dni',
            'apellido' => 'Apellido',
            'nombre' => 'Nombre',
            'nacimiento' => 'Fecha de Nacimiento',
            'domicilio' => 'Domicilio',
            'localidad' => 'Localidad',
            'telefono' => 'Telefono',
            'email' => 'E-mail',
        ];
    }
}
