<?=
/* \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'nombre',
    ],
    'tableOptions' => [
        'class' => 'table table-bordered table-hover',
    ],
]) */
\yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'options' => ['class' => 'list-view'],
    'itemView' => '_lista',
]);

?>
