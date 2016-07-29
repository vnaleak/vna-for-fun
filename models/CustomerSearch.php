<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customer;

/**
 * CustomerSearch represents the model behind the search form about `app\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_NUMBER', 'FIRST_NAME', 'MIDDLE_INITIALS', 'SURNAME', 'DOB1', 'GENDER', 'CREATE_DATE', 'EMBOSSED_NAME', 'STATUS_CODE', 'PREFERRED_LANGUAGE', 'NAMING_CONVENTION', 'TITLE', 'SALUTATION', 'ADDITIONAL_TEXT', 'BUS_COMPANY_NAME', 'INSTRUCTION', 'STREET_FREE_TEXT', 'ADDRESS_2', 'ADDRESS_3', 'CITY_NAME', 'STATE_PROVINCE_NAME', 'POSTAL_CODE', 'COUNTRY_CODE', 'ENROLLMENT_DATE', 'TIER', 'TIER_START_DATE', 'TIER_ENDS_DATE', 'NATIONALITY', 'LIFE_AMOUNT', 'POINTS_EXP_DATE', 'POINTS_EXP_AMOUNT', 'POINTS_AMOUNT', 'TMBQPER_AMOUNT', 'TMBQPER_START_DATE', 'TMBQPER_END_DATE', 'TMBQPER_SEGMENTS', 'COUNTRY', 'NATIONALITY_CODE', 'PASSWORD', 'EMAIL_ADDRESS'], 'safe'],
            [['ID'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Customer::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
        ]);

        $query->andFilterWhere(['like', 'ID_NUMBER', $this->ID_NUMBER])
            ->andFilterWhere(['like', 'FIRST_NAME', $this->FIRST_NAME])
            ->andFilterWhere(['like', 'MIDDLE_INITIALS', $this->MIDDLE_INITIALS])
            ->andFilterWhere(['like', 'SURNAME', $this->SURNAME])
            ->andFilterWhere(['like', 'DOB1', $this->DOB1])
            ->andFilterWhere(['like', 'GENDER', $this->GENDER])
            ->andFilterWhere(['like', 'CREATE_DATE', $this->CREATE_DATE])
            ->andFilterWhere(['like', 'EMBOSSED_NAME', $this->EMBOSSED_NAME])
            ->andFilterWhere(['like', 'STATUS_CODE', $this->STATUS_CODE])
            ->andFilterWhere(['like', 'PREFERRED_LANGUAGE', $this->PREFERRED_LANGUAGE])
            ->andFilterWhere(['like', 'NAMING_CONVENTION', $this->NAMING_CONVENTION])
            ->andFilterWhere(['like', 'TITLE', $this->TITLE])
            ->andFilterWhere(['like', 'SALUTATION', $this->SALUTATION])
            ->andFilterWhere(['like', 'ADDITIONAL_TEXT', $this->ADDITIONAL_TEXT])
            ->andFilterWhere(['like', 'BUS_COMPANY_NAME', $this->BUS_COMPANY_NAME])
            ->andFilterWhere(['like', 'INSTRUCTION', $this->INSTRUCTION])
            ->andFilterWhere(['like', 'STREET_FREE_TEXT', $this->STREET_FREE_TEXT])
            ->andFilterWhere(['like', 'ADDRESS_2', $this->ADDRESS_2])
            ->andFilterWhere(['like', 'ADDRESS_3', $this->ADDRESS_3])
            ->andFilterWhere(['like', 'CITY_NAME', $this->CITY_NAME])
            ->andFilterWhere(['like', 'STATE_PROVINCE_NAME', $this->STATE_PROVINCE_NAME])
            ->andFilterWhere(['like', 'POSTAL_CODE', $this->POSTAL_CODE])
            ->andFilterWhere(['like', 'COUNTRY_CODE', $this->COUNTRY_CODE])
            ->andFilterWhere(['like', 'ENROLLMENT_DATE', $this->ENROLLMENT_DATE])
            ->andFilterWhere(['like', 'TIER', $this->TIER])
            ->andFilterWhere(['like', 'TIER_START_DATE', $this->TIER_START_DATE])
            ->andFilterWhere(['like', 'TIER_ENDS_DATE', $this->TIER_ENDS_DATE])
            ->andFilterWhere(['like', 'NATIONALITY', $this->NATIONALITY])
            ->andFilterWhere(['like', 'LIFE_AMOUNT', $this->LIFE_AMOUNT])
            ->andFilterWhere(['like', 'POINTS_EXP_DATE', $this->POINTS_EXP_DATE])
            ->andFilterWhere(['like', 'POINTS_EXP_AMOUNT', $this->POINTS_EXP_AMOUNT])
            ->andFilterWhere(['like', 'POINTS_AMOUNT', $this->POINTS_AMOUNT])
            ->andFilterWhere(['like', 'TMBQPER_AMOUNT', $this->TMBQPER_AMOUNT])
            ->andFilterWhere(['like', 'TMBQPER_START_DATE', $this->TMBQPER_START_DATE])
            ->andFilterWhere(['like', 'TMBQPER_END_DATE', $this->TMBQPER_END_DATE])
            ->andFilterWhere(['like', 'TMBQPER_SEGMENTS', $this->TMBQPER_SEGMENTS])
            ->andFilterWhere(['like', 'COUNTRY', $this->COUNTRY])
            ->andFilterWhere(['like', 'NATIONALITY_CODE', $this->NATIONALITY_CODE])
            ->andFilterWhere(['like', 'PASSWORD', $this->PASSWORD])
            ->andFilterWhere(['like', 'EMAIL_ADDRESS', $this->EMAIL_ADDRESS]);

        return $dataProvider;
    }
}
