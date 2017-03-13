<div class="mws-panel grid_6">
        <h1>Import CSV</h1>

    <div class="mws-panel-body" style="height: auto">
        <div class="form">

            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'test-form',
                'enableAjaxValidation'=>false,
                'htmlOptions'=>array(
                    'enctype' => 'multipart/form-data',
                    'class'=>'mws-form'
                ),
            )); ?>


            <div class="mws-form-row">
                <?php
                    echo CHtml::label("CSV file","csv",array("class"=>'mws-form-label'));
                    echo '<div class="mws-form-item">';
                    echo CHtml::fileField('csv','',array('class'=>'fileField_avatar'));
                    echo '</div>';
                ?>
            </div>

            <div class="mws-button-row" style="margin-top: 40px;">
                <?php echo CHtml::submitButton('Import',array("name"=>'save',"class"=>"btn btn-primary")); ?>
            </div>

            <?php $this->endWidget(); ?>

        </div><!-- form -->
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        //$(".fileinput-holder").css('width','268px');
        $(".fileinput-preview").css("width",'236px');
        $(".fileinput-btn.btn").css('right','235px');
    });
</script>
<div class="clear"></div>
<?php

    if(isset($csvData->data) and is_array($csvData->data))
    {
        print "<table>";

            print "<tr>";
            foreach($csvData->titles as $v)
            {
                print "<th>$v</th>";
            }
            print "</tr>";
            foreach($csvData->data as $v)
            {
                print "<tr>";
                foreach($v as $l=>$d)
                {

                    print "<td>";print_r($d); print "</td>";


                }
                print "</tr>";

            }
        print "</table>";
    }
    elseif(is_string($csvData))
    {
        print $csvData;
    }
?>