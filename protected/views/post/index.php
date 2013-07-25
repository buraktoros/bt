<?php

$dataProvider=new CActiveDataProvider('Post');

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_post',
    'summaryText'=>false,
));

?>