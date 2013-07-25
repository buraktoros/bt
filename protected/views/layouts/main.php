<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="language" content="en" />
    <meta content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.fancybox.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox-thumb").fancybox({
                prevEffect	: 'none',
                nextEffect	: 'none',
                helpers	: {
                    title	: {
                        type: 'outside'
                    },
                    thumbs	: {
                        width	: 150,
                        height	: 150
                    }
                }
            });
        });
    </script>
</head>

<body>

<?php //$this->widget('bootstrap.widgets.TbNavbar', array(
//    'type'=>'inverse', // null or 'inverse'
//    'brand'=>'Burak Toros',
//    'brandUrl'=>'#',
//    'collapse'=>true, // requires bootstrap-responsive.css
//    'items'=>array(
//        array(
//            'class'=>'bootstrap.widgets.TbMenu',
//            'items'=>array(
//                array('label'=>'Home', 'url'=>'#', 'active'=>true),
//                array('label'=>'Link', 'url'=>'#'),
//                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
//                    array('label'=>'Action', 'url'=>'#'),
//                    array('label'=>'Another action', 'url'=>'#'),
//                    array('label'=>'Something else here', 'url'=>'#'),
//                    '---',
//                    array('label'=>'NAV HEADER'),
//                    array('label'=>'Separated link', 'url'=>'#'),
//                    array('label'=>'One more separated link', 'url'=>'#'),
//                )),
//            ),
//        ),
//        '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
//        array(
//            'class'=>'bootstrap.widgets.TbMenu',
//            'htmlOptions'=>array('class'=>'pull-right'),
//            'items'=>array(
//                array('label'=>'Link', 'url'=>'#'),
//                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
//                    array('label'=>'Action', 'url'=>'#'),
//                    array('label'=>'Another action', 'url'=>'#'),
//                    array('label'=>'Something else here', 'url'=>'#'),
//                    '---',
//                    array('label'=>'Separated link', 'url'=>'#'),
//                )),
//            ),
//        ),
//    ),
//)); ?>
<div class="header">
        <div class="container">
            <ul>
                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php">Burak Toros</a></li>
                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/post">Blog</a></li>
                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/photo">Galeri</a></li>
                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>">İletişim</a></li>
            </ul>
        </div>
</div>


<div class="container">
   <?php echo $content; ?>
</div>

<div class="footer">
    <div class="row">
        <div class="container">
            Copyright &copy; <?php echo date('Y'); ?> by <a target="_blank" href="http://www.wiggledigital.com/">Wiggle Digital</a><br/>
            All Rights Reserved.
        </div>
    </div>
</div>

</body>
</html>
