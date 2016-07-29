<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_NUMBER') ?>

    <?= $form->field($model, 'FIRST_NAME') ?>

    <?= $form->field($model, 'MIDDLE_INITIALS') ?>

    <?= $form->field($model, 'SURNAME') ?>

    <?= $form->field($model, 'DOB1') ?>

    <?php // echo $form->field($model, 'GENDER') ?>

    <?php // echo $form->field($model, 'CREATE_DATE') ?>

    <?php // echo $form->field($model, 'EMBOSSED_NAME') ?>

    <?php // echo $form->field($model, 'STATUS_CODE') ?>

    <?php // echo $form->field($model, 'PREFERRED_LANGUAGE') ?>

    <?php // echo $form->field($model, 'NAMING_CONVENTION') ?>

    <?php // echo $form->field($model, 'TITLE') ?>

    <?php // echo $form->field($model, 'SALUTATION') ?>

    <?php // echo $form->field($model, 'ADDITIONAL_TEXT') ?>

    <?php // echo $form->field($model, 'BUS_COMPANY_NAME') ?>

    <?php // echo $form->field($model, 'INSTRUCTION') ?>

    <?php // echo $form->field($model, 'STREET_FREE_TEXT') ?>

    <?php // echo $form->field($model, 'ADDRESS_2') ?>

    <?php // echo $form->field($model, 'ADDRESS_3') ?>

    <?php // echo $form->field($model, 'CITY_NAME') ?>

    <?php // echo $form->field($model, 'STATE_PROVINCE_NAME') ?>

    <?php // echo $form->field($model, 'POSTAL_CODE') ?>

    <?php // echo $form->field($model, 'COUNTRY_CODE') ?>

    <?php // echo $form->field($model, 'ENROLLMENT_DATE') ?>

    <?php // echo $form->field($model, 'TIER') ?>

    <?php // echo $form->field($model, 'TIER_START_DATE') ?>

    <?php // echo $form->field($model, 'TIER_ENDS_DATE') ?>

    <?php // echo $form->field($model, 'NATIONALITY') ?>

    <?php // echo $form->field($model, 'LIFE_AMOUNT') ?>

    <?php // echo $form->field($model, 'POINTS_EXP_DATE') ?>

    <?php // echo $form->field($model, 'POINTS_EXP_AMOUNT') ?>

    <?php // echo $form->field($model, 'POINTS_AMOUNT') ?>

    <?php // echo $form->field($model, 'TMBQPER_AMOUNT') ?>

    <?php // echo $form->field($model, 'TMBQPER_START_DATE') ?>

    <?php // echo $form->field($model, 'TMBQPER_END_DATE') ?>

    <?php // echo $form->field($model, 'TMBQPER_SEGMENTS') ?>

    <?php // echo $form->field($model, 'COUNTRY') ?>

    <?php // echo $form->field($model, 'NATIONALITY_CODE') ?>

    <?php // echo $form->field($model, 'PASSWORD') ?>

    <?php // echo $form->field($model, 'EMAIL_ADDRESS') ?>

    <?php // echo $form->field($model, 'ID') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
