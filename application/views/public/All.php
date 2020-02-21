<div class="col-lg-11 m-4 pt-5 text-center">
    <h4 class="widget-title display-2">All </h4>
   
    <div class="row">
        <?php foreach($data as $row): ?>
        <div class="col-md-4 ">
            <div class="recent-game-item main-panel m-2 my-5" >
                
                <div class="rgi-thumb set-bg" style="background-image: url(<?= base_url('assets/images/').$row->img?>">

                </div>
                <div class="rgi-content">
                    <h5><?= $row->name ?></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                    <a href="<?= base_url('MainC/Places/'.$row->name)?>" class="comment">View</a>

                </div>
            </div>
        </div>
        <?php endforeach; ?>



    </div>
</div>

<ul class="pagination pagination-info">
    <?= $this->pagination->create_links() ?>
</ul>

</div>