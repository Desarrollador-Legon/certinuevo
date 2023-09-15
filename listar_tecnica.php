<?php

use yii\grid\GridView;
use yii\helpers\Html;

//$permission_view = Yii::$app->user->can('app-servicio-view');

$this->title = 'Listar Servicios Área Técnica';
?>

<div class="servicio-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <br>
<?php

$gridColumns = [
    [
        'class' => 'yii\grid\SerialColumn',
        'visible' => Yii::$app->user->can('visualizar-ids')
    ],
    [
        'attribute' => 'sucursal_id',
        'value' => 'sucursal.nombre'
    ],
    [
        'attribute' => 'oficina_id',
        'value' => 'sucursalOficina.nombre'
    ],
    [
        'attribute' => 'barrio_id',
        'value' => 'barrio.nombre'
    ],
    'direccion',
    [
        'label' => 'Cliente Identificación número',
        'value' => 'cliente.identificacion_numero'
    ],
    [
        'label' => 'Cliente Nombre',
        'value' => 'cliente.nombreCompleto'
    ],
    'solicitado_at',
    'ejecutado_at',
    [
        'attribute' => 'estado',
        'value' => 'estadoNombre',
    ],
    [
        'attribute' => 'tecnico_id',
        'value' => 'nombreTecnico'
    ],
    [
        'attribute' => 'nodo_id',
        'value' => 'nodo.nombre'
    ],
    [
        'attribute' => 'estrato_id',
        'value' => 'estrato.nombre'
    ],
    [
        'attribute' => 'solicitud_id',
        'value' => 'solicitud.nombre'
    ],
    [
        'attribute' => 'causa_id',
        'value' => 'causa.nombre'
    ],
    [
        'attribute' => 'contrato_producto_id',
        'value' => 'contratoProducto.producto.nombre'
    ],
];

//echo $this->render('_encabezado', ['subtitulo' => '', 'model' => $model]);

echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
    ]);
