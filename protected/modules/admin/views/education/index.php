<?php
$this->breadcrumbs = array(
	'Educations',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Education', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Education', 'url' => array('admin')),
);
?>

<h1>Educations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 