<?php
/* @var $this RoutersController */

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array('Devices' => 'index.php?r=routers/index', 'Device Configuration'),
));
?>
<h1><?php //echo $this->id . '/' . $this->action->id; ?></h1>

<?php

$this->widget('bootstrap.widgets.TbGridView', array(
        'type'            => 'striped bordered condensed',
        'id'              => 'routers-grid',
        'dataProvider'    => $model->search(),
        'filter'          => $model,
        'enablePagination'=>true,
        'template'=>"{items}{pager}",
        'columns'         => array(
        array('name'=>'name', 'header'=>'Name'),
        array('name'=>'ip_addr', 'header'=>'ID'),
        array('name'=>'status', 'header'=>'State'),
        array('name'=>'eq_vendor', 'header'=>'Vendor'),
        array('name'=>'eq_type', 'header'=>'Model'),
            array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
             'template'=>'{view}',
                        'buttons'=>array(       
                                'view' => array(
                                  'url'=>'Yii::app()->controller->createUrl("routers/configuration", array("id"=>$data["router_id"]))',
                                ),
                                'delete' => array(
//                                  'url'=>'Yii::app()->controller->createUrl("ports/delete", array("id"=>$data[id],"command"=>"delete"))',
                                ),
                            ),
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
        ),
        
    ));
?>