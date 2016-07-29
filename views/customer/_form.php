<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_NUMBER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIRST_NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MIDDLE_INITIALS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SURNAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DOB1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GENDER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_DATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMBOSSED_NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS_CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PREFERRED_LANGUAGE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMING_CONVENTION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TITLE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SALUTATION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ADDITIONAL_TEXT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BUS_COMPANY_NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'INSTRUCTION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STREET_FREE_TEXT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ADDRESS_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ADDRESS_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CITY_NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATE_PROVINCE_NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'POSTAL_CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COUNTRY_CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ENROLLMENT_DATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TIER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TIER_START_DATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TIER_ENDS_DATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NATIONALITY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LIFE_AMOUNT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'POINTS_EXP_DATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'POINTS_EXP_AMOUNT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'POINTS_AMOUNT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TMBQPER_AMOUNT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TMBQPER_START_DATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TMBQPER_END_DATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TMBQPER_SEGMENTS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COUNTRY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NATIONALITY_CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PASSWORD')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL_ADDRESS')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
