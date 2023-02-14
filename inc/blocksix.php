
<?php 
for ( $i=0 ; $i<3 ; $i++)
{ ?>
 <div class="container-fluid  d-flex justify-content-center p-5 "  <?php if ($block1[0]) { echo `style="height:75vh;"`; } ?> >



<?php
if ($block1[$i]) { ?>

<a href="<?= $l1[$i] ?>" ><div class="card mx-3" style="width:15rem ; background-color: rgba(255, 255, 255, 0.7);">
        <img class="card-img-top" src="<?= $img1[$i] ?>" alt="Card image" style="height:15rem; opacity: 0.7;">
        <div class="card-body">
          <h4 class="card-title text-center" style="opacity:1;color: red;"><strong><?= $c1[$i] ?></strong></h4>
        </div>
    </div></a>
<?php } ?>

    <?php if ($block2[$i]) { ?>    <a href="<?= $l2[$i] ?>" ><div class="card mx-3" style="width:15rem ; background-color: rgba(255, 255, 255, 0.7);">
        <img class="card-img-top" src="<?= $img2[$i] ?>" alt="Card image" style="height:15rem; opacity: 0.7;">
        <div class="card-body">
          <h4 class="card-title text-center" style="opacity:1;color: red;"><strong><?= $c2[$i] ?></strong></h4>
        </div>
    </div></a>
    <?php } ?>

    <?php if ($block3[$i]) { ?>
    <a href="<?= $l3[$i] ?>" ><div class="card mx-3" style="width:15rem ; background-color: rgba(255, 255, 255, 0.7);">
        <img class="card-img-top" src="<?= $img3[$i] ?>" alt="Card image" style="height:15rem; opacity: 0.7;">
        <div class="card-body">
          <h4 class="card-title text-center" style="opacity:1;color: red;"><strong><?= $c3[$i] ?></strong></h4>
        </div>
    </div></a>
    <?php } ?>

    <?php if ($block4[$i]) { ?>
    <a href="<?= $l4[$i] ?>" ><div class="card mx-3" style="width:15rem ; background-color: rgba(255, 255, 255, 0.7);">
        <img class="card-img-top" src="<?= $img4[$i] ?>" alt="Card image" style="height:15rem; opacity: 0.7;">
        <div class="card-body">
          <h4 class="card-title text-center" style="opacity:1;color: red;"><strong><?= $c4[$i] ?></strong></h4>
        </div>
    </div></a>
    <?php } ?>

    <?php if ($block5[$i]) { ?>
    <a href="<?= $l5[$i] ?>" ><div class="card mx-3" style="width:15rem ; background-color: rgba(255, 255, 255, 0.7);">
        <img class="card-img-top" src="<?= $img5[$i] ?>" alt="Card image" style="height:15rem; opacity: 0.7;">
        <div class="card-body">
          <h4 class="card-title text-center" style="opacity:1;color: red;"><strong><?= $c5[$i] ?></strong></h4>
        </div>
    </div></a>
    <?php } ?>

    <?php if ($block6[$i]) { ?>
    <a href="<?= $l6[$i] ?>" ><div class="card mx-3" style="width:15rem ; background-color: rgba(255, 255, 255, 0.7);">
        <img class="card-img-top" src="<?= $img6[$i] ?>" alt="Card image" style="height:15rem; opacity: 0.7;">
        <div class="card-body">
          <h4 class="card-title text-center" style="opacity:1;color: red;"><strong><?= $c6[$i] ?></strong></h4>
        </div>
    </div></a>}
    <?php } ?>
    
</div>
<?php } ?>