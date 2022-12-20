<?php

namespace common\models\product;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\product\ProductItem;

/**
 * ProductItemSearch represents the model behind the search form of `common\models\product\ProductItem`.
 */
class ProductItemSearch extends ProductItem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'product_category_id', 'product_type_id', 'currency_id', 'price', 'new_price'], 'integer'],
            [['vendor_code', 'name', 'barcode'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = ProductItem::find();

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
            'id' => $this->id,
            'product_category_id' => $this->product_category_id,
            'product_type_id' => $this->product_type_id,
            'currency_id' => $this->currency_id,
            'price' => $this->price,
            'new_price' => $this->new_price,
        ]);

        $query->andFilterWhere(['like', 'vendor_code', $this->vendor_code])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'barcode', $this->barcode]);

        return $dataProvider;
    }
}
