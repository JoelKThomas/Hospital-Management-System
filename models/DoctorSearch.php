<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Doctor;

/**
 * DoctorSearch represents the model behind the search form about `app\models\Doctor`.
 */
class DoctorSearch extends Doctor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['doctor_id', 'doctor_salary', 'doctor_sex', 'doctor_contact', 'doctor_dept'], 'integer'],
            [['doctor_name', 'doctor_address', 'doctor_qualification'], 'safe'],
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
        $query = Doctor::find();

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
            'doctor_id' => $this->doctor_id,
            'doctor_salary' => $this->doctor_salary,
            'doctor_sex' => $this->doctor_sex,
            'doctor_contact' => $this->doctor_contact,
            'doctor_dept' => $this->doctor_dept,
        ]);

        $query->andFilterWhere(['like', 'doctor_name', $this->doctor_name])
            ->andFilterWhere(['like', 'doctor_address', $this->doctor_address])
            ->andFilterWhere(['like', 'doctor_qualification', $this->doctor_qualification]);

        return $dataProvider;
    }
}
