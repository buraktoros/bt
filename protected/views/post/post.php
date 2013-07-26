
<div class="post row">
    <div class="span2">
        <div class="date-badge">
            <div class="date-badge-d"><?php echo date('d',strtotime($model->date)) ?></div>
            <div class="date-badge-m"><?php echo date('M',strtotime($model->date)) ?></div>
        </div>
    </div>
    <div class="span9 post-border">
        <div class="post-self">
            <h2><?php echo $model->title; ?></h2>
            <p><?php echo $model->entry; ?>
            </p>
        </div>
    </div>
</div>


