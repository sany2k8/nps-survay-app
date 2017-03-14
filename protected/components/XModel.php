<?php

class XModel  extends CActiveRecord {

    public $_businessId;

    public function checkSiteIdField($conditions, $operator="AND"){

        if($labels=$this->attributeLabels() and !empty($labels['site_id'])){
            if(is_array($conditions)){
                if(!empty($conditions['condition'])){
                    $conditions['condition'] .= " $operator site_id=".GenericProperties::getAffiliateId();
                }else{
                    $conditions['condition'] = " site_id=".GenericProperties::getAffiliateId();
                }
            }
            elseif(is_object($conditions))
            {
                $conditions->compare("site_id",GenericProperties::getAffiliateId());
                return $conditions;
            }
            else{
                $conditions.=" $operator site_id=".GenericProperties::getAffiliateId();
            }

        }

        return $conditions;
    }

    public function find($conditions="", $params=array()){

        $conditions = $this->checkSiteIdField($conditions);
        parent::find();
        Yii::trace(get_class($this).'.find()','system.db.ar.CActiveRecord');

        $criteria=$this->getCommandBuilder()->createCriteria($conditions,$params);


        return $this->query($criteria);
    }

    public function findByPk($pk,$conditions='',$params=array())
    {
        $conditions = $this->checkSiteIdField($conditions, "");
        parent::findByPk($pk);
        Yii::trace(get_class($this).'.findByPk()','system.db.ar.CActiveRecord');
        $prefix=$this->getTableAlias(true).'.';
        $criteria=$this->getCommandBuilder()->createPkCriteria($this->getTableSchema(),$pk,$conditions,$params,$prefix);
        return $this->query($criteria);
    }


    public function findByPkForPropertyCount($pk,$conditions='',$params=array())
    {
        parent::findByPk($pk);
        Yii::trace(get_class($this).'.findByPk()','system.db.ar.CActiveRecord');
        $prefix=$this->getTableAlias(true).'.';
        $criteria=$this->getCommandBuilder()->createPkCriteria($this->getTableSchema(),$pk,$conditions,$params,$prefix);
        return $this->query($criteria);
    }




/*    public function setBusinessId(){

    }*/
} 