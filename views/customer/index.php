<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Vietnam Airline Leaked Customers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'EMBOSSED_NAME',
            //'ID_NUMBER',
            //'FIRST_NAME',
            //'MIDDLE_INITIALS',
            //'SURNAME',
            'DOB1',
            'GENDER',
            // 'CREATE_DATE',

            // 'STATUS_CODE',
            // 'PREFERRED_LANGUAGE',
            // 'NAMING_CONVENTION',
            // 'TITLE',
            // 'SALUTATION',
            // 'ADDITIONAL_TEXT',
            // 'BUS_COMPANY_NAME',
            // 'INSTRUCTION',
            'STREET_FREE_TEXT',
            // 'ADDRESS_2',
            // 'ADDRESS_3',
            // 'CITY_NAME',
            // 'STATE_PROVINCE_NAME',
            // 'POSTAL_CODE',
            // 'COUNTRY_CODE',
            // 'ENROLLMENT_DATE',
            // 'TIER',
            // 'TIER_START_DATE',
            // 'TIER_ENDS_DATE',
            // 'NATIONALITY',
            // 'LIFE_AMOUNT',
            // 'POINTS_EXP_DATE',
            // 'POINTS_EXP_AMOUNT',
            // 'POINTS_AMOUNT',
            // 'TMBQPER_AMOUNT',
            // 'TMBQPER_START_DATE',
            // 'TMBQPER_END_DATE',
            // 'TMBQPER_SEGMENTS',
            'COUNTRY',
            // 'NATIONALITY_CODE',
            // 'PASSWORD',
            // 'EMAIL_ADDRESS:email',
            // 'ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
