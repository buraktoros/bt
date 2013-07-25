<ul class="gallery">
<?php

$dataProvider=new CActiveDataProvider('Photo');

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_photo',
    'summaryText'=>false,
));

?>
</ul>