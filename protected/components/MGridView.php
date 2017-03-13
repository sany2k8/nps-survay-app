<?php
/**
 * Created by Sabbir.
 * To change this template use File | Settings | File Templates.
 */


Yii::import('zii.widgets.grid.CGridView');
class MGridView extends CGridView{
    function init(){
#        $pageSize=(!empty(Yii::app()->request->getParam('pageSize')))?Yii::app()->request->getParam('pageSize'):20;#user()->hasState('page-size') ? user()->getState('page-size'):20;
        $pageSize = (Yii::app()->request->getParam('pageSize')>0)?Yii::app()->request->getParam('pageSize'):10;
        $this->dataProvider->pagination->pageSize=$pageSize;

        if(count($this->columns)){

            foreach($this->columns as $key=>$column){
                if(isset($column['class'])&& $column['class']==='CButtonColumn' && !isset($column['header'])){
                    $this->columns[$key]['header']=CHtml::dropDownList(
                        'page-size',
                        $pageSize,
                        array(10=>10,20=>20,50=>50,100=>100,500=>500,1000=>1000 ),
                        array('onchange'=>"$.fn.yiiGridView.update('".$this->getId()."',{ data:{pageSize: $(this).val() }})")
                    );
                }
            }
        }

        return parent::init();
    }
}