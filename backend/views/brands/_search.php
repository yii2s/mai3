<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BrandSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-outside form-search form-layout-column" style="display: none">
    <div class="brand-search form">

        <?php
        $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
        ]);
        ?>

        <?= $form->field($model, 'id') ?>

        <?= $form->field($model, 'alias') ?>

        <?= $form->field($model, 'name') ?>

        <?= $form->field($model, 'icon_path') ?>

        <?= $form->field($model, 'description') ?>

        <?php // echo $form->field($model, 'ordering') ?>

        <?php // echo $form->field($model, 'tenant_id') ?>

        <?php // echo $form->field($model, 'status') ?>

        <?php // echo $form->field($model, 'created_at') ?>

        <?php // echo $form->field($model, 'created_by') ?>

        <?php // echo $form->field($model, 'updated_at') ?>

        <?php // echo $form->field($model, 'updated_by')  ?>

        <div class="form-group buttons">
            <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
