<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;


$url = Url::to(['agrupaciones/agrupas']);
$urlActual = Url::to(['agrupaciones/agrupa']);
$js = <<<EOT
    $('#agrupacion-nombre').keyup(function() {
        var q = $('#agrupacion-nombre').val();
        if (q == '') {
            $('#agru').html('');
        }
        if (!isNaN(q)) {
            return;
        }
        $.ajax({
            method: 'GET',
            url: '$url',
            data: {
                q: q
            },
            success: function (data, status, event) {
                $('#agru').html(data);
                $('#agru').click(function (event) {
                    var target = event.currentTarget;
                    if ($(target).children().length > 1) {
                        var obj = $(target).children().first();
                        numero = $(obj[0]).text();
                        window.location.assign('$urlActual' + '?numero=' + numero);
                    }
                });
            }
        });
    });
EOT;
$this->registerJs($js);
/* @var $this yii\web\View */
/* @var $model app\models\Agrupacion */
/* @var $form ActiveForm */
?>
<div class="agrupa">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nombre') ?>
        <?= $form->field($model, 'descripcion') ?>
        <?= $form->field($model, 'anio_ac') ?>
        <?= $form->field($model, 'categoria_id') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- agrupa -->
<div id="agru">

</div>
