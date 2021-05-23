<!--Bài viết liên quan-->
<div class="col-lg-3">
    <div class="row mb-3">
        <div class="col-12">
            <div class="title-section">
                <h4 class="bg-danger p-3 text-white w-100">
                    Bài viết liên quan</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach($lst_post as $post){?>
        <div class="col-md-12 mb-2">
            <div class="card w-100">
                <div class="row">
                    <div class="col-5">
                        <img class="card-img-top" src="<?php echo $level.img_path.$post['prodImage'];?>"
                            style="height:100px;">
                    </div>
                    <div class="col">
                        <div class="card-body p-0">
                            <h6 class="card-title line-clamp-2">
                                <?php echo $post['prodName'];?></h6>
                            <p class="card-time">
                                <?php echo $post['prodDate'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <div class="col-md-12 mb-2">
            <button type="button" class="btn btn-info w-100">
                Xem thêm</button>
        </div>
    </div>
</div>
</div>