<?php
$this->breadcrumbs = array(
	'Locations',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Location', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Location', 'url' => array('admin')),
);
?>

<h1>Locations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 