<section class="lst-news wrap">
    <div class="line">
        <?php foreach($lst_post as $pos)
        { ?>
        <article class="bg-light mt-3 p-3 text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <div class="img"><img src="<?php echo $level.img_path.$pos['prodImage'];?>" alt=""></div>
            <h5 class="p-2"><?php echo $pos['prodName'];?></h5>
            <p class="p-2" style="text-align: justify; overflow:hidden; height:20vh;">
                <?php echo $pos['prodDescription'];?>
            </p>
            <p style="text-align: right;"><span>02-05-2021</span><span style="padding-left: 4%;"><i class="fas fa-eye"
                        style="padding-right: 2%;"></i>255</span></p>
        </article>
        <?php }?>
    </div>
    <div class="container-fluid text-center mt-3"><button class="btn btn-primary">Xem
            thêm...</button></div>
</section>