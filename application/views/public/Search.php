<div class="widget-item m-5 pt-5">
    <h4 class="widget-title display-2">Search Result</h4>
    <div class="latest-blog row ">
        <?php foreach($result as $row): ?>
        <div class="lb-item my-4 p-3 ml-1 rounded main-raised" style="width:440px">
        <div class="lb-thumb set-bg " style="background-image: url(<?= base_url('assets/images/').$row->img?>"></div>          
            <div class="lb-content">
                <div class="lb-Header display-5
                "><?= $row->name ?></div>
                <p><?= substr($row->des,0,50) ?>...</p>
                <!-- <p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p> -->
                <a href="<?= base_url('MainC/Places/'.$row->name)?>" class="lb-author">By Admin</a>
            </div>
            
        </div>
        
        
        <?php endforeach; ?>

    </div>
</div>

<ul class="pagination pagination-info">
    <?= $this->pagination->create_links() ?>
</ul>




