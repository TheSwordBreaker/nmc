<div class="widget-item m-5 pt-5 responsive">
    <p class="color-black-opacity-5" style="font-size: 30px;">Search Results!!!</p>
    <div class="latest-blog row responsive">
        <?php foreach($result as $row): ?>
        <div class="lb-item my-4 p-3 ml-1 rounded main-raised ">
        <div class="lb-thumb set-bg " style="background-image: url('<?= base_url('assets/images/').$row->img ?>')"></div>          
            <div class="lb-content">
                <div class="lb-Header display-5 
                "><?= $row->name ?></div>
                <p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
                <a href="<?= base_url('MainC/Places/'.$row->name)?>" class="lb-author">By Admin</a>
            </div>
            
        </div>
        
        
        <?php endforeach; ?>

    </div>
</div>

<ul class="pagination pagination-info ">
    <?= $this->pagination->create_links() ?>
</ul>




