<?php 
namespace app\models;
use Yii;
use yii\db\ActiveRecord;
class ApplicationForm extends ActiveRecord{
	// public $name;
	// public $tell;
	// public $text;
	public static function tableName(){
		return 'application';
	}
	public function rules()
    {
        return [
            [['name', 'tell', 'text'], 'required'],
        ];
    }
}
?>