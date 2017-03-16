<?php

class XModel  extends CActiveRecord {


    public function find($conditions="", $params=array()){

        parent::find();
        Yii::trace(get_class($this).'.find()','system.db.ar.CActiveRecord');

        $criteria=$this->getCommandBuilder()->createCriteria($conditions,$params);

        return $this->query($criteria);
    }

    public function findByPk($pk,$conditions='',$params=array())
    {

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
} 