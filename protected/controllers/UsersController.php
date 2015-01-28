<?php

class UsersController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Users'),
		));
	}

	public function actionCreate() {
		$model = new Users;


		if (isset($_POST['Users'])) {
			$model->attributes = $_POST['Users'];

			if ($model->save()) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Users');


		if (isset($_POST['Users'])) {
			$model->attributes = $_POST['Users'];

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'Users')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}
/*
	public function actionAdmin() {
		$dataProvider = new CActiveDataProvider('Users');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}*/

	public function actionAdmin() {
		$model = new Users('search');
		$model->unsetAttributes();

		if (isset($_GET['Users']))
			$model->attributes = $_GET['Users'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	public function actionIndex() {
		$model = new Users('search');
		$model->unsetAttributes();

		if (isset($_GET['Users']))
			$model->attributes = $_GET['Users'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}