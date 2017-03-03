<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Agrupacion */

$this->title = 'Create Agrupacion';
$this->params['breadcrumbs'][] = ['label' => 'Agrupacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agrupacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
