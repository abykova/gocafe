<?php 
namespace app\models;
use Yii;
/**
 * 
 */
class Cafes extends \yii\db\ActiveRecord
{
	public static function tableName(){
		return 'cafes';
	}
	public function rules(){
		return [
            [['id_cafe', 'name', 'kitchen','content', 'evarage_check', 'working_hours','address', 'tell', 'img', 'hit', 'new'], 'required'],
            
        ];
	}
	public function attrebuteLabels()
	{
		return [
			'id_cafe'=>'ID',
			'name'=>'Название',
			'kitchen'=>'Кухня',
			'content'=>'Описание',
			'evarage_check'=>'Средний чек',
			'working_hours'=>'Время работы',
			'address'=>'Адрес',
			'tell'=>'Телефон',
			'img'=>'Картинка',
			'hit'=>'Популярное',
			'new'=>'Новинка',
		];
	}
}
?>