<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = $model->TITLE;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Customers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_NUMBER',
            'FIRST_NAME',
            'MIDDLE_INITIALS',
            'SURNAME',
            'DOB1',
            'GENDER',
            'CREATE_DATE',
            'EMBOSSED_NAME',
            'STATUS_CODE',
            'PREFERRED_LANGUAGE',
            'NAMING_CONVENTION',
            'TITLE',
            'SALUTATION',
            'ADDITIONAL_TEXT',
            'BUS_COMPANY_NAME',
            'INSTRUCTION',
            'STREET_FREE_TEXT',
            'ADDRESS_2',
            'ADDRESS_3',
            'CITY_NAME',
            'STATE_PROVINCE_NAME',
            'POSTAL_CODE',
            'COUNTRY_CODE',
            'ENROLLMENT_DATE',
            'TIER',
            'TIER_START_DATE',
            'TIER_ENDS_DATE',
            'NATIONALITY',
            'LIFE_AMOUNT',
            'POINTS_EXP_DATE',
            'POINTS_EXP_AMOUNT',
            'POINTS_AMOUNT',
            'TMBQPER_AMOUNT',
            'TMBQPER_START_DATE',
            'TMBQPER_END_DATE',
            'TMBQPER_SEGMENTS',
            'COUNTRY',
            'NATIONALITY_CODE',
            'PASSWORD',
            'EMAIL_ADDRESS:email',
            'ID',
        ],
    ]) ?>

</div>
