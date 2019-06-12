<?php
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<body>



            <?php
                Modal::begin([
                    'toggleButton' => [
                        'style' => 'background-image: url(images/image_1.jpg)',
                        'class' => 'photography-entry imп d-flex justify-content-center align-items-center',
                    ],
                ]);
            ?>

                <div class="application-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'tell')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>

            <?php Modal::end(); ?>

           

</body>