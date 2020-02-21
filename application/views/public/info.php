  <div class="container">
    <div class="section text-center"> 
           <?php for ($i=0; $i < $no1 ; $i++): ?>
            <?php if($sec1[$i]->active==1) :?>
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                         <h2 class="title"><?= $sec1[$i]->name ?></h2>
                         <h5 class="description"><?= $sec1[$i]->des ?></h5>
                    </div>
                </div><br>
                <?php endif?>
            <?php endfor; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-9 ml-auto mr-auto" id="box-raised">
                   <?php for ($i=0; $i < $no2 ; $i++): ?>
                       <div id="box">
                        <div class="icon icon-info">
                            <i class="material-icons">
                               <?= $sec2[$i]->icon ?> 
                            </i>
                        </div>
                        <h2><?= $sec2[$i]->name ?></h2>
                        <p class="text-justify"><?= $sec2[$i]->des ?></p>
                        <p> <strong>More info</strong>: <a href="https://nashik.com/railway-timetable/" target="_blank">Nashik.com/railway-timetable/</a>
                        </p>
                    </div>
                    <hr>
            <?php endfor; ?>
            </div>
        </div>
     
    </div>
    <br> 
    <div class="section " id="other-raised">
        <div class="container " id="other-container">
            <div class="col-md-11 ml-auto mr-auto">
                <h3><b>Find Your Destination after reached to Nashik : </b></h3>
                <div class="row">
                    <div class="col-md-11 ml-auto mr-auto ">
                        <h4><b>1.TRAMBAKESHWAR, NASHIK : </b> </h4>
                        <h5>Nashik Road <i class="fa fa-long-arrow-right"> </i> CBS <i class="fa fa-long-arrow-right"></i> Trambakeshwar Bus</h5>
                        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OR</h5>
                        <h5>CBS <i class="fa fa-long-arrow-right"> </i> Trambakeshwar Bus</h5>
                        <h4><b>2.PANCHVATI, NASHIK : </b> </h4>
                        <h5>Nashik Road <i class="fa fa-long-arrow-right"> </i> Panchavati Bus </h5>
                        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OR</h5>
                        <h5>CBS <i class="fa fa-long-arrow-right"> </i> Panchavati Bus</h5>
                        <h4><b>3.SAPTASHRUNGI GADH, VANI : </b> </h4>
                        <h5>Nashik Road <i class="fa fa-long-arrow-right"> </i> CBS <i class="fa fa-long-arrow-right"></i> Saptashrungi Gad, Vani Bus </h5>
                        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OR</h5>
                        <h5>CBS <i class="fa fa-long-arrow-right"> </i> Saptashrungi Gad, Vani Bus </h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>