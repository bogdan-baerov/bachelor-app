<?php

namespace backend\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\UserXSection;

/**
 * UserXSectionSearch represents the model behind the search form about `backend\models\UserXSection`.
 */
class UserXSectionSearch extends UserXSection
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'UserId', 'SectionId'], 'safe'],
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
        $query = UserXSection::find();

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
            'Id' => $this->Id,
            'UserId' => $this->UserId,
            'SectionId' => $this->SectionId,
        ]);

        $query->andWhere(['Enabled' => 1]);
        return $dataProvider;
    }
}