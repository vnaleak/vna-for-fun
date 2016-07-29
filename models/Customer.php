<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%customer}}".
 *
 * @property string $ID_NUMBER
 * @property string $FIRST_NAME
 * @property string $MIDDLE_INITIALS
 * @property string $SURNAME
 * @property string $DOB1
 * @property string $GENDER
 * @property string $CREATE_DATE
 * @property string $EMBOSSED_NAME
 * @property string $STATUS_CODE
 * @property string $PREFERRED_LANGUAGE
 * @property string $NAMING_CONVENTION
 * @property string $TITLE
 * @property string $SALUTATION
 * @property string $ADDITIONAL_TEXT
 * @property string $BUS_COMPANY_NAME
 * @property string $INSTRUCTION
 * @property string $STREET_FREE_TEXT
 * @property string $ADDRESS_2
 * @property string $ADDRESS_3
 * @property string $CITY_NAME
 * @property string $STATE_PROVINCE_NAME
 * @property string $POSTAL_CODE
 * @property string $COUNTRY_CODE
 * @property string $ENROLLMENT_DATE
 * @property string $TIER
 * @property string $TIER_START_DATE
 * @property string $TIER_ENDS_DATE
 * @property string $NATIONALITY
 * @property string $LIFE_AMOUNT
 * @property string $POINTS_EXP_DATE
 * @property string $POINTS_EXP_AMOUNT
 * @property string $POINTS_AMOUNT
 * @property string $TMBQPER_AMOUNT
 * @property string $TMBQPER_START_DATE
 * @property string $TMBQPER_END_DATE
 * @property string $TMBQPER_SEGMENTS
 * @property string $COUNTRY
 * @property string $NATIONALITY_CODE
 * @property string $PASSWORD
 * @property string $EMAIL_ADDRESS
 * @property integer $ID
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%customer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_NUMBER', 'FIRST_NAME', 'MIDDLE_INITIALS', 'SURNAME', 'DOB1', 'GENDER', 'CREATE_DATE', 'EMBOSSED_NAME', 'STATUS_CODE', 'PREFERRED_LANGUAGE', 'NAMING_CONVENTION', 'TITLE', 'SALUTATION', 'ADDITIONAL_TEXT', 'BUS_COMPANY_NAME', 'INSTRUCTION', 'STREET_FREE_TEXT', 'ADDRESS_2', 'ADDRESS_3', 'CITY_NAME', 'STATE_PROVINCE_NAME', 'POSTAL_CODE', 'COUNTRY_CODE', 'ENROLLMENT_DATE', 'TIER', 'TIER_START_DATE', 'TIER_ENDS_DATE', 'NATIONALITY', 'LIFE_AMOUNT', 'POINTS_EXP_DATE', 'POINTS_EXP_AMOUNT', 'POINTS_AMOUNT', 'TMBQPER_AMOUNT', 'TMBQPER_START_DATE', 'TMBQPER_END_DATE', 'TMBQPER_SEGMENTS', 'COUNTRY', 'NATIONALITY_CODE', 'PASSWORD', 'EMAIL_ADDRESS'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_NUMBER' => Yii::t('app', 'Id  Number'),
            'FIRST_NAME' => Yii::t('app', 'First  Name'),
            'MIDDLE_INITIALS' => Yii::t('app', 'Middle  Initials'),
            'SURNAME' => Yii::t('app', 'Surname'),
            'DOB1' => Yii::t('app', 'Dob1'),
            'GENDER' => Yii::t('app', 'Gender'),
            'CREATE_DATE' => Yii::t('app', 'Create  Date'),
            'EMBOSSED_NAME' => Yii::t('app', 'Embossed  Name'),
            'STATUS_CODE' => Yii::t('app', 'Status  Code'),
            'PREFERRED_LANGUAGE' => Yii::t('app', 'Preferred  Language'),
            'NAMING_CONVENTION' => Yii::t('app', 'Naming  Convention'),
            'TITLE' => Yii::t('app', 'Title'),
            'SALUTATION' => Yii::t('app', 'Salutation'),
            'ADDITIONAL_TEXT' => Yii::t('app', 'Additional  Text'),
            'BUS_COMPANY_NAME' => Yii::t('app', 'Bus  Company  Name'),
            'INSTRUCTION' => Yii::t('app', 'Instruction'),
            'STREET_FREE_TEXT' => Yii::t('app', 'Street  Free  Text'),
            'ADDRESS_2' => Yii::t('app', 'Address 2'),
            'ADDRESS_3' => Yii::t('app', 'Address 3'),
            'CITY_NAME' => Yii::t('app', 'City  Name'),
            'STATE_PROVINCE_NAME' => Yii::t('app', 'State  Province  Name'),
            'POSTAL_CODE' => Yii::t('app', 'Postal  Code'),
            'COUNTRY_CODE' => Yii::t('app', 'Country  Code'),
            'ENROLLMENT_DATE' => Yii::t('app', 'Enrollment  Date'),
            'TIER' => Yii::t('app', 'Tier'),
            'TIER_START_DATE' => Yii::t('app', 'Tier  Start  Date'),
            'TIER_ENDS_DATE' => Yii::t('app', 'Tier  Ends  Date'),
            'NATIONALITY' => Yii::t('app', 'Nationality'),
            'LIFE_AMOUNT' => Yii::t('app', 'Life  Amount'),
            'POINTS_EXP_DATE' => Yii::t('app', 'Points  Exp  Date'),
            'POINTS_EXP_AMOUNT' => Yii::t('app', 'Points  Exp  Amount'),
            'POINTS_AMOUNT' => Yii::t('app', 'Points  Amount'),
            'TMBQPER_AMOUNT' => Yii::t('app', 'Tmbqper  Amount'),
            'TMBQPER_START_DATE' => Yii::t('app', 'Tmbqper  Start  Date'),
            'TMBQPER_END_DATE' => Yii::t('app', 'Tmbqper  End  Date'),
            'TMBQPER_SEGMENTS' => Yii::t('app', 'Tmbqper  Segments'),
            'COUNTRY' => Yii::t('app', 'Country'),
            'NATIONALITY_CODE' => Yii::t('app', 'Nationality  Code'),
            'PASSWORD' => Yii::t('app', 'Password'),
            'EMAIL_ADDRESS' => Yii::t('app', 'Email  Address'),
            'ID' => Yii::t('app', 'ID'),
        ];
    }

    /**
     * @inheritdoc
     * @return CustomerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CustomerQuery(get_called_class());
    }
}
