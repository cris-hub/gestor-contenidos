<?php

namespace app\modules\recreacion\models;

/**
 * This is the ActiveQuery class for [[HotelAgreements]].
 *
 * @see HotelAgreements
 */
class HotelAgreementsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HotelAgreements[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HotelAgreements|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
