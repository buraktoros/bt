
<div class="post row">
    <div class="span2">
        <div class="date-badge">
            <div class="date-badge-d"><?php echo date('d',strtotime($data->date)) ?></div>
            <div class="date-badge-m"><?php echo date('M',strtotime($data->date)) ?></div>
        </div>
    </div>
    <div class="span9 post-border">
        <div class="post-self">
            <h2><?php echo $data->title ?></h2>
            <p><?php
                $string = (strlen($data->entry) > 120) ? substr($data->entry,0,120).'...' : $data->entry;
                echo $string
                ?>
            </p>
            <a href="#" class="more">Daha fazla...</a>
        </div>
    </div>
</div>