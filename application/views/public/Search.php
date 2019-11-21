<div class="widget-item m-5 pt-5">
    <h4 class="widget-title display-2">Search Result</h4>
    <div class="latest-blog row ">
        <?php foreach($result as $row): ?>
        <div class="lb-item m-2 ">
        <div class="lb-thumb set-bg" style="background-image: url(<?= base_url('assets/images/').$row->img?>"></div>          
            <div class="lb-content">
                <div class="lb-Header display-5
                "><?= $row->name ?></div>
                <p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
                <a href="<?= base_url('MainC/Dest/'.$row->name)?>" class="lb-author">By Admin</a>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</div>



